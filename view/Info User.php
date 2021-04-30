<?php
//include "../Controller/ComentC.php";
require_once "../Controller/UserC.php";

$x=Get_one_User_Info($_SESSION["e"]);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Info</title>
        <script src="script.js"></script>
    </head>
<body>
  <?php foreach($x as $user)
  { ?>
  <h1>Nom : <?php echo $user["Nom"] ?> </h2>
  <br>
  <h5>Prénom : <?php echo $user["Prenom"] ?> </h2>
  <br>
  <h5>Email : <?php echo $user["Email"] ?> </h2>
  <br>
  <h5>Date de naissance : <?php echo $user["Date_N"] ?> </h2>
  <br>
  <h5>Sexe : <?php echo $user["sexe"] ?> </h2>
  <br>
  <h5>Role : <?php echo $user["role"] ?> </h2>

<!-- <h5>Facture : <?php //echo $user["Facture"] ?> dt </h2>-->
  <br>
  <?php } ?>
