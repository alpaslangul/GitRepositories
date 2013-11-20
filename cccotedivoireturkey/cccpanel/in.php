<?php
    header('Content-Type: text/html; charset=utf-8');
    $usern = $_POST['username'];
    $pass  = $_POST['password'];
    session_start();
    $_SESSION['status']=FALSE;
    $con   = mysql_connect("xxx", "xxx", "xxx");

    if (!$con) {
        die('Connection Failed' . mysql_error());
    }
    mysql_select_db("cccdb", $con);
    $result = mysql_query("select username, password from ccc_user where username = '$usern' ");
    $row    = mysql_fetch_array($result);
    if ($row["username"] == $usern && $row["password"] == $pass)
    {
        $_SESSION['status']=TRUE;
        header("Location: index.php");
    }
    else
        echo "Hatalı giriş yaptınız";
?>