<?php
 session_start();
 $check = (int)$_SESSION['status'];
 if ($check != 1 ){
     header("Location: login.php");
 }
?>

<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="admin">
<div class="headInf">
    <div class="information">
        <span>www.tacpromosyon.com.tr</span>
    </div>
</div>
<div class="panelRight">
    <div class="adminLeft">
        <div class="adminLogo">
            <img src="img/logo.png" width="50" height="50" alt="logo"/>
            <span>Chambre De Commerce Et D’ındustrıe
                  Turque En Cote D’ıvoıre</span>
        </div>
        <div class="menuItems"><a href="#" id="users"></a><span>Kullanıcılar</span></div>
        <div class="menuItems"><a href="#" id="cetegory"></a><span>Kategoriler</span></div>
        <div class="menuItems"><a href="#" id="news"></a><span>Haberler</span></div>
        <div class="menuItems"><a href="#" id="gallery"></a><span>Foto Galeri</span></div>
        <div class="menuItems"><a href="#" id="photo"></a><span>Fotoğraflar</span></div>
        <div class="menuItems"><a href="#" id="connection"></a><span>İletişim Formu</span></div>
        <div class="menuItems"><a href="#" id="members"></a><span>Üyeler</span></div>
        <div class="menuItems"><a href="#" id="settings"></a><span>Ayarlar</span></div>

    </div>
    <div class="adminRight">
        <div class="panelHeadText">
            <a href="#"></a>
            <span>Başlık Metni</span>
            <div class="panelbox"></div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>