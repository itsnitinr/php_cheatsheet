<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>PHP AJAX Demo</title>
    <script>
        function showSuggestions(str) {
            console.log(str);
            if (str.length == 0) {
                document.getElementById("output").innerHTML = "";
            } else {
                // AJAX request
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("output").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form method="POST">
            Search User: <input type="text" class="form-control" onkeyup="showSuggestions(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>
    </div>
</body>
</html>