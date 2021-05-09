<?php
include_once "../DB/Config.php";
$sql="insert into reclamation values (null, :source, :destinataire,:contenu)";
$db = config2::getConnexion();

		$req=$db->prepare($sql);
$req->bindValue(':source',$_GET['title']);
$req->bindValue(':destinataire',$_GET['content']);
$req->bindValue(':contenu',$_GET['id_user']);


				$req->execute();

echo true;
?>
