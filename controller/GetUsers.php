<?php
include_once "../DB/Config.php";
$sql="SELECT u.id, u.nom, u.prenom, u.matricule, u.role, count(m.id) FROM user u LEFT JOIN message m ON u.id = m.source and m.destinataire=".$_GET['source']." and m.readDestination=0 where u.id!=".$_GET['source']." group by (u.id) ";
// $sql="SELECT u.id, u.nom, u.prenom, u.matricule, u.role, count(m.id) FROM user u LEFT JOIN message m ON u.id = m.source and m.destinataire=1 and m.readDestination=0 where u.id!=1 group by (u.id) ";
$db = config2::getConnexion();

$liste=$db->query($sql);
$finalArr= array();
foreach ($liste as $row) {
	$myArr['id']=$row['id'];
	$myArr['nom']=$row['nom'];
	$myArr['prenom']=$row['prenom'];
	$myArr['matricule']=$row['matricule'];
	$myArr['role']=$row['role'];
	$myArr['count']=$row['count(m.id)'];
	$finalArr[]=$myArr;
}

echo json_encode($finalArr);

?>