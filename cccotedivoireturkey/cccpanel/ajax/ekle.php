<?php
    //kullanıcı adı mail önceden varmı 2 defa olamaz kontrolu
    $con   = mysql_connect("94.73.151.249", "cotdivoure", "CCC456");
    @mysql_query("SET NAMES 'utf8'");
    @mysql_query("SET CHARACTER SET 'utf8'");
    @mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
    if (!$con) {
        die('Connection Failed' . mysql_error());
    }
    mysql_select_db("cccdb", $con);

    $ad  = $_POST['ad'];
    $soyad  = $_POST['soyad'];
    $kullaniciad  = $_POST['kullanici-ad'];
    $parola  = $_POST['parola'];
    $parola2  = $_POST['parola2'];
    $city  = $_POST['il'];
    $town  = $_POST['ilce'];
    $telefon  = $_POST['telefon'];
    $email  = $_POST['email'];
    $cinsiyet  = $_POST['cinsiyet'];
    echo $email;

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if ( $parola != $parola2) {
            echo "Parolanızı tekrar ederken hata yaptınız.";
            die;

        }

        $result = mysql_query("INSERT INTO ccc_user SET name='".$ad ."', surname='".$soyad ."', username='".$kullaniciad ."' , password='".$parola ."'
, email_addres='".$email ."', status='0', gender='".$cinsiyet ."', phone='".$telefon ."', city='".$city ."', town='".$town ."' ");

        if ($result==1 ) {
            echo 'ok';
        }

    } else {
        echo "This ($email) email address is considered not valid.";
    }