<?php
require "vendor/autoload.php";
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use GeminiAPI\Resources\Parts\ImagePart;

// Decode the incoming JSON data
$data = json_decode(file_get_contents("php://input"));

// Extract the text from the JSON data
$text = $data->text;

// Replace "YOUR_API_KEY" with your actual Gemini API key
$client = new Client("AIzaSyDdpTRxHpVOMGlAqcbWCNNrVeSdvJha3IM");

// Generate content using Gemini API
$response = $client->geminiPro()->generateContent(
    new TextPart($text)
);

// Check if the response contains table structure
$isTable = strpos($response->text(), '|') !== false;

// Check if the response contains image data URI
$isImage = strpos($response->text(), 'data:image') !== false;

// Output the generated response based on its type
if ($isTable) {
    // Display response as table
    echo "<table border='1'>";
    $rows = explode("\n", $response->text());
    foreach ($rows as $row) {
        echo "<tr>";
        $columns = explode("|", $row);
        foreach ($columns as $column) {
            echo "<td>$column</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} elseif ($isImage) {
    // Decode and display image
    $imageData = str_replace('data:image/png;base64,', '', $response->text());
    $imageData = str_replace(' ', '+', $imageData);
    $decodedImage = base64_decode($imageData);
    header('Content-Type: image/png');
    echo $decodedImage;
} else {
    // Display response as plain text
    echo $response->text();
}
?>
