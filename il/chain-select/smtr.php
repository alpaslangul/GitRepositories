<?php
require_once("mysql.php");

if(isset($_GET['il'])){
	
	$il=(int)$_GET['il'];
	
	if($il>0){
		$dk=$db->q("SELECT `id`,`ilce_adi` FROM `ilce` WHERE `il_id`='$il' ORDER BY `id` ASC");
		$list='{"0":"İlçe Seçiniz",';
		while($ilr=$db->fassoc($dk)){
			$list.='"'.$ilr['id'].'":"'.$ilr['ilce_adi'].'",';
		}
		$list=substr($list,0,-1);
		$list.="}";
		
		echo $list;
	}
}

$db->close();
?>