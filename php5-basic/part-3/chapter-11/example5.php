<html>
    <body>
        <form>
            Имя: <input type="text" name="Data[name]"><br>
            Адресс: <input type="text" name="Data[address]"><br>
            Город:<br>
            <input type="radio" name="Data[city]" value="Moscow">Москва<br>
            <input type="radio" name="Data[city]" value="Peter">Санкт-Петербург<br>
            <input type="radio" name="Data[city]" value="Kiev">Киев<br>
            <input type="submit" value="Submit">
        </form>
        <br>
        <br>
        <?php 
        
        if(isset($_REQUEST['Data'])) {
            echo "<pre>";
            var_dump($_REQUEST['Data']);
            echo "</pre>";
        }
        
        ?>
    </body>
</html>