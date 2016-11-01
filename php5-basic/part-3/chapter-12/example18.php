<html>
    <body>
        <form>
            Введите число: <input type="text" name="v"><br>
            <input type="submit" name="submit">
        </form>
        <?php

        if(isset($_REQUEST['submit'])) {
            $v = (int)$_REQUEST['v'];

            switch($v):
                case 1:
                    echo "Один";
                    break;
                case 2:
                case 3:
                    echo "Два или Три";
                    break;
                case 4:
                    echo "Четыре";
                    break;
                default:
                    echo "Не один, два, три, четыре";
                    break;
            endswitch;
        }

        ?>
    
    </body>
</html>