<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AJAX Poll</title>
        <script>
            function getVote(int)
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
                        document.getElementById("poll").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "php-58-ajax-poll/poll_vote.php?vote=" + int, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <div id="poll">
            <h3>Do you like PHP and AJAX so far?</h3>
            <form>
                Yes:
                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                <br>
                No:
                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            </form>
        </div>
    </body>
</html>