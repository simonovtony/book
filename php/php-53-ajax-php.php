<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AJAX</title>
    <script>
        function showHint(str)
        {
            if (str.length == 0)
            {
                document.getElementById("txtHint").innerHTML = "";
            }
            else
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "php-53-ajax-php/gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <p><b>Start typing a name in the input field below:</b></p>
    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>