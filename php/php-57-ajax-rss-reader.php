<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RSS Reader</title>
        <script>
            function showRSS(str)
            {
                if(str.length == 0)
                {
                    document.getElementById("rssOutput").innerHTML = "";
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
                        document.getElementById("rssOutput").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "php-57-ajax-rss-reader/getrss.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <form>
            <select onchange="showRSS(this.value)">
                <option value="">Select an RSS-feed:</option>
                <option value="Google">Google News</option>
                <option value="NBC">NBC News</option>
            </select>
        </form>
        <br>
        <div id="rssOutput">RSS-feed will be listed here...</div>
    </body>
</html>