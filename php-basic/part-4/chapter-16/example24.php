<table>
    <?php foreach(range(1, 100) as $i): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>Это строка номер <?php echo $i; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<hr>

<table>
    <?php for($i = 1; $i <= 100; $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>Это строка номер <?php echo $i ?></td>
        </tr>
    <?php endfor; ?>
</table>