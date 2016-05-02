<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AJAX</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }
            th {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
            $q = intval($_GET['q']);

            $con = new mysqli("localhost", "root", "", "ajax_demo");

            if(!$con)
                die("Could not connect: " . $con->error);

            $con->select_db("ajax_demo");

            $sql = "SELECT * FROM users WHERE id = '$q'";

            $result = $con->query($sql);
        ?>
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Hometown</th>
                <th>Job</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['hometown'] . "</td>";
                    echo "<td>" . $row['job'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <?php
        $con->close();
        ?>
    </body>
</html>
