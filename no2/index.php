
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find index by letter</title>
</head>
<body>

    <script>
        function showSomething(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getHint.php?q=" + str, true);
                xmlhttp.send();
            }
        }    
    </script>
    <h1>Type in a First Name</h1>
    <form>First Name: <input type="text" onkeyup="showSomething(this.value)"></form>
    <p>Suggestions: <span id="txtHint"></span></p>
    
</body>
</html>