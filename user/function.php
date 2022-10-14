<?php
function jumlah_suka($status){
	global $db;
	$suka = $db->prepare("select * from suka where suka_status=:status");
	$suka->bindParam(':status', $status);
	$suka->execute();
	return $suka->rowCount();
}
?>