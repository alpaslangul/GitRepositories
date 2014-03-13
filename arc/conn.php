<?php

    $con   = mysql_connect("93.89.225.121", "parctivi_arcusr", "123654");
    $db = mysql_select_db('parctivi_arc_db',$con);

    if ($con) {
    @$mail = $_POST['mail'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $sor = mysql_query("SELECT * from `e-mail-list` where `e-mail`='".$mail."'");
    $cek = mysql_fetch_array($sor);
        $ipp = $cek[2];

    if($mail==""){

        echo "<script language='javascript'>alert('Lütfen mail adresinizi giririniz!');</script>";
        echo '<script>window.location="http://www.arctivit.com/tr/index.php";</script>';

    }
    elseif($mail == @$ipp)
    {

        echo "<script language='javascript'>alert('Daha önce bu mail adresi listemize eklenmiştir.');</script>";
        echo'<script>window.location="http://www.arctivit.com/tr/index.php";</script>';

    } else {
        $ekle = mysql_query("INSERT INTO `e-mail-list` (`ip-adress`,`e-mail`) VALUES ('".$ip."','".$mail."')");
        echo "<script language='javascript'>alert('Mail adresi listemize eklenmiştir.');</script>";
        echo'<script>window.location="http://www.arctivit.com/tr/index.php";</script>';

    }

}

?>