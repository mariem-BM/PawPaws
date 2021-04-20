
<?php
include '../controller/reservationC.php';
$reservationC=new reservationC();

if (isset($_POST["idreservation"])&&($_POST["idservice"])){
    $reservationC->supprimerReservation($_POST["idreservation"],$_POST["idservice"]);
    header('Location:showreservations.php');
}

