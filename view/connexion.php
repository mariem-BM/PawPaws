<?php
include "../model/reservationS.php";
include "../controller/reservationSC.php";
$reservationC = new reservationC();
$post=new reservationC();
$post->date = $_POST["date"];
$post->tel= $_POST["tel"];
$post->adresse= $_POST["adresse"];
$post->nbn= $_POST["nbn"];
$post->rp= $_POST["rp"];
$post->email= $_POST["email"];

$reservationC ->sendmail($post);