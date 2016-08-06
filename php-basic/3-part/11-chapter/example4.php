<html>
    <body>
        <form>
            <input type="checkbox" name="Arr[]" value="ch1">
            <input type="checkbox" name="Arr[]" value="ch2">
            <input type="text" name="Arr[]" value="Some string">
            <textarea name="Arr[]">Some text</textarea>
            <button type="submit">
                Submit
            </button>
        </form>
        <br>
        <?php
        
        if(isset($_REQUEST['Arr'])) {
            echo "<pre>";
            var_dump($_REQUEST['Arr']);
            echo "</pre>";
        }
        
        ?>
    </body>
</html>