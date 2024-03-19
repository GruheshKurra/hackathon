function generateResponse() {
    var text = document.getElementById("text").value;
    var response = document.getElementById("response");
    fetch("response.php", {
        method: "post",
        body: JSON.stringify({
            text: text + ' in html with inline css without img tags'
        })
    })
    .then(response => response.text())
    .then(res => {
        response.innerHTML = res;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
