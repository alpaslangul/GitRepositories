<?php

 session_start();
 $check = (int)$_SESSION['status'];
 if ($check != 1 ){
     header("Location: login.php");
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
            <a href="post-new.php">+ Yeni Haber Ekle</a>
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
        <div class="panelInLeft">
            <a href="#"></a>
            <span>Yeni Haber Ekle</span>
            <div class="panelbox">
                <div class="editTable">
                    <div class="editTableContainer">
                        <div class="editTableLine">
                            <span>Haber Kategorisi</span><br/>
                            <select id="kategori_id" name="kategori_id">
                                <option value="1">Genel</option>
                                <option value="6">Etkinlik</option>
                            </select>
                        </div>
                        <div class="editTableLine"><span>Haber Başlığı</span><input type="text" class="inpText" /></div>
                        <div class="editTableLine"><span>Haber Linki</span><input type="text" class="inpText" /></div>
                        <div class="editTableLine"><span>Etiketler</span><input type="text" class="inpText" /></div>
                        <div class="editTableLine"><span>Haber Metni</span><input type="text" class="inpText" /></div>
                        <div class="editTableLine"><span>Haber Metni</span><input type="text" class="inpText" /></div>

                    </div>
                    <div class=""></div>

                </div>
            </div>
        </div>
        <div class="panelInRight">
            Panel Right
        </div>
    </div>
</div>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>