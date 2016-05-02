<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AJAX</title>
        <script>
            function showUser(str)
            {
                if(str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                }
                else
                {
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
                    xmlhttp.open("GET", "php-54-ajax-database/getuser.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <form>
            <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person</option>
                <option value="1">Peter Griffin</option>
                <option value="2">Lois Griffin</option>
                <option value="3">Joseph Swanson</option>
                <option value="4">Glenn Quagmire</option>
            </select>
        </form>
        <br>
        <div id="txtHint">
            <b>Person info will be listen here...</b>
        </div>
    </body>
</html>