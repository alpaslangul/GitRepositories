<?php

$con   = mysql_connect("94.73.151.249", "cotdivoure", "CCC456");

if (!$con) {
    die('Connection Failed' . mysql_error());
}
mysql_select_db("cccdb", $con);

?>