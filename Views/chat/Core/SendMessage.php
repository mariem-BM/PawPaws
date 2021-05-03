<?php
include '../Entity/Message.php';
include_once 'MessageCore.php';
$message= new Message(0,$_GET['source'],$_GET['destinataire'],$_GET['contenu']);
$messageC= new MessageCore();
$messageC->ajouterMessage($message);
$messageC->ajouterReclamation($message);




?>