<?php
header('Content-Type: text/html; charset=utf-8');
    $con   = mysql_connect("93.89.225.121", "parctivi_arcusr", "123654");
    $db = mysql_select_db('parctivi_arc_db',$con);
    if ($con) {
    @$mail = $_POST['mail'];


    if ($mail=='')
{
echo "Lütfen mail adresi giriniz";
die;
}
           if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "lütfen geçerli bir mail giriniz";
    die;
}



$sa="SELECT count(*) as total from e_mail_list where e_mail='".$mail."'";
    $result = mysql_query($sa);
   
$row = mysql_fetch_row($result);



if ($row[0]>=1){
echo "daha once girilmiş bir mail yeni giriniz" ;
die;

}



 $sql="INSERT INTO `e_mail_list` SET `e_mail`='".$mail."';";

mysql_select_db('accesss');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('sorunnnnnn: ' . mysql_error());
}else {
echo "ok";
  }


//sql yazım kurallarına dikat et tablo boyle olmalı 
  // ve mysqli kulllan 
/*
CREATE TABLE `e_mail_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


*/

}

?>