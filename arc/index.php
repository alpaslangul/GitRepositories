
<!DOCTYPE html>
<html>
<head>
    <!-- Meta Tags -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, target-densitydpi=device-dpi">

    <!-- Page Title -->
    <title>Arctivit</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link href="styles/fonts.css" rel="stylesheet" type="text/css"/>
    <link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="styles/reset.css" rel="stylesheet" type="text/css"/>
    <link href="styles/styles.css" rel="stylesheet" type="text/css"/>
    <link href="styles/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="styles/flexslider.css" rel="stylesheet" type="text/css"/>
    <link href="styles/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
     <style type="text/css">
        #info {
            margin:0;
            padding: 0;
            width: 660px;
            height: 265px;
            margin-top: 41px;
            position : absolute;
        }
    </style>
    <!-- Color Scheme -->
    <link href="styles/layouts/magenta-layout.css" rel="stylesheet" type="text/css" id="layout-css"/>

    <!-- jQuery -->
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <!-- jQuery Migrate -->
    <script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js'></script>
             
               <script>

$( document ).ready(function() {

$( "#postla" ).click(function() {
     var str = $( "#contact-form" ).serialize();
    $.ajax({
      url: 'conn2.php',
      type: 'post',
      data: str,
      success: function(data, status) {
        if(data == "ok") {
alert ("kaydedildi");
          $('#fmessage_ok').html(data);
        }
        else {
alert (data);


        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "Error:" + err);
      }
    }); 
 });


});
</script>
</head>

</head>
<body style="font-family: Helvetica !important;">

<!-- Main Wrapper -->
<div id="main-body-container">
<div id="fmessage_ok"></div>
<!-- Header -->
<header class="iconic" id="header">
    <div class="width-container multicolor">

        <!-- Logo Area -->
        <div class="logo">
            <img src="images/logos/logoLittle.png" alt=""/>
        </div>

        <!-- Main Navigation Bar -->
        <div id="main-nav">

            <!-- Main Navigation Links -->
            <ul>
                <li class="selected" style="border-left: none;">
                    <a id="home-button" href="#main-slider-container">
                        <!--<i class="icon-home"></i>-->
                        <span>Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a id="services-button" href="#row1">
                        <!--<i class="icon-cog"></i>-->
                        <span class="arcMenuItem">Regeneration</span>
                    </a>
                </li>
                <li>
                    <a id="about-button" href="#row2">
                        <!--<i class="icon-lightbulb"></i>-->
                        <span class="arcMenuItem">Hairlife</span>
                    </a>
                </li>
                <li>
                    <a id="team-button" href="#row3">
                        <!--<i class="icon-heart"></i>-->
                        <span>Saç Bakımı</span>
                    </a>
                </li>
                <li>
                    <a id="portfolio-button" href="#row4">
                        <!--<i class="icon-rocket"></i>-->
                        <span>Multimedya</span>
                    </a>
                </li>
                <li>
                    <a id="clients-button" href="#row5">
                        <!--<i class="icon-group"></i>-->
                        <span>Kullanıcılar</span>
                    </a>
                </li>
                <li>
                    <a id="contact-button" href="#row6">
                        <!--<i class="icon-envelope"></i>-->
                        <span>İletişim</span>
                    </a>
                </li>
                <!--<li>-->
                    <!--<a href="../eng/index.html" class="langA">-->
                        <!--&lt;!&ndash;<i class="icon-envelope"></i>&ndash;&gt;-->
                        <!--<span class="lang"> Eng </span>-->
                    <!--</a>-->
                <!--</li>-->
                <li class="clear"></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</header>

<!-- Color Options Panel -->
<div id="options-panel" class="multicolor hide">
    <div class="container">
        <div class="toggle-button">
            <button><span class="icon-move"></span></button>
        </div>
        <h4 id="colorChoice">RENGİNİZİ SEÇİN</h4>

        <div class="options">
            <!--<h5>Menu Style</h5>-->
            <!--<button id="iconic" class="menu-style zero-marginleft">Iconic</button>-->
            <!--<button id="simple" class="menu-style">Simple</button>-->
            <h5>Renk Seçenekleri</h5>
            <ul>
                <!--<li>-->
                    <!--<button id="green-template"></button>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<button id="orange-template"></button>-->
                <!--</li>-->
                <li>
                    <button id="blue-template"></button>
                </li>
                <!--<li>-->
                    <!--<button id="bright-green-template"></button>-->
                <!--</li>-->
                <li>
                    <button id="magenta-template"></button>
                </li>
                <!--<li>-->
                    <!--<button id="yellow-template"></button>-->
                <!--</li>-->
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- Main Slider Container -->
<div id="main-slider-container" class="multicolor">
<img src="images/loading.gif" alt="slider-loading-animation">

<!-- Main Slider -->
<div class="flexslider">
<ul class="slides">

<!-- Slide1 -->

<li style="background: url('images/slider/slide1/slide1-bg.jpg');" id="grassy-lady"> <!-- Slide Background -->

    <div class="width-container">
        <div class="slider-heading-container">

            <!-- Slider Top Captions -->
            <div class="main-headings">
                <h1 class="main-heading">ARCTIVIT Regeneration Serum</h1>
                <span class="heading-connector1"></span>

                <h2>içeriğindeki bitkisel kaynaklı</h2>
                <span class="heading-connector2"></span>
            </div>

            <!-- Slider Sub Captions -->
            <div class="sub-headings">
                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Bioflavanoidler, doymamış yağ asitleri
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Dithymoquinone, Vitamin- mineraller ve çinko sayesinde
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    saç dökülmesine karşı etkili olur.
                </h2>
            </div>

        </div>
    </div>
</li>

<!-- Slide2 -->

<li style="background: url('images/slider/slide2/slide2-bg.jpg');"> <!-- Slide Background -->

    <div class="width-container">
        <div class="slider-heading-container">

            <!-- Slider Top Captions -->
            <div class="main-headings">
                <h1 class="main-heading">ARCTIVIT Regeneration Serum</h1>
                <span class="heading-connector1"></span>

                <h2>Boyadan ya da permadan yanmış</h2>
                <span class="heading-connector2"></span>
            </div>

            <!-- Slider Sub Captions -->
            <div class="sub-headings">
                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Yıpranmış, kurumuş, saçların
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Eski kuvvetine, parlaklığına
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Geri dönmesine yardımcı olur
                </h2>
            </div>
        </div>
        <!--<img src="images/slider/slide2/slide2-element.png" class="slide-element" id="slide2-element" alt="slide-element"/> &lt;!&ndash; Floating element &ndash;&gt;-->
    </div>
</li>

<!-- Slide3 -->

<li style="background: url('images/slider/slide3/slide3-bg.jpg');"> <!-- Slide Background -->

    <div class="width-container">
        <div class="slider-heading-container">

            <!-- Slider Top Captions -->
            <div class="main-headings">
                <h1 class="main-heading">ARCTIVIT Regeneration Serum</h1>
                <span class="heading-connector1"></span>

                <h2>Yıpranmış saçlar için komple bakım</h2>
                <span class="heading-connector2"></span>
            </div>

            <!-- Slider Sub Captions -->
            <div class="sub-headings">
                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Harika bir görünüm, sağlıklı ve yumuşacık saçlar
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Yıpranmış dökülen saçlara eksiksiz onarım
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Saçlarınıza tüm çekiciliğini ve gücünü
                    geri kazandırır
                </h2>
            </div>
        </div>
        <!--<img src="images/slider/slide3/slide3-element.png" class="slide-element" id="slide3-element" alt="slide-element"/> &lt;!&ndash; Floating element &ndash;&gt;-->
    </div>
</li>

<!-- Slide4 -->

<li style="background: url('images/slider/slide4/slide4-bg.jpg');" id="dandelion"> <!-- Slide Background -->

    <div class="width-container">
        <div class="slider-heading-container">

            <!-- Slider Top Captions -->
            <div class="main-headings">
                <h1 class="main-heading">ARCTIVIT Regeneration Serum</h1>
                <span class="heading-connector1"></span>

                <h2>%100 doğal ve değerli bileşenler içeren saç dökülmesi karşıtı bakım</h2>
                <span class="heading-connector2"></span>
            </div>

            <!-- Slider Sub Captions -->
            <div class="sub-headings">
                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Daha gür daha güçlü saçlar
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Saç derisini nemlendirerek kan dolaşımını arttırır
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Saç köklerini güçlendirir
                </h2>
            </div>
        </div>
    </div>
</li>

<!-- Slide5 -->

<li style="background: url('images/slider/slide5/slide5-bg.jpg');"> <!-- Slide Background -->

    <div class="width-container">
        <div class="slider-heading-container">

            <!-- Slider Top Captions -->
            <div class="main-headings">
                <h1 class="main-heading">ARCTIVIT Regeneration Serum</h1>
                <span class="heading-connector1"></span>

                <h2>4 kat yoğun etki</h2>
                <span class="heading-connector2"></span>
            </div>

            <!-- Slider Sub Captions -->
            <div class="sub-headings">
                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Dithymoquinone,  Bioflavonoidler
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    Vitamin ve Mineraller ile
                </h2>

                <h2>
                    <span><i class="icon-chevron-right"></i></span>
                    İyileştirir, Yeniler, Korur
                </h2>
            </div>s
        </div>
        <!--<img src="images/slider/slide5/slide5-element.png" class="slide-element" id="slide5-element" alt="slide-element"/> &lt;!&ndash; Floating element &ndash;&gt;-->
    </div>
</li>
</ul>
</div>
<div class="progress-bar">
    <div class="bar"></div>
</div>
</div>

<!-- Services Row -->
<div class="row multicolor" id="row1">
    <div class="width-container">

        <!-- Row Headings -->
        <div class="heading-container">
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <h1 class="hairLifeHeader">ARCTIVIT Regeneration</h1>

                        </td>
                    </tr>
                </table>
            </div>

            <h2>Saçınızı foliküllerinden başlayarak ucuna kadar iyileştirirerek yeniler.<br />
                Tüm olumsuz etkenlere karşı korur.
            </h2>

            <div class="clear"></div>
        </div>
        <div class="content-container">

            <!-- Row Contents -->
            <div class="container left">
                <h3>ARCTIVIT Regeneration</h3>

                <p>ARCTIVIT Regeneration Serum Cildin PH değerini düzenler, nemlendirir ve gözenekleri temizleyip açar.
                    Uygulandığı bölgede kan dolaşımını arttırır, saç köklerinizi güçlendirir. Saçınızı besleyerek kuvvetlendirir.
                    Saçınızın çıkmasını hızlandırır, daha hızlı uzamalarını sağlar  ve parlaklık kazandırır.  Kepekten arındırır...
                </p>




                <!-- Newsletter Box -->
                <div id="newsletter">
                    <span>ÜRÜNLERİMİZ HAKKIDA BİLGİ EDİNMEK İÇİN</span><br/>
                    <span>Haber listemize kaydolun!</span>

                    <div class="container">
            <form method="post" class="search_form general_form" id="contact-form" action="javascript:void(0);">
                            <input type="text" name="mail" value="" placeholder="">
                              <input type="submit" name="submit" value="Kaydet" id="postla" />
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="left last">

                 <!--Rotating Buttons Area -->
                <div class="button-container">

                    <!-- Rotating Buttons -->

                    <!-- Rotating Button 1  -->
                    <div class="button1">
                        <button class="icon-puzzle-piece propertyButtons buttonsPos1"></button>
                    </div>

                    <!-- Rotating Button 2  -->
                    <div class="button2">
                        <button class="icon-cogs propertyButtons buttonsPos2"></button>
                    </div>

                    <!-- Rotating Button 3  -->
                    <div class="button3">
                        <button class="icon-leaf propertyButtons buttonsPos3"></button>
                    </div>

                    <!-- Rotating Button 4  -->
                    <div class="button4">
                        <button class="icon-rocket propertyButtons buttonsPos4"></button>
                    </div>

                    <!-- Rotating Button 5 -->
                    <div class="button5">
                        <button class="icon-dashboard propertyButtons buttonsPos5"></button>
                    </div>
                    <div>
                        <img src="images/logos/logoLittle.png" width="210" height="66" class="imgLogo" alt="">
                    </div>
                    <div class="clear"></div>
                </div>
                <span id="notched-line"></span>

                 <!--Content Area for Rotating Buttons-->
                <div id="service-description-container">

                    <!-- Default content area -->
                    <div class="service-description default">
                        <h3>
                            ARCTIVIT Regeneration Serum’un  ÖZELLİKLERİ:
                        </h3>

                        <p class="arctivitProprty">
                            ARCTIVIT Regeneration Serum, kök saç deformasyonu, dökülmesi yaşayan kişilerin bu problemini önlemek
                            ve ölmemiş saç foliküllerini güçlendirerek yeniden çıkmalarını sağlamak amacıyla geliştirilen 10
                            yıllık özel bir formüdür. Nutritive yağlar, Dithymoquinone, Bioflavonoidler, Vitamin ve Mineraller
                            ile yoğunlaştırılmış Flavonoidlerin, süperoksit, alkoksil, peroksil ve nitrik oksit gibi radikalleri
                            temizleme, demir ve bakır şelasyonu, µ-tokoferol rejenerasyonu foksiyonlarına ek olarak; vazodilatatör,
                            immünstimülan, antiallerjik, östrojenik, antiviral etkileri de söz konusudur. Flavonoid aktiflerini
                            içeren Regeneration formulu sayesinde saç dökülmesine engel olur, düzenli kullanımda saç foliküllerinin
                            güçlenmesini sağlayarak saç oluşumunu destekler.
                            <br />
                            Yapılan vücud dışı klinik araştırmalar sonucunda ARCTIVIT Regeneration Serum  kök saç deformasyonuna
                            karşı kullanıldığında hücresel yanıt alınmış  ve köknodül oluşumuna yol açan Nod faktörler salgısını
                            tetiklediği görülmüştür. Topikal Nutritive formülasyon, fiziksel kararlılığı ve antioksidan aktivite
                            deneylerinde serbest radikalleri süpürme etkisi gözlemlenmiştir. Sonuçlar, serbest radikal ve reaktif
                            oksijen türünün yol açtığı hasara karşı cildi korumak için topikal formülasyonlarda da kullanılanabileceğini
                            göstermektedir.
                            <br />
                            ARCTIVIT Regeneration Serum’un  yeni saç oluşumu için uygun ortamın hazırlanmasında özel etki gösterdiği kanıtlanmıştır.
                        </p>

                    </div>

                    <!-- Rotating Button 1 Content Area -->
                    <div class="service-description button1">

                        <h3>
                            ARCTIVIT Regeneration Serum İÇERİĞİ
                        </h3>

                        <p class="arctivitProprty">
                            ARCTIVIT Regeneration Serum, içeriğindeki bitkisel kaynaklı Bioflavanoidler, doymamış yağ asitleri,
                            Dithymoquinone, Vitamin- mineraller ve çinko sayesinde saç dökülmesine karşı etkili olur.
                            <br />
                            Polisakkarit türevi; Inulin. <br />
                            Poliasetilen türevleri: Tridecadien-(1,11)-tetrain-(3,5,7,9,), Tridecen-pentain, Trideca-trien-triin. <br />
                            Kükürtlü Polisakkarit türevleri: Arctinon, Arctinol, Arctinal ve Aretasit. <br />
                            Acı madde Guaianolittürevleri; Dehydrocostus ve 11,13-Dihydrocostuslacton içerir. <br />
                            Karbonikasitlerden; Kaffeeasit (kahve asidi), Chlorogenasit, Izochlorogenasit, Butrik asit, Asetik asit, Propinoasit ve Izovalerinasit. <br />
                            Sabit yağlardan; Oleik-, Limol-, Linolen-, Stearin-, Palmitin-, Capron- ve Oenanthasit içerir. <br />
                            Ayrıca %0,05-0,19 oranında Uçucu yağ türevleri (Eterik ayağlar) %0,05-0,18 oranında olup en önemlileri; Fenilasetalaldehid,
                            Benzalaldehit, 2-Alkil (C3-C5)- 3 Metoksipirazin ve 2-metoksi-3-metilpirazin içerir. <br />
                            Tanin, Reçine, Proteinler, Karbonhidratlar,Vitaminler ve Mineraller içerir. <br />
                        </p>
                    </div>

                    <!-- Rotating Button2 Content Area -->
                    <div class="service-description button2">


                        <h3>
                            ARCTIVIT Regeneration Serum’un  FAYDALARI
                        </h3>

                        <p class="arctivitProprty">
                           Cildin PH değerini düzenler, nemlendirir ve gözenekleri temizleyip açarak saçların daha kolay çıkmasını sağlar.<br />
                           Serum  içeriği Anti-bakteriyel özellikler gösterdiğinden deriyi zararlı bakterilere karşı korur.<br />
                           Kafa derisinde oluşan alerjik hastalıkların tedavisine yardımcı olur.<br />
                           Bioflavanoidler saçın beslenmesine yardımcı olarak saç, yeni kök hücre oluşumunu destekler.<br />
                           Bağışıklık sistemini destekler.<br />
                           Saç kökünü daha sağlıklı ve daha güçlü hale getirerek saçlarınızın deriye daha kuvvetli bağlanmasını sağlar<br />
                           İçeriğindeki Alkaloit, Vitaminler ve Amino asitler saçları besler, uzamasına ve güçlenmesine yardımcı olur, dökülmesine engel olur.<br />
                           Saç köklerini besleyen mineraller, saç tellerini kalınlaştırarak hacim kazandırır.<br />
                           Kutikül tabakasını onarır bazik amino asitlerle saçlarınızın gücünü ve parlaklığını artırarak canlı görünüme kavuşturur.<br />
                           Yıpranmış, zarar görmüş saç kılını restore eder.<br />
                           Saç foliküllerinin yaşlanmasını engeller.<br />
                           Saçın beyazlamasını engeller, renk pigmentlerini korur.<br />
                           Kafa derisinde oluşan alerjik hastalıkların tedavisine yardımcı olur, kepek oluşumunu engeller.<br />
                           Yağlı ve akneli ciltlere karşı etkildir.  Yağlanmayı düzenler.<br />
                           Derideki yara ve ülserlerin iyileşmesini hızlandırır.<br />
                           Egzama ve sedef hastalıklarına karşı iyileştirici etkiler yapar.<br />
                           Doymamış Yağ asitleri yoğun saç dökülmesine karşı etkilidir.<br />
                           Gürleştirme ve uzatma etkileri ile çabuk kırılan ve güçsüz saçlar canlandırır Saçları derinlemesine beslediğinden saç kırıkları oluşumunu azaltır.
                        </p>
                    </div>

                    <!-- Rotating Button3 Content Area -->
                    <div class="service-description button3">


                        <h3>
                            ARCTIVIT Regeneration
                        </h3>

                        <p class="arctivitProprty">
                            Gürleştirme ve uzatma etkileri ile çabuk kırılan ve güçsüz saçlar canlandırır Saçları derinlemesine beslediğinden saç kırıkları oluşumunu azaltır.<br />
                            Saçlarınız kimyasal uygulamalar sonucunda zarar görmüş, zayıflamış, kurumuş, dökülmeye yüz tutmuşsa ARCTIVIT Regeneration Serum kullanın:<br />
                            ARCTIVIT Regeneration Serum yıpranmış, kurumuş, kimyasal işlem görmüş, boyanmış ya da perma vb uygulamalardan yanmış saçlarınızı iyileştirir.<br />
                            Saçlarınızın eski gücüne, parlaklığına geri dönmelerine yardımcı olur.<br />
                            Saçlarınıza rutin besleyici bir bakım yapabilir, sürekli elektriklenen saçlarınızı yatıştırabilirsiniz.<br />
                        </p>
                    </div>

                    <!-- Rotating Button4 Content Area -->
                    <div class="service-description button4">

                        <h3>
                            ARCTIVIT Regeneration Serum’un kullanımı
                        </h3>

                        <p class="arctivitProprty">
                            Saçlarınızı yıkadıktan sonra, nemli saça uygulayın. ARCTIVIT Regeneration Serum  içeriği; öncelikle dökülmenin
                            yoğun olduğu bölgeye, sonrasında tüm saç derisine, yaklaşık 1 dakika dairesel hareketlerle hafifçe masaj yaparak, iyice yedirilir.<br />
                            2 saat kadar uygulanan bölgede kaldıktan sonra ARCTIVIT Hairlife  şampuan ile yıkanır.<br />
                            Yoğun tedavi için günde 2 kez, normal bakım için günde 1 kez uygulayın.<br />
                            Günlük olarak akşamları uygulanması tavsiye edilir.<br />
                            En iyi sonuçların elde edilmesi için, ARCTIVIT Hairlife  şampuan ile birlikte kullanılması gerekir.<br />
                        </p>
                    </div>

                    <!-- Rotating Button5 Content Area -->
                    <div class="service-description button5">

                        <h3>
                            Yoğun Yaşanan Saç Dökülmesi
                        </h3>

                        <p class="arctivitProprty">
                            Yoğun saç dökülmesi, genetik olarak yatkın kişilerde 20'li yaşlardan itibaren görülür. Öncelikle alın bölgesinde
                            saç çizgisinin basin arka kısmına doğru çekilmesi ile, sonra da baş tepe bölgesinin incelip açılması ile ortaya çıkar.
                            Saç dökülmesi tüm saçlı deriyi kaplayabilse de şakaklar ve ense bölgesinde daha az sıklıkta rastlanır. Saç dökülmesi
                            bir hastalık olarak kabul edilmez. Erkeklerin karakteristik yapısı hatta testesteron yoğunluğu kaynaklı olarak kabul
                            edilir. Kadınlarda görülen yoğun saç dökülmesi, oluşma şekli ve şiddeti bakımından farklılık gösterir. Sıkça yapılan
                            kimyasal, sıcak müdahaleler yanında stress veya bakteri kaynaklı rahatsızlıklar da neden olabilir
                        </p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- Parallax 1 -->
<div class="parallax-container parallax1 multicolor">
    <img src="images/parallax/parallax-bg1.jpg" class="parallax-bg" alt="parallax-background"> <!-- Parallax 1 Background -->

    <div class="width-container">

    </div>
</div>

<!-- About Us Row -->
<div class="row multicolor" id="row2">
    <div class="width-container">

        <!-- Row Headings -->
        <div class="heading-container">
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <h1 class="hairLifeHeader">ARCTIVIT Hairlife </h1>
                        </td>
                    </tr>
                </table>
            </div>

            <h2>ARCTIVIT Hairlife Şampuan saç dökülmesi problemi yaşayan ya da saçlarını korumak isteyen erkekler ve kadınlar
                için formülü özel olarak geliştirilmiş bitkisel bir şampuandır.</h2>

            <div class="clear"></div>
        </div>

                <!-- Row Contents -->
                <div class="content-container">
                    <h3>Sağlıklı saçlar ARCTIVIT Hairlife</h3>

                    <!-- Testimonials -->
                    <div id="testimonials" class="multicolor">

                        <div class="testimonial">
                            <p>ARCTIVIT Hairlife Şampuan saç dökülmesi problemi yaşayan ya da saçlarını korumak isteyen erkekler ve kadınlar için formülü
                                özel olarak geliştirilmiş bitkisel bir şampuandır. Silicium,Niacinamide ve ARCTIVIT ultimate Complex formülünün birleşiminden
                                ortaya çıkan ARCTIVIT Hairlife Şampuan, saç dökülmesine engel olur, düzenli ve sürekli kullanımda foliküllerin güçlenmesini
                                sağlayarak saç oluşumunu destekler. Kuru/Normal saçlar ve yağlı saçlar için formlarına sahip ARCTIVIT Hairlife, 2si1 arada
                                formunda Panthenol katkısıyla, boyalı saçları UV ışınları gibi zararlı etmenlerin neden olduğu soldurucu etkiden korur.
                                Tarama kolaylığı, parlaklık ve hacim sağlarken, saçlarda meydana gelen statik elektiriği önler. düzenli ve sürekli kullanımda
                                foliküllerin güçlenmesini sağlayarak saç oluşumunu destekler.<br />
                                ▪	İnce kırılgan saçlarda belirgin iyileşme sağlar<br />
                                ▪	Saç dökülmesine karşı olumlu sonuçlar gösterir<br />
                                ▪	Tarama kolaylığı sağlar ve saça parlaklık kazandırır<br />
                                ▪	Tarama ve saça şekil verme işlemleri sırasında meydana gelen hasarı giderir.<br />
                                ▪	Saçlı deride tahriş azaltıcı etki gösterir<br />
                                ▪	Saç oluşumunu destekler<br />
                                ▪	Saça nemlilik ve parlaklık kazandırır<br />
                                ▪	Yıpranmış saçların görünümünün iyileşmesine yardımcı olur<br />
                                Saç tellerini kalınlaştırır<br />
                            </p>


                            <div class="clear"></div>
                            <span></span>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>

    </div>
    <div class="clear"></div>
</div>

<!-- The Team Row -->
<div class="row grey multicolor" id="row3">
    <div class="width-container">

        <!-- Row Headings -->
        <div class="heading-container">
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <h1 class="hairLifeHeader">Saç Bakımı</h1>
                        </td>
                    </tr>
                </table>
            </div>

            <h2>Saç Bakımı İle İlgili Pratik Bilgiler</h2>

            <div class="clear"></div>
        </div>
        <!--TABS-->
        <div class="arcTabs">
            <div class="arcHead">
                <span>Saç dökülmesinin nedenleri</span>
                <span>Saç Dökülmesi sebepleri </span>
                <span>Saç Bakımı Tavsiyeler</span>
            </div>
            <div class="tabs1 active">
                <!-- Row Contents -->
                <div class="content-container">

                    <!-- Testimonials -->
                    <div id="testimonials" class="multicolor">

                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <p>
                                Saç dökülmesinin birçok nedeni vardır. Ortak problemlerde erkek ve kadınlarda farklılık yoktur. İnsanlarda ortalama 120.000-150.000 arasında saç teli vardır.
                                Araştırmalar günde 100-150 saç teli kadar kaybetme normal olduğunu göstermektedir. Anajen, katajen ve telojen: İnsan saçı doğal olarak bu üç aşamada büyür.
                                Anagen aktif veya büyüme aşamasıdır. Katagen saç kıllarında dökülme başlar. Doğal saç döngüsünün oldukça kısa bir aşamasıdır. Telojen dinlenme aşamasıdır.
                                Günlük dökülen saç kılları genellikle saç döngüsünün bu dinlenme veya geç fazıdır. Normal olarak kafa derisinde saç kıllarının yaklaşık % 10'u, herhangi bir
                                zamanda ya da dinlenme (telojen) aşamasında bulunmaktadır.<br />

                                Genel olarak, çoğu saç dökülmesinde sistemik veya dahili hastalıklar ile  kötü beslenme sık rastlanılan faktörler değildir. Sadece önceden belirlenmiş
                                genetik faktörler, aile öyküsü ve genel yaşlanma sürecinin bir sonucu olarak incelme ve saç kayıpları olabilir. Birçok erkek ve kadının saçlarında
                                otuzlu ve kırklı yaşlarında başlayan hafif ve genellikle normal fizyolojik incelme görülür. Diğer zamanlarda, geçici ciddi stres, beslenme değişiklikleri,
                                gebelikte olduğu gibi hormonal değişiklikler, ergenlik, menopoz ve dahil olmak üzere normal hayat varyasyonlar geri dönüşümlü saç kaybına neden olabilir.
                                Bu tür kayıpların neredeyse tamamında Arctivit Regeneration Serum kullanıldığında  önemli pozitif sonuçlar alınmaktadır.<br />

                                Özellikle, tiroid hastalığı ve demir eksikliği anemisi gibi birçok sağlık koşulları, saç kaybına neden olabilir. Sıradan saç dökülmesi olan kişiler
                                tiroid kan testleri ve tam kan sayımı (CBC) dahil olmak üzere diğer laboratuar testleri yaptırmaları ani ya da şiddetli saç dökülmesi nedenlerini
                                dışlamak için önemlidir. Dermatologlar deri, saç ve tırnakların sorunlarında uzmandırlar. Saç incelmesi ve dökülmesi gibi sorunlarınıza daha gelişmiş
                                tanı sağlayabilirler.

                            </p>


                            <div class="clear"></div>
                            <span></span>
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>
            <div class="tabs1">
                <!-- Row Contents -->
                <div class="content-container">

                    <!-- Testimonials -->
                    <div id="testimonials" class="multicolor">

                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <p>
                                Saç folikülü saç gövdesinin alt kısmını kaplayan yapıdır. Her folikül yeni saç büyümesini besleyen kan damarlarını içerir. Tüm saç folikülleri doğumdan
                                itibaren ömür boyunca kafa derisi sağlıklı olması durumunda büyüyüp dökülen ve bu süreci tekrarlayan bir döngü içindedir.<br />

                                Tek bir yeni saç büyüme fazı 2-3 yıldır. Bu süre sonunda, büyüme durur ve folikül dinlenme fazına girer.Dinlenme fazından 3-4 ay sonra, saç dökülür ve
                                saç dersindeki ortamın uygun olması durumunda bir sonraki büyüme döngüsü başlar. Normal bir kafa derisi üzerinde, köklerinin yaklaşık yüzde 80-90'ı
                                bir anda büyüyor . Aynı sayıda yeni bir büyüme evresine girerken , her gün yaklaşık 75-100 folikül ise döker. Arctivit Regeneration Serum'u kullanmanız
                                durumunda, kafa derinizde saç çıkması için yeniden sağlıklı ortam oluştururken, aynı süreçte varolan sorunları çözer, saçlarınızı güçlendirip dökülmelerini
                                engeller.<br />

                                Arctivit Regeneration Serum'un etkili olup olmadığını belirlemek için en az iki ay boyunca kullanılmalıdır. Etkili olduğunda, genellikle tedavinin
                                başlamasından sonra üç dört hafta içinde saç dökülmesi normal seviyeye geriler. 2-4 ay içinde saç büyümeye başlar. Arctivit Regeneration Serum etkileri
                                genellikle 3 ila 8 ay sürekli kullanım sonunda stabilizedir. Arctivit Regeneration Serum uygulaması süresiz devam edebilir. Saçlarınızın her zaman
                                güçlü ve parlak, kafa derinizin sağlıklı olmasını sağlar..<br />

                                Herkes Arctivit Regeneration Serum'dan yararlanamaz. Kellik en az beş yıl çncesinde oluşmuş ancak  sadece taç (üst) etkilediği zaman, ve saç dökülmesi
                                alanı çapı 10 cm civarında olduğunda iyi sonuçlar görülebilir. Çalışmalar göstermiştir ki ile taç saç dökülmesinde  Arctivit Regeneration Serum
                                kullanıldığında erkek ve kadınların 30 ila 40 oranında önemli sonuçlar almaktadır.

                            </p>


                            <div class="clear"></div>
                            <span></span>
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>
            <div class="tabs1">
                <!-- Row Contents -->
                <div class="content-container">

                    <!-- Testimonials -->
                    <div id="testimonials" class="multicolor">

                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <p>
                                ARCTIVIT Regeneration Serum uygulayıp beklettiğiniz saçlarınızı ARCTIVIT Hairlife Şampuan ile yıkayınız.<br/>
                                Islak saçlarınız taramak için muhakkak iri dişli bir tarak kullanın. Uçlardan başlayarak yukarı saç gövdesine doğru tarayın.<br />
                                - Kuru ve hasar görmüş saçlar ıslakken daha da kırılgandır bu nedenle yıkarken saçınızı şiddetli bir şekilde ovalamayın.<br />
                                - Saçı kurutmak için havluyla sarın ve fazla suyu yavaşça sıkın. <br />
                                - Islak saçı asla fırçalamayın dolaşmış saçları düzeltmek için muhakkak iri dişli tarak kullanın. <br />
                                - Saçı ültraviyole ışınlarından koruyun. - Kuru iken saçın iyice fırçalanması yağ bezelerini uyarılmasına yardımcı olur ve kuruluk giderilir. <br />
                                - Yıkamadan önce saçın fırçalanması kepeği gevşetir. - Şampuanla yıkadığınız da saçınızı iyice durulayın. <br />
                                - Fırça ve taraklı haftada bir kez ılık su ve hafif şampuan içeren bir karışıma daldırarak temizleyin. <br />
                                Yarım saat sonra suyla iyice durulayın ve kurumaya bırakın. - Saçınız uçlarda değil yalnız köklerde yağlı ise saç kreminizi yalnız uçlara uygulayın.<br />
                                - Saçı durulamak için yalnız ılık su kullanın. Çok sıcak su kafa derisini uyarılarak daha fazla yağ üretimine yol açabilir. <br />
                                - Aşırı fırçalama kafa derisine harekete geçirerek yağ üretimini teşvik edeceği için saçı aşırı fırçalamaktan kaçının.<br />
                                Uyandığınızda parmaklarınız yardımıyla saçınızdaki karışıklıkları ve varsa düğümleri saçı zorlamadan açın. Öne eğilin ve saçınızın
                                öne doğru dökülmesini sağlayın.<br /><br />
                                Kullandığınız fırçaların mutlaka tahtadan, doğal ve yumuşak bir fırça olmasına özen gösterin. Fırça yardımıyla saçı önce üstten,
                                kökten uca doğru, fırçalayarak saçınızı havalandırın; sonra da iç taraftan fırçalayın. Daha sonra doğrularak aynı işlemi tekrarlayın.
                                Fırçaladığınız tutamlardan elinizi geçirerek statik elektriği alın. Beş kere ile başlayarak ve rahat bir rutine oturtuncaya kadar
                                her hafta saçınızı taradığınız fırça darbesi adedini artırın.<br />
                                Saçınız fırçalanma miktarı arttıkça yağlanmaya başlarsa fırçalama sayısını azaltın. Saçınızı sadece kuruyken fırçalayın.
                                Saçın en zayıf olduğu zaman ıslak olduğu zamandır. Bu nedenle ıslakken fırçalamak saça zarar verebilir. Mümkünse saç kuruyken
                                bile fırçalamadan önce tarayın.<br />
                                <br />
                                <b>Doğru tarama</b><br />

                                Saçı küçük tutamlara ayırın. Geniş dişli tarak kullanarak ve saçı açmaya aşağıdan başlayarak tarayın. Saçı daima aşağıya doğru tarayın. Mutlaka tahta veya şimşir tarak kullanın. Plastik ve benzeri sentetik maddelerden yapılmış tarakları kullanmayın. Saçı asla çekiştirmeyin ve zorlamayın. Açmakta zorlandığınız tutamların üstünden elinizle tutarak saç kökünün çekilmemesine dikkat edin.

                            </p>


                            <div class="clear"></div>
                            <span></span>
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>
        </div>
        <!--TABS-->
    </div>
</div>

<!-- Parallax 2 -->
<div class="parallax-container parallax2 multicolor">
    <img src="images/parallax/parallax-bg2.jpg" class="parallax-bg" alt="parallax-background"> <!-- Parallax 2 Background -->

    <!-- Parallax 2 Content -->
    <div class="width-container">
        <h1 style="color:#FFFFFF; text-shadow: 1px 2px 1px #000;">ARCTIVIT Regeneration Serum</h1>

        <p style="color:#FFFFFF; text-shadow: 1px 2px 1px #000;">içeriğindeki bitkisel kaynaklı Bioflavanoidler, doymamış yağ asitleri, Dithymoquinone, Vitamin- mineraller ve çinko sayesinde saç dökülmesine karşı etkili olur. </p>

    </div>
</div>

<!-- Our Work Row -->
<div class="row multicolor" id="row4">
<div class="width-container">

<!-- Row Headings -->
<div class="heading-container">
    <div class="container">
        <table>
            <tr>
                <td>
                    <h1 class="hairLifeHeader">Multimedya</h1>
                </td>
            </tr>
        </table>
    </div>

    <h2>Ürünlerimiz ile ilgili fotoğraf ve videolar </h2>

    <div class="clear"></div>
</div>

<!-- Row Contents -->
<div class="content-container">
<div id="gallery-container">

<!-- Gallery Filters -->
<div class="gallery-options">
    <button class="button1 active filter" data-filter="all">ALL</button> <!-- Gallery Filter (Only the text "ALL" inside the button can be changed) -->
    <button class="button2 filter" data-filter="web">WEB</button> <!-- Gallery Filter -->
    <button class="button3 filter" data-filter="photography">PHOTOGRAPHY</button> <!-- Gallery Filter -->
    <button class="button4 filter" data-filter="print">PRINT</button> <!-- Gallery Filter -->
    <button class="button5 filter" data-filter="branding">BRANDING</button> <!-- Gallery Filter -->
</div>
<div class="gallery-options column-selector">
    <button class="button2">2-COLUMNS</button>
    <button class="button3">3-COLUMNS</button>
    <button class="button4 active">4-COLUMNS</button>
</div>
<div class="clear"></div>

<!-- Gallery Area -->
<ul class="four-cols" id="gallery"> <!-- Change this ul's class name to "two-cols", "three-cols" or "four-cols" -->

<!-- Gallery Item 1 -->
<li class="gallery-item all web"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item1.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <button class="close-button">X</button>
            <div class="portfolio-modal">
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item1.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>



            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 2 -->
<li class="gallery-item all photography"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item2.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>


    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item2.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 3 -->
<li class="gallery-item all print"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item3.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item3.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 4 -->
<li class="gallery-item all branding"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item4.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item4.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 5 -->
<li class="gallery-item all web"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item5.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item5.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 6 -->
<li class="gallery-item all print"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item6.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item6.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>
    </div>
</li>

<!-- Gallery Item 7 -->
<li class="gallery-item all photography"> <!-- Add filter name as class -->
    <div class="image-area">
        <img src="images/portfolio/thumbnails/gallery-thumbnail-item7.jpg" alt="portfolio-thumb"> <!-- Gallery Item Image -->

        <div class="transparent-hover"></div>
        <span class="plus-button"></span>

        <!-- Gallery Item Description -->
        <div class="gallery-item-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ante eleifend, iaculis orci ut, convallis.</p>
        </div>
        <button class="gallery-show-modal"></button>
    </div>



    <div class="gallery-modal-container">
        <div class="gallery-inner-container grey multicolor">
            <div class="portfolio-modal">
                <button class="close-button">X</button>
                <div class="image-area">
                    <img src="images/portfolio/gallery-large-item7.jpg" alt="portfolio-large-image"> <!-- Gallery Item Modal Window Image -->

                    <div class="portfolio-nav">
                        <button class="gallery-prev">&lt;</button>
                        <button class="gallery-next">&gt;</button>
                    </div>
                </div>
                <div class="details">

                    <!-- Gallery Item Modal Window Title -->

                </div>

            </div>
        </div>

    </div>
</li>
</ul>
</div>
</div>
</div>
</div>

<!-- Parallax 3-->
<div class="parallax-container parallax3 multicolor">
    <img src="images/parallax/parallax-bg3.jpg" class="parallax-bg" alt="parallax-background"> <!-- Parallax 3 Background -->

    <!-- Parallax 3 Content -->
    <div class="width-container">
        <h1 style="color:#000000; text-shadow: 1px 2px 1px #fff; font-family: Verdana,sans-serif ">%100 doğal</h1>

        <p style="color:#000000; text-shadow: 1px 2px 1px #fff; font-family: Verdana,sans-serif ">Saç dökülmesine son. Daha gür daha güçlü saçlar. saç derisini nemlendirerek kan dolaşımını arttırır ve kökleri güçlendirir.</p>

    </div>
</div>

<!-- Clients Row -->
<div class="row" id="row5" >
    <div class="lightbox">

        <div class="lbInner">

            <div class="closeBtn"></div>

            <div class="lbContent content1" style="display: none;">
                <div class="lbContentLeft">
                    <img src="images/1.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Esra Küçük DİZDAR</span>
                    <p>
                        32 yaşındayım. Saçlarım evin heryerinde, Kocamla en büyük kavga sebebimiz, evin heryeri saç.
                        Arkadaşımın önerisiyle denemeye karar verdim ve inanılmaz. Saçlarım geri döndü eşim saçların
                        dökülmüyor temizlik mi yapıyorsun diyor, neşemin nedenini de anlayamadı, anlayamasında zaten,
                        şimdi kilo vermeye de başladım...
                    </p>
                </div>
            </div>

            <div class="lbContent content2">
                <div class="lbContentLeft">
                    <img src="images/2.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Serdar Akbulut</span>
                    <p>
                        Saçları problemli olan büyük kitleden birisiyim ben de. Bugüne kadar kuaförlerden, eczanelerden
                        bir çok farklı ürün aldım bu konuda hepside farklı derecelerde etkili ve kaliteli markalardı buna
                        hiç bir diyeceğim yok. Fakat ürünler sadece o gün için iyiydi, yani  kullanınca saçlarım harika
                        gözüküyor ama  bıraktıktan hemen sonra dökülmeye devam ediyor ve saçlarımı yerlerden topluyordum.
                        Kuaförüm geçen yıl da bu üründen bahsediyordu, yurtdışından getirtebilsek falan diyordu, başka
                        ürünler de önermişti ama bu, işte bu tamamdı. Neyse kullandım ve Ürün içeriğinde de herhangi bir
                        kimyasal olmadığı için sanırım hiçbir yan etkisini görmedim. Derdiniz olunca hastalığınızın
                        doktoru oluyorsunuz benim gibi işte. Memnun kaldım tavsiye diyorum arkadaşlar.
                    </p>
                </div>
            </div>

            <div class="lbContent content3">
                <div class="lbContentLeft">
                    <img src="images/4.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Aydın Karaca</span>
                    <p>
                        Enerjimi arttırdı, ciddi söylüyorum, kendimi o kadar enerjik, güvenli, rahatlamış hissediyorum ki
                        sadece 2 hafta sonra karım sen saçına bişey mi yaptırıyorsun, beyazların gitmiş, farklılar sanki dedi.
                        2 kutu siparişimi verdim bugün...
                    </p>
                </div>
            </div>

            <div class="lbContent content4">
                <div class="lbContentLeft">
                    <img src="images/3.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Ahmet Taştan</span>
                    <p>
                        Siparişten bir gün sonra elime geçmesi ilgililerin konusunda çok
                        iyi olduklarını ve müşteri memnuniyetini önemsediklerini gösterir. Kendilerini tebrik ediyorum...
                        Üründen de aynı şekilde çok memnun kaldım...
                    </p>
                </div>
            </div>

            <div class="lbContent content5">
                <div class="lbContentLeft">
                    <img src="images/5.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Zahit Meriç</span>
                    <p>
                        Ben 36 yaşındayım diğer saç ürünlerine harcadığım parayla kıyasladım bu ürünü. Gerçekten de Arctivit
                        performans ve maddiyat açısından çok daha başarılı ve ekonomik bir ürün. Öncelikle kendinizi çok
                        enerjik hissediyorsunuz. İnanılmaz kendinize güveniniz artıyor. Ben çok beğendim...
                    </p>
                </div>
            </div>

            <div class="lbContent content6">
                <div class="lbContentLeft">
                    <img src="images/6.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Semih Dağdelen</span>
                    <p>
                        Harika ürün.. Saçlarım o kadar hızlı dökülüyordu ki, bir sonraki ay etkisi daha çok hissedilir
                        oluyor. Önce şampuanını kullanmamıştım ama kullanınca çok daha iyi hissettim açıkcası ilginç bir şey.
                    </p>
                </div>
            </div>

            <div class="lbContent content7">
                <div class="lbContentLeft">
                    <img src="images/7.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Gülçin Akkoyunlu </span>
                    <p>
                        Benim sorunum saçlarımın arasında oluşan küçük lezyonlar, stresten. Tarayamıyorum, kaşınıyor falan,
                        bilirsiniz işte.  Arctivit’i İsviçre’deki kuzenim getirmişti ilk, sadece bir şişe kullandım. Bildiğim
                        kadarıyla bu tarz ürünler yaralara iyi gelmiyor ama bu %100 doğal olduğu için kepek, yara, hatta iyice
                        seyrelen saçlarımı bile kendine geldi. Şimdi buradaymış hemen sipariş verdim, şampuanıyla birlikte.
                    </p>
                </div>
            </div>

            <div class="lbContent content8">
                <div class="lbContentLeft">
                    <img src="images/8.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Mualla Gümüşkaya</span>
                    <p>
                        Organik saç ürünler konusunda takıntılıyım, dünyanın çeşitli yerlerinden Saf yağlar getirtiyordum,
                        denemediğim yağ kalmamıştı. Arctivitin içiriği bulup bir araya getirmek amatörlerin işi değilmiş.
                        Ama teşekkürler gerçekten de kaliteli bir ürünmüş. Saçlarımı uzatamıyorum, fönletemiyorum korkusu
                        yaşamaya gerek yok bence, saçlarım hem canlı hem parlak, gayet ideal, Doğru demişler, regeneration...
                    </p>
                </div>
            </div>

            <div class="lbContent content9">
                <div class="lbContentLeft">
                    <img src="images/9.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Kamil Seyhun</span>
                    <p>
                        İlk başta şüpheyle yaklaşmış olsam da, Arctivit kullanmayı kabul ettim. Vay canına kısa sürede
                        sağladığı enerjiye, saçlarımdaki canlılığa çok şaşırmıştım. Eşim de sağladığı etkilerden çok memnun kaldı.
                        Memnuniyetimizi yakın arkadaşlarımızla paylaşacağız...
                    </p>
                </div>
            </div>

            <div class="lbContent content10">
                <div class="lbContentLeft">
                    <img src="images/10.jpg" alt=""/>
                </div>
                <div class="lbContentRight">
                    <span>Ceren Bostanoğlu</span>
                    <p>
                        23 yaşındayım, Saçlarımı 3-4 yıldır boyatıp renk değiştiriordum. Saç dökülmelerim önlenemez durumdayken
                        Arctivit ile tanıştım. Sonuç inanılmaz, 2 aydır kullanıyorum ve daha şimdiden dökülme durduğu gibi
                        saçlarım canlanıyor, küçük saçlarım aralardan geliyor. Benim gibi boya kaynaklı sorunu olanlara tavsiye ederim...
                    </p>
                </div>
            </div>

        </div>

    </div>
    <div class="width-container">

        <!-- Row Headings -->
        <div class="heading-container">
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <h1 class="hairLifeHeader">Kullanıcılar</h1>
                        </td>
                    </tr>
                </table>
            </div>

            <h2>Ürünlerimizi kullanan ve memnun kalan müşterilerimiz</h2>

            <div class="clear"></div>
        </div>

        <!-- Row Contents -->
        <div class="content-container users">

            <!-- Team Members Area -->
            <div id="team-container">

                <!-- Team Member 1 -->
                <div class="team-member" id="content1">

                    <!-- Team Member Image -->

                    <img src="images/1.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Esra Küçük DİZDAR</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                            <!--<a href="#" class="icon-dribbble"></a>-->
                            <!--<a href="#" class="icon-facebook"></a>-->
                            <!--<a href="#" class="icon-twitter"></a>-->
                            <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member"  id="content2">

                    <img src="images/2.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Serdar AKBULUT</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                            <!--<a href="#" class="icon-dribbble"></a>-->
                            <!--<a href="#" class="icon-facebook"></a>-->
                            <!--<a href="#" class="icon-twitter"></a>-->
                            <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member" id="content3">

                    <img src="images/4.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Aydın KARACA</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                            <!--<a href="#" class="icon-dribbble"></a>-->
                            <!--<a href="#" class="icon-facebook"></a>-->
                            <!--<a href="#" class="icon-twitter"></a>-->
                            <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member" id="content4">

                    <img src="images/3.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Ahmet TAŞTAN</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                            <!--<a href="#" class="icon-dribbble"></a>-->
                            <!--<a href="#" class="icon-facebook"></a>-->
                            <!--<a href="#" class="icon-twitter"></a>-->
                            <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-member" id="content5">

                    <!-- Team Member Image -->

                    <img src="images/5.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Zahit MERİÇ</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="team-member" id="content6">

                    <!-- Team Member Image -->

                    <img src="images/6.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Semih DAĞDELEN</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="team-member" id="content7">

                    <!-- Team Member Image -->

                    <img src="images/7.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Gülçin Akkoyunlu</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 8 -->
                <div class="team-member" id="content8">

                    <!-- Team Member Image -->

                    <img src="images/8.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Mualla Gümüşkaya</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 9 -->
                <div class="team-member" id="content9">

                    <!-- Team Member Image -->

                    <img src="images/9.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Kamil SEYHUN</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Team Member 10 -->
                <div class="team-member" id="content10">

                    <!-- Team Member Image -->

                    <img src="images/10.jpg" width="170" height="255" alt=""/>
                    <!-- Team Member Details -->
                    <div class="team-member-details">
                        <span class="name">Ceren Bostanoğlu</span>


                        <!-- Team Member Social Media Links -->
                        <!--<div class="links">-->
                        <!--<a href="#" class="icon-dribbble"></a>-->
                        <!--<a href="#" class="icon-facebook"></a>-->
                        <!--<a href="#" class="icon-twitter"></a>-->
                        <!--<a href="#" class="icon-linkedin"></a>-->
                        <!--</div>-->
                        <div class="clear"></div>
                    </div>
                </div>



                <div class="clear"></div>
            </div>


        </div>
    </div>
</div>

<!-- Contact Row -->
<div class="row grey multicolor" id="row6">
    <div class="width-container">

        <!-- Row Headings -->
        <div class="heading-container">
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <h1 class="hairLifeHeader">İLETİŞİM</h1>
                        </td>
                    </tr>
                </table>
            </div>

            <h2>İnternet sayfamızı ziyaret ettiğiniz için teşekkür ederiz. Ürünlerimiz veya hizmetlerimizle ilgili yardıma ihtiyacınız varsa, lütfen bizimle temasa geçin..</h2>

            <div class="clear"></div>
            <div id="form-alert"></div>

        </div>

        <!-- Row Contents -->
        <div class="content-container">
            <div class="container left">


                <!-- Contact Information-->
                <div class="contact-details">
                    <ul>
                        <li>
                            <span class="icon-home"></span>
                            <span class="contact-detail">Nispetiye cad. İhsan Aksoy sok. No:5/4<br/> <!-- Contact Address-->
                            Etiler / İSTANBUL</span>

                            <div class="clear"></div>
                        </li>
                        <li>
                            <span class="icon-mobile-phone"></span>
                            <span class="contact-detail">+90 (212) 257 20 75</span> <!-- Contact Phone-->

                            <div class="clear"></div>
                        </li>
                        <li>
                            <span class="icon-envelope"></span>
                            <span class="contact-detail">info@arctivit.com</span> <!-- Contact Email-->

                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="left last">

                <!-- Contact Form-->
                <form id="contact-form2" method="POST" action="send.php">
                    <div class="input">
                        <span>Adınız</span>
                        <input type="text" name="isim">
                    </div>
                    <div class="input">
                        <span>E-posta Adresiniz</span>
                        <input type="email" name="mailadresi">
                    </div>
                    <div class="input">
                        <span>Konu</span>
                        <input type="text" name="MailKonu">
                    </div>
                    <div class="textarea">
                        <span>Mesajınız</span>
                        <textarea name="Mail"></textarea>
                    </div>
                    <span>Tüm alanların doldurulması gerekmektedir</span>
                    <button type="submit" id="mailSend">Gönder</button>
                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div id="overlay">
    <div></div>
</div>

<!-- Footer -->
<footer class="multicolor">
    <div id="upper-footer">
        <div class="width-container">
            <div id="info">

                <!--<iframe width="545" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=%C4%B0hsan+Aksoy+Sk&amp;daddr=&amp;hl=tr&amp;geocode=FT7XcgIdXQ67AQ&amp;sll=41.07886,29.029299&amp;sspn=0.007327,0.016512&amp;t=m&amp;mra=mr&amp;ie=UTF8&amp;ll=41.07886,29.029299&amp;spn=0.007327,0.016512&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=%C4%B0hsan+Aksoy+Sk&amp;daddr=&amp;hl=tr&amp;geocode=FT7XcgIdXQ67AQ&amp;sll=41.07886,29.029299&amp;sspn=0.007327,0.016512&amp;t=m&amp;mra=mr&amp;ie=UTF8&amp;ll=41.07886,29.029299&amp;spn=0.007327,0.016512" style="color:#0000FF;text-align:left">Daha Büyük Görüntüle</a></small>-->

            </div>



            <!--&lt;!&ndash; Tweets Section &ndash;&gt;-->
            <!--<div class="tweets">-->
                <!--<h3>ARCTIVIT TWITTER</h3>-->
                <!--<div class="tweet-container">-->
                    <!--<span class="icon-twitter"></span>-->
                    <!--<ul>-->
                        <!--<li>-->
                            <!--<p>Mauris non mattis libero. Curabitur pellentesque, massa vitae adipiscing lobortis, odio-->
                                <!--mauris etum convallis.</p>-->
                            <!--<span class="hashtag">#arctivit</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<p>Mauris non mattis libero. Curabitur pellentesque, massa vitae adipiscing lobortis, odio-->
                                <!--mauris etum convallis.</p>-->
                            <!--<span class="hashtag">#arctivit</span>-->
                        <!--</li>-->
                        <!--<li class="last">-->
                            <!--<button><span>more tweets</span> <span class="icon-caret-right"></span></button>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
                <!--<a href="#main-slider-container" id="top-button"></a>-->
            <!--</div>-->

            <div class="clear"></div>
        </div>
    </div>

    <!-- Bottom of Footer -->
    <div id="bottom-footer">
        <div class="width-container">
            <!-- Copyright info -->
            <span>&copy;2013 Moni. monimarketingofnonstopinnovation</span>

            <!--&lt;!&ndash; Social Media Links&ndash;&gt;-->
            <!--<div class="social-links">-->
                <!--<ul>-->
                    <!--<li>-->
                        <!--<a class="icon-twitter" href="#"></a> &lt;!&ndash; Twitter Link&ndash;&gt;-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="icon-linkedin" href="#"></a> &lt;!&ndash; Linkedin Link&ndash;&gt;-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="icon-pinterest" href="#"></a> &lt;!&ndash; Pinterest Link&ndash;&gt;-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="icon-dribbble" href="#"></a> &lt;!&ndash; Dribble Link&ndash;&gt;-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="icon-rss" href="#"></a> &lt;!&ndash; RSS Link&ndash;&gt;-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="icon-facebook" href="#"></a> &lt;!&ndash; Facebook Link&ndash;&gt;-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->

            <div class="clear"></div>
        </div>
    </div>
</footer>
</div>

<!-- Main JS file -->
<script type='text/javascript' src='js/main.js'></script>
<!-- Modernizr -->
<script type='text/javascript' src='js/modernizr.custom.53842.js'></script>
<!-- Flex Slider -->
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<!-- MixItUp -->
<script type='text/javascript' src='js/jquery.mixitup.min.js'></script>
<!-- BX Slider -->
<script type='text/javascript' src='js/jquery.bxslider.min.js'></script>
<!-- Animation Pause Plugin -->
<script type='text/javascript' src='js/jquery.pause.min.js'></script>
<!-- BGPOS -->
<script type='text/javascript' src='js/jquery.bgpos.js'></script>
<!-- TinyNav -->
<script type='text/javascript' src='js/tinynav.js'></script>
<!-- Tweeter module -->
<script type='text/javascript' src='js/jquery.tweet.js'></script>
<script type='text/javascript' src='js/script.js'></script>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(41.080436, 29.035547),
            mapTypeId: google.maps.MapTypeId.HYBRID
        };
        map = new google.maps.Map(document.getElementById('info'),mapOptions);
        var image = 'http://www.arctivit.com/demo2/arclogo.png';
        var myLatLng = new google.maps.LatLng(41.080436, 29.035547);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>

</body>
</html>
