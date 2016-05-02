<!DOCTYPE html>
<html>
    <head>
        <script>
            function showCD(str)
            {
                if(str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
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
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "php-55-ajax-xml/getcd.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <form>
            Select a CD:
            <select name="cds" onchange="showCD(this.value)">
                <option value="">Select a CD:</option>
                <option value="Bob Dylan">Bob Dylan</option>
                <option value="Bee Gees">Bee Gees</option>
                <option value="Cat Stevens">Cat Stevens</option>
            </select>
        </form>
        <div id="txtHint">
            <b>CD info will be listen here...</b>
        </div>
    </body>
</html>