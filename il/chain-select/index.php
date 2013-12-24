<?php
@ob_start();
@session_start();
require_once("mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Serpito - Ajax Chain Select - İl ilçe seçimi</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://www.serpito.com/wp-content/themes/codium/style.css" />
<style>
	select { width:150px; line-height:22px; padding:4px; background-color:#F8F8F8; border:1px solid #F8EBDC; float:left; margin-right:15px;}
	select option{line-height:22px;}
</style>

</head>
<body>
<div id="wrapperpub">
	<div id="header">
		<div class="dp100" style="width:550px; float:left;">	
			<h1 id="blog-title" class="blogtitle"><a href="http://www.serpito.com/" title="Serpito">Serpito</a></h1>
			<div class="description">Güncel Teknoloji ve Yazılım Blogu </div>
		</div><!-- dp100 -->
        <div style="width:300px; float:right;">
        	<a style="font:2.4em/1.5 museo-sans-500,helvetica,arial,sans-serif; color:#FFF;" href="http://www.serpito.com/php-ajax-chained-select-il-ilce-secimi/">Yazıya geri dön &not;</a>
        </div>	
	</div><!--  #header -->		
</div><!--  #wrapperpub -->	

	<div class="clear"></div>
	
    <p><h2 style="color:#FFF; font:2.6em/1.5 museo-sans-500,helvetica,arial,sans-serif;" align="center">Chained Select Uygulaması  - İl & İlçe Seçimi</h2></p>
	<div id="wrapper" align="center" style="width:980px; min-height:200px; margin-top:10px; font-family:museo-sans-500,helvetica,arial,sans-serif;">	
    		<div id="container" style="width:940px;">
    			
                
             <div style="margin-left:30%;">   
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
                
                <select name="ilce" id="ilce">
                    <option value="0">İlçe Seçiniz</option>
                </select>
                
               </div> 
    
    		</div>
            <div style="clear:both;"></div>
    </div>
    
   <script src="selectchained.js" type="text/javascript"></script>
    <script>
	$("#ilce").remoteChained("#il", "smtr.php");
</script>
    
    <?php $db->close(); ?>
</body>
</html>