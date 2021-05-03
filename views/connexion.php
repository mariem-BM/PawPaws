<?php
include "../model/reservation.php";
include "../controller/reservationC.php";
/*$reservationC = new reservationC();
$post=new reservationC();
$post->firstname= $_POST["firstname"];
$post->lastname= $_POST["lastname"];
$post->date = $_POST["date"];
$post->tel= $_POST["tel"];
$post->adresse= $_POST["adresse"];
$post->nbn= $_POST["nbn"];
$post->rp= $_POST["rp"];
$post->email= $_POST["email"];

$reservationC ->sendmail($post);*/

$reservationC=new reservationC();
$post=new reservationC ();
session_start();

$reservation=$reservationC->getact($_POST["reservation"]);
foreach ($reservation as $reservation)
{if ($reservationC ->afficherrooms1($_POST["roomtype"],$_POST["reservation"])==1)
{$reservationC ->connexion($_SESSION['e'],$_SESSION['Nom']." ".$_SESSION['Prenom'],$_POST["roomtype"],$_POST["reservation"],$reservation["idreservation"]);
header( "refresh:5;url=Acceuil.php");}
else {echo "Places non restantes, merci pour votre comprehension";
header( "refresh:5;url=index1.php");
return;
}
$reservationC->sendmail($post);
}