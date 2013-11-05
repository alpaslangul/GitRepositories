<?
require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.cccotedivoireturkey.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "web@cccotedivoireturkey.com";  // SMTP username
$mail->Password = "Moni123"; // SMTP password

$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Encoding="base64";

$mail->From     = "web@cccotedivoireturkey.com"; // smtp kullan�c� ad�n�z ile ayn� olmal�
$mail->Fromname = "cccotedivoireturkey.com web form";
$mail->AddAddress("sonererdogan@cccotedivoireturkey.com","Soner Erdoğan");
$mail->AddAddress("osmangumuskaya@cccotedivoireturkey.com","Osman Gümüşkaya");
$mail->AddAddress("osmangumuskaya@cccotedivoireturkey.com","Mualla Göksu");
$mail->Subject  =  $_POST['web form'];
$mail->Body     =  implode("    ",$_POST);

if(!$mail->Send())
{
   echo "Mesaj Gonderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Mesaj Gonderildi";


?>
