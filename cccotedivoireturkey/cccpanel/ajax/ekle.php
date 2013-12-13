<?php
//kullanıcı adı mail önceden varmı 2 defa olamaz kontrolu
$con   = mysql_connect("94.73.151.249", "cotdivoure", "CCC456");

if (!$con) {
    die('Connection Failed' . mysql_error());
}
mysql_select_db("cccdb", $con);

$ad  = $_POST['ad'];
$soyad  = $_POST['soyad'];

$result = mysql_query("INSERT INTO ccc_user SET
name='".$ad ."',
surname='".$soyad ."' ");

if ($result==1 )

    echo 'ok';