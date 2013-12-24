<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host     = "mail.gigimode.com";
$mail->SMTPAuth = true;
$mail->Username = "info@gigimode.com";
$mail->Password = "Gigi123";

$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Encoding="base64";

$mail->From     = "info@gigimode.com";
$mail->Fromname = "Web Form";
$mail->AddAddress("info@gigimode.com","Gigi Mode");

$mail->Subject  =  $_POST['baslik'];
$mail->Body     =  implode("    ",$_POST);

if(!$mail->Send())
{
   echo "Mesaj Gonderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

header( "Location: tesekkur.htm" );


?>
