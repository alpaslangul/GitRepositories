<?
require("class.phpmailer.php");

$body = "Cote Divoire Turkey \n";
$body .= "Adi : " .$_POST["name"]."\r\n";
$body .= "E-mail  :" .$_POST["email"]."\r\n";
$body .= "Web : " .$_POST["web"]."\r\n";
$body .= "Mesaj : " .$_POST["message"]."\r\n";


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host     = "mail.cccotedivoireturkey.com";
$mail->SMTPAuth = true;
$mail->Username = "web@cccotedivoireturkey.com";
$mail->Password = "Moni123";

$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Encoding="base64";

$mail->From     = "web@cccotedivoireturkey.com";
$mail->Fromname = "cccotedivoireturkey.com web form";
$mail->AddAddress("sonererdogan@cccotedivoireturkey.com","Soner Erdoğan");
$mail->AddAddress("osmangumuskaya@cccotedivoireturkey.com","Osman Gümüşkaya");
$mail->AddAddress("muallagoksu@cccotedivoireturkey.com","Mualla Göksu");

$mail->Subject  =  $_POST['web form'];
$mail->Body     =  $body;

if(!$mail->Send())
{
    echo "Mesaj Gonderilemedi <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
} else {
    echo "<script language= 'JavaScript'>alert('Mail Gönderildi.');</script>";

}

?>
