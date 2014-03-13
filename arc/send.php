<?php

/////////////////DIKKAT-DIKKAT/////////////////////////////
//ALTTAKi BOLUME MAiL ADRESiNiZ VE MAiL SiFRENiZi YAZINIZ//
///////////////////////////////////////////////////////////

$mail_adresiniz	= "web@arctivit.com";
$mail_sifreniz	= "Arc123456";
$gidecek_adres	= "info@arctivit.com";
$domain_adresi	= "arctivit.com";	//www olmadan yazınız

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


require("include/class.php");
$mail = new PHPMail();
$mail->Host       = "smtp.".$domain_adresi;
$mail->SMTPAuth   = true;
$mail->Username   = $mail_adresiniz;
$mail->Password   = $mail_sifreniz;
$mail->IsSMTP();
$mail->AddAddress($gidecek_adres);
$mail->From       = $mail_adresiniz;
$mail->FromName   = $mail_adresiniz;
$mail->Subject    = $_POST["MailKonu"];
$mail->Body       = $_POST["isim"]."\n".$_POST["mailadresi"]."\n".$_POST["Mail"];
$mail->AltBody    = "";

if(!$mail->Send()){
   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Language\" content=\"tr\">\n";
   echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />';
   echo "<meta name=\"Author\" content=\"IsimTescil Destek\">\n";
   echo "<title> IsimTescil - Destek </title>\n";
   echo "</head>\n";
   echo "<body>";
   echo "<script language='javascript'>alert('Mesajınız Gönderilirken bir hata oluştu. Sunucudan gelen cevap aşağıdaki gibidir.');</script>\n";
   echo '<script>window.location="http://www.arctivit.com/tr/index.php";</script>\n';
   echo "<center>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "<font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "Mesajınız Gönderilirken bir hata oluştu. Sunucudan gelen cevap aşağıdaki gibidir:\n";
   echo "</font> <b>]</b></font>\n";
   echo "<br><font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "Hata: " . $mail->ErrorInfo;
   echo "</font> <b>]</b></font>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "</center>\n";
   echo "</body>\n";
   echo "</html>\n";
   exit;
}

   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Language\" content=\"tr\">\n";
   echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />';
   echo "<meta name=\"Author\" content=\"IsimTescil Destek\">\n";
   echo "<title> IsimTescil - Destek </title>\n";
   echo "</head>\n";
   echo "<body>\n";
   echo "<center>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "<font face=\"Verdana\" style=\"font-size: 8pt\"><b>[</b> <font color=\"#0000FF\">\n";
   echo "<script language='javascript'>alert('Mesajınız Gönderilmiştir.');</script>\n";
   echo '<script>window.location="http://www.arctivit.com/tr/index.php";</script>\n';
   echo "Mesajınız Gönderilmiştir.\n";
   echo "</font> <b>]</b></font>\n";
   echo "<hr width=\"500\" color=\"#C0C0C0\" style=\"border-style: double; border-width: 3px\">\n";
   echo "</center>\n";
   echo "</body>\n";
   echo "</html>\n";

?>