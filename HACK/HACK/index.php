<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <style>
        body {
            font-family: 'Inter Tight', sans-serif;
            /* Apply 'Inter Tight' font family */
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 100px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: larger;
            border-radius: 100px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #response {
            margin-top: 20px;
        }

        #response {
            max-width: 60%;
            min-height: 400px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Chat Bot</h1>
        <input type="text" id="text">
        <br><br>
        <button onclick="generateResponse();">Generate Response</button>
        <br><br>
    </div>
    <div id="response"></div>
    <script src="./script.js"></script>
</body>

</html>