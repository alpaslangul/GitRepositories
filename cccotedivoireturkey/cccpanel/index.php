<?php
 session_start();
 $check = $_SESSION['status'];
 if ($check ==false ){
     header("Location: index.php");
 }
 include 'header.php';
?>

<!--<!DOCTYPE html>-->
<!--<head>-->
<!--    <title></title>-->
<!--    <meta charset="utf-8">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--</head>-->
<!--<body >-->

<div class="headInf">
    <div class="information">
        <div class="leftTop">
            <span>www.tacpromosyon.com.tr</span>
        </div>

        <div class="dashBoard">
            <a href="edit.php">+ Yeni Haber Ekle</a>
        </div>
</div>
</div>
<div class="panelRight">
    <div class="adminLeft">
        <div class="adminLogo">
            <img src="img/logo.png" width="50" height="50" alt="logo"/>
            <span>Chambre De Commerce Et D’ındustrıe
                  Turque En Cote D’ıvoıre</span>
        </div>
        <div class="menuItems"><a href="#" id="users"><span>Kullanıcılar</span></a></div>
        <div class="menuItems"><a href="#" id="cetegory"><span>Kategoriler</span></a></div>
        <div class="menuItems"><a href="edit.php" id="news"><span>Haberler</span></a></div>
        <div class="menuItems"><a href="#" id="gallery"><span>Foto Galeri</span></a></div>
        <div class="menuItems"><a href="#" id="photo"><span>Fotoğraflar</span></a></div>
        <div class="menuItems"><a href="#" id="connection"><span>İletişim Formu</span></a></div>
        <div class="menuItems"><a href="#" id="members"><span>Üyeler</span></a></div>
        <div class="menuItems"><a href="#" id="settings"><span>Ayarlar</span></a></div>

    </div>
    <div class="adminRight">
        <div class="panelHeadText">
            <a href="#"></a>
            <span>Başlık Metni</span>
            <div class="panelbox">

            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>