<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host     = "mail.gat-as.com";
$mail->SMTPAuth = true;
$mail->Username = "webmail@gat-as.com";
$mail->Password = "Gat123";

$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Encoding="base64";

$mail->From     = "webmail@gat-as.com";
$mail->Fromname = "Web Form";
$mail->AddAddress("n.kemalbay@gat-as.com","Nurkan Kemalbay");
$mail->AddAddress("a.gezer@gat-as.com","Alev Gezer");
$mail->AddAddress("b.kemalbay@gat-as.com","B.Kemalbay");
$mail->AddAddress("info@gat-as.com","webmail");
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
