<?php
include_once "../DB/Config.php";
$sql="SELECT * From message where source=".$_GET['source']." and destinataire=".$_GET['destinataire']." OR source=".$_GET['destinataire']." and destinataire=".$_GET['source']." order by id asc ";
$db = config2::getConnexion();
$liste=$db->query($sql);
$finalArr= array();
foreach ($liste as $row) {
	$myArr['id']=$row['id'];
	$myArr['source']=$row['source'];
	$myArr['destinataire']=$row['destinataire'];
	$myArr['contenu']=$row['contenu'];
	$myArr['date']=$row['date'];
	$finalArr[]=$myArr;
}

echo json_encode($finalArr);

?>