<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP AJAX LiveSearch</title>
        <script>
            function showResult(str)
            {
                if(str.length == 0)
                {
                    document.getElementById("livesearch").innerHTML = "";
                    document.getElementById("livesearch").style.border = "0px";
                    return;
                }
                if(window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
                        document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                    }
                }
                xmlhttp.open("GET", "php-56-ajax-livesearch/livesearch.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <form>
            <input type="text" size="30" onkeyup="showResult(this.value)">
            <div id="livesearch"></div>
        </form>
    </body>
</html>