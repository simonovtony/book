<html>
    <body>
        <form>
            a: <input name="a" type="text"><br>
            b: <input name="b" type="text"><br>
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_REQUEST['submit'])) {
                
                $a = (float)$_REQUEST['a'];
                $b = (float)$_REQUEST['b'];
                if($a > $b) {
                    print "a больше b";
                    $c = $b;
                } elseif ($a == $b) {
                    print "а равно b";
                    $c = $a;
                } else {
                    print "a меньше b";
                    $c = $a;
                }
                echo "<br>Минимальное из чисел: $c";
                
            }
        ?>
    </body>
</html>