<?php
$file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$info = pathinfo($file);
$filename = basename($file, '.'.$info['extension']);
if ($filename!="connection")
{
    $resultName = "id=\"$filename\"";
}
else
{
    $resultName = "id=\"$filename\" ".'"'.'onload="initialize()"';
}
?>

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
</head>
<body <?php echo $resultName; ?>>
