<?php include 'header.php';
@ob_start();
@session_start();
require_once("mysql.php");
//kullanıcı adı mail önceden varmı 2 defa olamaz kontrolu

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/Serialize.js"></script>
<script>
    function ekle(sayfa, form_eleman, messaga) {
        var form = jQuery(form_eleman);
        sc = form.formSerialize();
        $.ajax({
            type: "POST",
            url: "ajax/" + sayfa,
            data: sc,
            cache: false,
            success: function (msg) {
                if (msg == 'ok') {

                    jQuery(form_eleman).resetForm();
                    $("#msg_box_warning").hide("fast");
                    $("#msg_box_ok").show("fast");
                    $("#msg_box_owrite").html(messaga);

                } else {
                    $("#msg_box_ok").hide("fast");
                    $("#msg_box_warning").show("fast");
                    $("#msg_box_wwrite").html(msg);
                }
            }
        })
        ;
    }
</script>

<div class="wrapper">
<div class="container">
    <div id="msg_box_warning" style="display: none"><span id="msg_box_wwrite"></span></div>
    <div id="msg_box_ok" style="display: none"><span id="msg_box_owrite"></span></div>
    <div class="inner">
        <div class="innerTop">
            <span>ÜYE OLUN</span>
        </div>
        <div class="innerLeft">
            <p>Adı</p>
            <p>Soyadı</p>
            <p>Kullanıcı adı</p>
            <p>Parola</p>
            <p>Parola Tekrar</p>
            <p>İl</p>
            <p>İlçe</p>
            <p>Telefon</p>
            <p>E-mail adresi</p>
            <p>Cinsiyeti</p>
        </div>
        <form method="post"  action="javascript:void(0);" id="news_add">
        <div class="innerRight">
            <div class="inputLayer"> <input name="ad" type="text"/></div>
            <div class="inputLayer"> <input name="soyad" type="text"/></div>
            <div class="inputLayer"> <input name="kullanici-ad" type="text"/></div>
            <div class="inputLayer"> <input name="parola" type="password"/></div>
            <div class="inputLayer"> <input name="parola2" type="password"/></div>
            <div class="inputLayer">
<!--                <select name="city" id="cityId" >-->
<!--                    <option value="Ankara">Ankara</option>-->
<!--                    <option value="İstanbul">İstanbul</option>-->
<!--                    <option value="İzmir">İzmir</option>-->
<!--                </select>-->

                <select id="il" name="il">
                    <option value="0">Şehir Seçiniz</option>
                    <?php
                    $sql=$db->q("SELECT id,il_adi FROM il ORDER BY id ASC");
                    while($row=$db->fassoc($sql)){
                        ?>
                        <option value="<?=$row['id']?>"><?=$row['il_adi']?></option>
                    <?php
                    }
                    ?>
                </select>

            </div>
            <div class="inputLayer">
<!--                <select name="town" id="townId">-->
<!--                    <option value="Ankara">Ankara</option>-->
<!--                    <option value="İstanbul">İstanbul</option>-->
<!--                    <option value="İzmir">İzmir</option>-->
<!--                </select>-->

                <select name="ilce" id="ilce">
                    <option value="0">İlçe Seçiniz</option>
                </select>
            </div>
            <div class="inputLayer"><input name="telefon" type="text"/></div>
            <div class="inputLayer"><input name="email" type="text"/></div>
            <div class="inputLayer">
                <select name="cinsiyet" id="gender">
                    <option value="Erkek">Erkek</option>
                    <option value="Bayan">Bayan</option>
                </select>
            </div>

        </div>
            <input type="submit" name="submit" value="Kaydet" class="kaydet_btn"
                   onclick="ekle('ekle.php','#news_add','Bilgileriniz Basari ile Kayit edilmistir');">
        <p class="terms">Üyelik Kosulları ve Gizlilik</p>
    </div>
    </form>
</div>
</div>

<script src="js/selectchained.js" type="text/javascript"></script>
<script>
    $("#ilce").remoteChained("#il", "smtr.php");
    $("#semt").remoteChained("#ilce", "smtr.php");
    $("#mahalle").remoteChained("#semt", "smtr.php");
</script>

</body></html>