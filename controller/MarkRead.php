<?php
// include "../DB/Config.php";
// $sql="Update message set readDestination=1 where source= 3 and destinataire= 1";
// $db = config2::getConnexion();
// $db->query($sql);
// echo "aaa";







?>


<?php
include_once "../DB/Config.php";
$sql="Update message set readDestination=1 where source=".$_GET['source']." and destinataire= ".$_GET['destinataire'];
$db = config2::getConnexion();
$db->query($sql);
//echo $_GET['destinataire'];







?> 