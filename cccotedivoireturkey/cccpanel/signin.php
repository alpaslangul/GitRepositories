<?php include 'header.php'; ?>
<div class="wrapper">
<div class="container">
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
        <div class="innerRight">
            <div class="inputLayer"> <input type="text"/></div>
            <div class="inputLayer"> <input type="text"/></div>
            <div class="inputLayer"> <input type="text"/></div>
            <div class="inputLayer"> <input type="text"/></div>
            <div class="inputLayer"> <input type="text"/></div>
            <div class="inputLayer">
                <select name="city" id="cityId" >
                    <option value="Ankara">Ankara</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                </select>
            </div>
            <div class="inputLayer">
                <select name="town" id="townId">
                    <option value="Ankara">Ankara</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                </select>
            </div>
            <div class="inputLayer"><input type="text"/></div>
            <div class="inputLayer"><input type="text"/></div>
            <div class="inputLayer"><input type="text"/></div>
        </div>
        <input type="button" value="Kayıt Ol"/>
        <p class="terms">Üyelik Kosulları ve Gizlilik</p>
    </div>
</div>
</div>
</body></html>