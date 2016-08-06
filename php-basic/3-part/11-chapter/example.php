<html>
    <body>
        <form>
            <select name="Sel" multiple>
                <option>First
                <option>Second
                <option>Third
            </select>
            <br>
            <input type="submit" value="Submit">
            <br>
            <?php
                if(isset($_REQUEST['Sel'])) {
                    echo "<pre>";
                    var_dump($_REQUEST['Sel']);
                    echo "</pre>";
                }
            ?>
        </form>
    </body>
</html>