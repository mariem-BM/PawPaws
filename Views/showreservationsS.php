<?php
include '../controller/reservationSC.php';

$search="";
$reservationC= new reservationC();
if(isset($_POST['valueToSearch']))
{   
    $search=$_POST['valueToSearch'];
        
}
$liste=$reservationC->searchres($search);
if(isset($_POST['tri']))
{
if($_POST['tri']=="defaut")
{
    $tri=0;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="date asc")
{
    $tri=1;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="servicetype asc")
{
    $tri=2;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="date desc")
{
    $tri=3;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="servicetype desc")
{
    $tri=4;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="nb pets asc")
{
    $tri=5;
    $liste=$reservationC->trieres($tri);
}
else if($_POST['tri']=="nb pets desc")
{
    $tri=6;
    $liste=$reservationC->trieres($tri);
}

}


?>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> show reservation name </title>
</head>
<body>
    <div  align="center" class="container-fluid">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
          <div class="row">
<form class="contact__form" method="post" action="">
    <div align="center"  class="control-group form-group">   
<input type="text" name="tri" list="tri" >
    <datalist id="tri">
      <option value="defaut">
        <option value="date asc">
      <option value="servicetype asc">
      
        <option value="date desc">
        <option value="servicetype desc">
      <option value="nb pets asc">
        <option value="nb pets desc">
      <div class="col-12 mt-4">

    </div>
    </datalist>
            <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Trier">
    </div>
    </form>
    <form align="center" action="" method="post">
    <input type="text" name="valueToSearch", placeholder="Reservations to search">
    <input type="submit" name="search" value="search"><br><br>
</form>
<hr>
<div class="container">
    <div >
        <table class="table table-striped custab">
            <thead>
    <tr>
        <th>Idreservation</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Rendez-vous</th>
        <th>Email</th>
        <th>Pets</th>
        <th>Requirements</th>
        <th>servicetype<th>
        <th>user</th>
        <th>delete</th>
        <th>update</th>
        <th>Generate PDF</th>
        
        
    </tr>
            </thead>
    <?PHP
    foreach($liste as $reservation){ //echo reservation 9dima//
        ?>
        <tr>

            <td><?PHP echo $reservation['idreservation']; ?></td>
            <td><?PHP echo $reservation['adresse']; ?></td>
            <td><?PHP echo $reservation['tel']; ?></td>
            <td><?PHP echo $reservation['date']; ?></td>
            <td><?PHP echo $reservation['email']; ?></td>
            <td><?PHP echo $reservation['nbn']; ?></td>
            <td><?PHP echo $reservation['rp']; ?></td>
            <td><?PHP echo $reservation['servicetype']; ?></td>
            <td><?PHP echo $reservation['Nom']; ?>&nbsp;<?PHP echo $reservation['Prenom'];?></td>

            <td>
                <form method="POST" action="deletereservationS.php">
                    <input type="submit"  class=" btn btn-danger" name="supprimer" value="Delete">
                    <input type="hidden" value=<?PHP echo $reservation['idreservation'] ; // ba3thna id  champs hiddden bch na9rawh fi page spperimer ?> name="idreservation">
                    <input type="hidden" value=<?PHP echo $reservation['idservice'] ; ?> name="idservice">

                </form>
            </td>
            <td>

                <a type="button" class="btn btn-primary shop-item-button" href = "updatereservationS.php?idreservation=<?= $reservation['idreservation']?>">Update</a>
            </td>
            <td>

<a type="button" class="btn btn-primary shop-item-button" href = "page_document.php?idreservation=<?= $reservation['idreservation']?>">Generate PDF</a>
            </td>
            
        </tr>
        <?PHP



    }

    ?>
</table>
<table>
<td>
    <a type="button" class="btn btn-primary shop-item-button" href = "confirm-send?idreservation=<?= $reservation['idreservation']?>">send/print all informations</a>
            
</td>
</table>
<style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 1% 0;
        width:100%
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;

    }

</style>

</body>
</html>