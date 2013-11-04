<?php include 'header.php'; ?>
        <div class="leftContent">
            <div class="insideContent">
                <span class="HeadLine">Hakkımızda</span>
                <!--TOP SLIDER-->

                <div class="sliderWrapper">
                    <div class="dynamics">
                        <div class="sliderItems">
                            <div class="sliderInHead"></div>
                            <span class="siderInHeadText">Turizm</span>
                            <img src="img/image.jpg" alt=""/>
                        </div>
                        <div class="sliderItems">
                            <div class="sliderInHead"></div>
                            <span class="siderInHeadText">Altyapı</span>
                            <img src="img/image2.jpg" alt=""/>
                        </div>
                        <div class="sliderItems">
                            <div class="sliderInHead"></div>
                            <span class="siderInHeadText">Spor</span>
                            <img src="img/image3.jpg" alt=""/>
                        </div>
                        <div class="sliderItems">
                            <div class="sliderInHead"></div>
                            <span class="siderInHeadText">Madencilik</span>
                            <img src="img/image4.jpg" alt=""/>
                        </div>
                        <div class="sliderItems">
                            <div class="sliderInHead"></div>
                            <span class="siderInHeadText">Tarım</span>
                            <img src="img/image5.jpg" alt=""/>
                        </div>
                    </div>
                </div>

                <p style="font-size: 18px;">Hakkımızda</p>
                <p>Fildişi Sahili Türk Tic. ve San. Odası Fildişi Sahili ile Türkiye arasındaki ticari köprü ve iletişim merkezi
                    olma görevini üstlenmiştir. Fildişi Sahili ve Türkiye'den üyeleri vardır. Üyelerimiz, Kamu, yönetim, üretim,
                    ticaret ve hizmet sektörlerinin her alanında faaliyet gösterirlerken  geniş iş tecrübeleri ile büyük ilişkiler ağı oluşturmaktadırlar.</p>

            </div>
            <div class="insideContent">
                <span class="HeadLine">Etkinliklerimiz</span>
                <div class="activityContainer">
                    <img src="img/activty1.png" alt="" class="imgL5"/>
                    <img src="img/activty2.png" alt=""/>
                    <img src="img/activty3.png" alt=""/>
                </div>
            </div>
        </div>

        <div class="rightContent">

            <?php include 'rightMenu.php'; ?>
            <div class="rightBanner"></div>
            <?php include 'news.php'; ?>
            <div class="weather">
                <div id="wx_module_1611">
                    <a href="http://www.weather.com/weather/local/IVXX0001">Abidjan Weather Forecast, Cote D' Ivoire</a>
                </div>
                <p></p>
                <div id="wx_module_7701">
                    <a href="http://www.weather.com/weather/local/TUXX0014">Istanbul Weather Forecast, Turkey</a>
                </div>
            </div>


        </div>
        <div class="sponsors">
            <!--BOTTOM SLIDER-->
            <div class="sponsorsWrapper">
                <div class="spnsLeftBtn"></div>
                <div class="spnsImg">
                    <div class="sponsorsContainer">
                        <div class="sliderImage">
                            <a href="http://www.eset.com.tr" target="_blank"><img src="img/sponsors.jpg" alt="eset"/></a>
                        </div>
                        <div class="sliderImage">
                            <a href="http://www.eset.com.tr" target="_blank"><img src="img/sponsors2.jpg" alt="eset"/></a>
                        </div>
                        <div class="sliderImage">
                            <a href="http://www.eset.com.tr" target="_blank"><img src="img/sponsors4.jpg" alt="eset"/></a>
                        </div>
                        <div class="sliderImage">
                            <a href="http://www.eset.com.tr" target="_blank"><img src="img/sponsors3.jpg" alt="eset"/></a>
                        </div>
                    </div>
                </div>
                <div class="spnsRightBtn"></div>
            </div>
        </div>
    </div>
    <div class="advertising">
        <img src="img/airdivoure.jpg" alt=""/>
        <img src="img/eset-dikey.jpg" alt=""/>
        <img src="img/batipro-dikey.jpg" alt=""/>
    </div>




</div>
<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/dwopdown.js"></script>
<script type="text/javascript">
    $('#1 a').css('color', '#f77f00');
    $('#1').css('background', 'url("img/sprite.png") no-repeat -2px -1px');
</script>



<script type="text/javascript">

    var wx_locID = 'IVXX0001';
    var wx_targetDiv = 'wx_module_1611';
    var wx_config='SZ=180x150*WX=FHW*LNK=SSNL*UNT=C*BGI=fall*MAP=afr|null*DN=www.cccotedivoireturkey.com*TIER=0*PID=1362975756*MD5=7d6387a4c1b8cf90b84052c0c51ebb41';
    document.write('<scr'+'ipt src="'+document.location.protocol+'//wow.weather.com/weather/wow/module/'+wx_locID+'?config='+wx_config+'&proto='+document.location.protocol+'&target='+wx_targetDiv+'"></scr'+'ipt>');
</script>

<script type="text/javascript">
    var wx_locID = 'TUXX0014';
    var wx_targetDiv = 'wx_module_7701';
    var wx_config='SZ=180x150*WX=FHW*LNK=SSNL*UNT=C*BGI=sun*MAP=europe|null*DN=www.cccotedivoireturkey.com*TIER=0*PID=1362975756*MD5=86e711d15be6bff2026a711d322e31da';
    document.write('<scr'+'ipt src="'+document.location.protocol+'//wow.weather.com/weather/wow/module/'+wx_locID+'?config='+wx_config+'&proto='+document.location.protocol+'&target='+wx_targetDiv+'"></scr'+'ipt>');
</script>


</div>
</body>
</html>