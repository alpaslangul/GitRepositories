<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    $usern = $_POST['username'];
    $pass  = $_POST['password'];

    if (empty($usern) && empty($pass))
    {
        die("lütfen bilgileri tam olarak giriniz");
    }


    $_SESSION['status']=FALSE;

    include 'conn.php';
    $result = mysql_query("select username, password from ccc_user where username = '$usern' ");
    $row    = mysql_fetch_array($result);
    if ($row["username"] == $usern AND $row["password"] == $pass)
    {
        $_SESSION['status']=TRUE;
        header("Location: index.php");
    }
    else
        echo "Hatalı giriş yaptınız";

?>