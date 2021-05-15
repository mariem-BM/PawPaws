

<?php
include '../controller/reservationC.php';
$reservationsC=new reservationsC();

if (isset($_POST["idreservation"])&&($_POST["idroom"])){
    $reservationsC->supprimerReservation($_POST["idreservation"],$_POST["idroom"]);
    header('Location:Reservation_Gestion.php');
}

