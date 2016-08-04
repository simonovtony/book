<!-- Простейший PHP-сценарий -->
<html>
    <body>
        <h1>Здравствуйте!</h1>
        <?php 
            // Вычисляем текущую дату в формате "день.месяц.год"
            $dat = date("d.m.y");
            // Вычисляем текущее время
            $tm = date("h:i:s");
            # Выводим их
            echo "Текущая дата: $dat года<br>\n";
            echo "Текущее время: $tm<br>\n";
            # Выводим цифры
            echo "А вот квадраты и кубы первых 5 натуральных чисел:<br>\n";
            for($i = 1; $i <= 5; $i++) {
                echo "<li>$i в квадрате = " . ($i * $i);
                echo ", $i в кубе = " . ($i * $i * $i) . "\n";
            }
            /*
                это комментарий
                ...и еще одна строка
            */
        ?>
    </body>
</html>
