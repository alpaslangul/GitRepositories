<?php include 'header.php'; ?>

        <div class="connLeft"> <!--form left-->
            <div class="connectionForm">
                <div class="connFormHeader">İletişim Formu</div>
                <div class="connForm">
                    <div class="formLeft">
                        <span>Adı Soyadı</span>
                        <span>Ülke</span>
                        <span>Şehir</span>
                        <span>Telefon</span>
                        <span>E-mail</span>
                        <span>Mesaj</span>
                    </div>
                    <div class="formRight">

                        <form method="POST" action="mail.php"  method="post">
                            <p>
                                <input type="text" name="isim" size="20">
                            </p>
                            <p>
                            <p>
                                <input type="text" name="ulke" size="20">
                            </p>
                            <p>
                                <input type="text" name="sehir" size="20">
                            </p>
                            <p>
                                <input type="text" name="telefon" size="20">
                            </p>
                            <p>
                                <input type="text" name="mailad" size="20">
                            </p>
                            <p>
                                <input type="text" name="baslik" size="20">
                            </p>
                            <p>
                                <textarea rows="6" name="mesaj" cols="30"></textarea>
                            </p>

                            <p><input id="btn" type="submit" value="Gönder"></p>
                        </form>
                    </div>

                </div>

            </div>
            <div class="connectionText">
                <div id="turkeyAdress">
                    <span>Adres </span><p>Osmanpaşa cad. No: 11/B Kağıthane / İstanbul / Türkiye</p>
                    <span>Telefon</span><p>+90 212 295 08 85 </p>
                    <span>E-mail </span><p> info@cccotedivoireturkey.com </p>
                </div>

                <div id="cotedivoireAdress">
                    <span>Adres </span><p>Osmanpaşa cad. No: 11/B Kağıthane / İstanbul / Türkiye</p>
                    <span>Telefon</span><p>+90 212 295 08 85 </p>
                    <span>E-mail </span><p> info@cccotedivoireturkey.com </p>
                </div>
            </div>
        </div>
        <div class="connRight"> <!--form right-->
            <div class="connectionMap">
                <tbody><tr>
                    <td></td>
                    <td rowspan="2" align="right" valign="top">
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">

                            <tbody>
                            <tr>
                                <td valign="top">
                                </td></tr></tbody></table>
                        <table class="directions" width="480" border="0">
                            <tbody><tr>
                                <td valign="top" width="480">
                                    <div id="map_canvas" style="width: 420px; height: 332px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 200;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 101;"></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 201;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 102;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 103;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 48px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 48px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: -208px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: -208px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 304px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 304px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 48px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 48px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 304px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: -208px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: -208px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 304px;"></div></div></div></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 202;"><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 104;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 105;"></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 106;"></div></div><div style="-webkit-transform: translateZ(0); position: absolute; left: 0px; top: 0px; z-index: 100;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 48px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 48px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: -208px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: -208px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 304px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 304px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 48px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 48px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 304px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: -208px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: -208px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 304px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 570px; height: 450px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i608433&amp;2i392656&amp;2e2&amp;3u12&amp;4m2&amp;1u570&amp;2u450&amp;5m4&amp;1e3&amp;5sen-US&amp;6sus&amp;10b1&amp;token=5068" style="width: 570px; height: 450px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 48px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2377&amp;y=1534&amp;z=12&amp;token=2140" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231155600&amp;src=apiv3&amp;hl=en-US&amp;x=2377&amp;y=1534&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 48px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2378&amp;y=1534&amp;z=12&amp;token=70696" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231104705&amp;src=apiv3&amp;hl=en-US&amp;x=2378&amp;y=1534&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: -208px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2378&amp;y=1533&amp;z=12&amp;token=23540" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231019379&amp;src=apiv3&amp;hl=en-US&amp;x=2378&amp;y=1533&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: -208px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2377&amp;y=1533&amp;z=12&amp;token=86055" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231000000&amp;src=apiv3&amp;hl=en-US&amp;x=2377&amp;y=1533&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 79px; top: 304px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2377&amp;y=1535&amp;z=12&amp;token=49296" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231192440&amp;src=apiv3&amp;hl=en-US&amp;x=2377&amp;y=1535&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 335px; top: 304px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2378&amp;y=1535&amp;z=12&amp;token=117852" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231025397&amp;src=apiv3&amp;hl=en-US&amp;x=2378&amp;y=1535&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 48px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2376&amp;y=1534&amp;z=12&amp;token=64655" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231000000&amp;src=apiv3&amp;hl=en-US&amp;x=2376&amp;y=1534&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 48px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2379&amp;y=1534&amp;z=12&amp;token=8181" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231000000&amp;src=apiv3&amp;hl=en-US&amp;x=2379&amp;y=1534&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: 304px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2376&amp;y=1535&amp;z=12&amp;token=111811" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231085756&amp;src=apiv3&amp;hl=en-US&amp;x=2376&amp;y=1535&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: -177px; top: -208px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm0.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2376&amp;y=1533&amp;z=12&amp;token=17499" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt0.googleapis.com/vt?lyrs=m@231000000&amp;src=apiv3&amp;hl=en-US&amp;x=2376&amp;y=1533&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: -208px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2379&amp;y=1533&amp;z=12&amp;token=92096" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231019379&amp;src=apiv3&amp;hl=en-US&amp;x=2379&amp;y=1533&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0); position: absolute; left: 591px; top: 304px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://khm1.googleapis.com/kh?v=137&amp;hl=en-US&amp;x=2379&amp;y=1535&amp;z=12&amp;token=55337" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"><img src="http://mt1.googleapis.com/vt?lyrs=m@231022239&amp;src=apiv3&amp;hl=en-US&amp;x=2379&amp;y=1535&amp;z=12&amp;style=50,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 0px; top: 0px;"></div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="http://maps.google.com/maps?ll=41.066726,28.98688&amp;z=12&amp;t=h&amp;hl=en-US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 70px; bottom: 0px; width: 303px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2013 Basarsoft, Google  Imagery ©2013 TerraMetrics</span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 135px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2013 Basarsoft, Google  Imagery ©2013 TerraMetrics</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2013 Basarsoft, Google  Imagery ©2013 TerraMetrics</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="http://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; display: none;"><a target="_new" title="Report errors in the road map or imagery to Google" href="http://maps.google.com/maps?ll=41.066726,28.98688&amp;z=12&amp;t=h&amp;hl=en-US&amp;mapclient=apiv3&amp;skstate=action:mps_dialog$apiref:1&amp;output=classic" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="78" controlheight="340" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div style="visibility: hidden;"><svg version="1.1" overflow="hidden" width="78px" height="78px" viewBox="0 0 78 78" style="position: absolute; left: 0px; top: 0px;"><circle cx="39" cy="39" r="35" stroke-width="3" fill-opacity="0.2" fill="#f2f4f6" stroke="#f2f4f6"></circle><g transform="rotate(0 39 39)"><rect x="33" y="0" rx="4" ry="4" width="12" height="11" stroke="#a6a6a6" stroke-width="1" fill="#f2f4f6"></rect><polyline points="36.5,8.5 36.5,2.5 41.5,8.5 41.5,2.5" stroke-linejoin="bevel" stroke-width="1.5" fill="#f2f4f6" stroke="#000"></polyline></g></svg></div></div><div class="gmnoprint" controlwidth="59" controlheight="59" style="position: absolute; left: 10px; top: 11px;"><div style="width: 59px; height: 59px; overflow: hidden; position: relative;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"><div title="Pan left" style="position: absolute; left: 0px; top: 20px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan right" style="position: absolute; left: 39px; top: 20px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan up" style="position: absolute; left: 20px; top: 0px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan down" style="position: absolute; left: 20px; top: 39px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div></div></div></div><div controlwidth="32" controlheight="40" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 23px; top: 85px;"><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="25" controlheight="210" style="position: absolute; left: 27px; top: 130px;"><div title="Zoom in" style="width: 23px; height: 24px; overflow: hidden; position: relative; cursor: pointer; z-index: 1;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -17px; top: -400px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Click to zoom" style="width: 25px; height: 162px; overflow: hidden; position: relative; cursor: pointer; top: -4px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -17px; top: -87px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Drag to zoom" style="width: 21px; height: 14px; overflow: hidden; position: absolute; -webkit-transition: top 0.25s ease; transition: top 0.25s ease; z-index: 2; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; left: 2px; top: 76px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: 0px; top: -384px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom out" style="width: 23px; height: 23px; overflow: hidden; position: relative; cursor: pointer; top: -4px; z-index: 3;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -17px; top: -361px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 24px;">Map</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 22px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 43px; font-weight: 500;">Satellite</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 22px; text-align: left; display: none;"><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap; display: none;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(241, 241, 241); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></td>
                            </tr>
                            <tr>
                                <td width="300px">
                                    <form name="harita" onsubmit="YolTarifi(document.forms['harita'].elements['nerden'].value, '41.066726, 28.98688'); return false;">

                                        <table style="margin-top:13px" width="210px" border="0" cellpadding="3" cellspacing="0">
                                            <tbody><tr>
                                                <td width="50px">
                                                    <input onfocus="javascript:this.value=''" onblur="javascript:if(this.value==''){this.value='Bulunduğunuz yeri giriniz';}" type="text" size="40" name="nerden" value="Bulunduğunuz yeri giriniz">
                                                    <input style="margin-top:0px" class="maps-button" name="submit" type="button" onclick="YolTarifi(document.forms['harita'].elements['nerden'].value, '41.066726, 28.98688'); return false;" value="Adres Tarifi Al">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td valign="top" width="420"><div id="directions" style="width: 420px">
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>

                                            </tr>
                                            </tbody></table>

                                    </form></td>
                            </tr>
                            </tbody></table>
                        <br>


                        <br>
                    </td>
                </tr>
                </tbody>
            </div>
        </div>

    </div>
    <div class="advertising">
        <img src="img/airdivoure.jpg" alt="">
    </div>

</div>
<div class="footer">
    <div class="pageUp">
        <img src="img/up.png" alt="">
        <span class="up">SAYFA BAŞI</span>
    </div>

    <div class="foot">
        <div class="outColumn">
            <span class="footerHeadLine">Biz</span>
            <span>Etkinliklerimiz</span>
            <span>Haberler</span>
            <span>Yayınlar</span>
        </div>
        <div class="servicesColumn">
            <span class="footerHeadLine">Hizmetlerimiz</span>
            <span>Yayınlar</span>
            <span>Hizmetlerimiz</span>
            <span>Üyelik</span>
        </div>
        <div class="countryColumn">
            <span class="footerHeadLine">Ülke Bilgileri</span>
            <span>Galeri</span>
            <span>Fildişi Sahilleri</span>
            <span>République de Côte d'Ivoire</span>
        </div>
        <div class="connectionColumn">
            <span class="footerHeadLine">İletişim</span>
            <span>info@cccotedivoireturkey.com</span>
            <span>+90 212 511 44 88</span>
            <div>
                <img src="img/mapIco.png" alt="" class="mapIco">
                <p class="mapText">455 Larkspur Dr.
                    San Jose, CA 92926</p>
            </div>
        </div>
        <div class="socialColumn">
            <div class="socClmContainer">
                <a href="#" class="Ico" id="fb"></a>
<!--                <a href="#" class="Ico" id="tw"></a>-->
                <a href="#" class="Ico" id="rss"></a>
                <a href="#" class="Ico" id="mail"></a>
            </div>
        </div>
    </div>

</div>

</div>

</body>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/dwopdown.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

    var map;
    var directionsService;
    var directionsRenderer;
    var nereye="41.066726, 28.98688";

    function initialize() {
        map = new google.maps.Map(document.getElementById("map_canvas"),
            {
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: new google.maps.LatLng(41.066726, 28.98688)


            });
        var image = 'http://www.moni.com.tr/Repositories/cccotedivoireturkey/html/img/cccIcon.png';
        var myLatLng = new google.maps.LatLng(41.066726, 28.98688);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });



        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);
        directionsRenderer.setPanel(document.getElementById('directions'));
        directionsService = new google.maps.DirectionsService();

        Form=document.forms['harita'];

    }

    function YolTarifi(Nerden, Nereye) {
        var request = {
            origin: Nerden,
            destination: Nereye,
            travelMode: google.maps.DirectionsTravelMode.DRIVING,
            unitSystem: google.maps.DirectionsUnitSystem.METRIC

        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsRenderer.setDirections(response);
            } else {
                alert('Yol Tarifi Oluşturulamadı');
            }
        });
    }
    $('#6 a').css('color', '#f77f00');
    $('#6').css('background', 'url("img/sprite.png") no-repeat -2px -1px');

</script>


</html>