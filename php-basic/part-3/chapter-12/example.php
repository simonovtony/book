<html>
    <body>
        <form>
            <input type="text" name="salary">
            <input type="submit" name="doGo">
        </form>
        <?php
            if(isset($_REQUEST['doGo'])) {
                $salary = (int)$_REQUEST['salary'];

                if($salary >= 100 && $salary <= 5000)
                    echo "Вам еще расти и расти";
                else 
                    echo "Ну и правильно - не вденьгах счастье.";
            }
        ?>
    </body>
</html>