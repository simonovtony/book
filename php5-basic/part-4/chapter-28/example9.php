<?php

require_once 'mysql_connect.php';

$r = mysql_query('SELECT * FROM people ORDER BY id');

mysql_data_seek($r, 0);
pre(mysql_fetch_row($r));
mysql_data_seek($r, 0);
pre(mysql_fetch_array($r));
mysql_data_seek($r, 0);
pre(mysql_fetch_assoc($r));
mysql_data_seek($r, 0);
pre(mysql_fetch_field($r));
mysql_data_seek($r, 0);
pre(mysql_fetch_lengths($r));
mysql_data_seek($r, 0);
pre(mysql_fetch_object($r));

?>