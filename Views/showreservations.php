<?php
include '../controller/reservationC.php';

/*$reservationsC= new reservationsC();

$liste=$reservationsC->afficherReservation();


$tri='';
if (isset($_GET["tri"]))
    $tri=$_GET["tri"];


$listereservation=$reservationsC->afficherActivites($tri);*/
$search="";
$reservationsC= new reservationsC();
if(isset($_POST['valueToSearch']))
{   
    $search=$_POST['valueToSearch'];
        
}
$liste=$reservationsC->searchreservation($search);
if(isset($_POST['tri']))
{
if($_POST['tri']=="defaut")
{
    $tri=0;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="date asc")
{
    $tri=1;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="roomtype asc")
{
    $tri=2;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="date desc")
{
    $tri=3;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="roomtype desc")
{
    $tri=4;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="Nights asc")
{
    $tri=5;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="Nights desc")
{
    $tri=6;
    $liste=$reservationsC->trireservation($tri);
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
<!--<a class="btn btn-info" href="searchreservation.php"> <i class="glyphicon glyphicon-plus" > </i> &nbsp;Search reservation</a>
<a href="showreservations.php?tri=P"> Alphabetique A-Z</a>
<a href="showreservations.php?tri=ZA"> Alphabetique Z-A</a>
<a href="showreservations.php?tri=DA"> Date↓</a>
<a href="showreservations.php?tri=DS"> Date↑</a>-->
    <div  align="center" class="container-fluid">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<form class="contact__form" method="post" action="">
    <div align="center"  class="control-group form-group">   
<input type="text" name="tri" list="tri" >
    <datalist id="tri">
      <option value="defaut">
        <option value="date asc">
      <option value="roomtype asc">
      
        <option value="date desc">
        <option value="roomtype desc">
      <option value="Nights asc">
        <option value="nights desc">
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
<!--<div class="container">-->
    <style>
    @media print{
        body * { 
        visibility: visible; 
    }
    .print-container, .print-container * {
        visibility: visible;
    }
    .dontPrint * {
        visibility: hidden;
    }
}

</style>
  <!--  <button onclick="window.print();" class="dontPrint" >Print</button>-->

    <div class="row print-container"></div>
    <div >
        <table class="table table-striped custab">
            <thead>
    <tr>
        <th>Idreservation</th>
         <th>user</th>
       <th>Pets</th>
       <!-- <th>Lastname </th>-->
        <th>Adress</th>
        <th>Phone</th>
        <th>Check In</th>
        <th>Email</th>
        <th>Hotel Adress</th>
        <th>Nights</th>
        <th>Nbre Room</th>
        <th>Special Requirments</th>
        <th>Roomtype<th>
        <th>Hotel adress<th>
        <!-- <th>user</th>-->
        <th>delete</th>
        <th>update</th>
        <th>Genrate PDF</th>
        
    </tr>
            </thead>
    <?PHP
    foreach($liste as $reservationh){ //echo reservation 9dima//
        ?>
        <tr>

            <td><?PHP echo $reservationh['idreservation']; ?></td>
             <td><?PHP echo $reservationh['Nom']; ?>&nbsp;<?PHP echo $reservationh['Prenom'];?></td>
            <td><?PHP echo $reservationh['firstname']; ?></td>
           <!-- <td><?PHP //echo $reservation//['lastname']; ?></td>-->
            <td><?PHP echo $reservationh['adresse']; ?></td>
            <td><?PHP echo $reservationh['tel']; ?></td>
            <td><?PHP echo $reservationh['date']; ?></td>
            <td><?PHP echo $reservationh['email']; ?></td>
            <td><?PHP echo $reservationh['hoteladresse']; ?></td>
            <td><?PHP echo $reservationh['nbn']; ?></td>
            <td><?PHP echo $reservationh['room']; ?></td>
            <td><?PHP echo $reservationh['rp']; ?></td>

            <td><?PHP echo $reservationh['roomtype']; ?></td>
            <td><?PHP echo $reservationh['hoteladresse']; ?></td>

         <!--   <td><?PHP// echo $reservationh['Nom']; ?>&nbsp;<?PHP //echo $reservationh//['Prenom'];?></td>-->
<div class="dontPrint">
            <td>
                <form method="POST" action="deletereservation.php">
                    <input type="submit"  class=" btn btn-danger" name="supprimer" value="Delete">
                    <input type="hidden" value=<?PHP echo $reservationh['idreservation'] ; // ba3thna id  champs hiddden bch na9rawh fi page spperimer ?> name="idreservation">
                    <input type="hidden" value=<?PHP echo $reservationh['idroom'] ; ?> name="idroom">

                </form>
            </td>
            <td>

                <a type="button" class="btn btn-primary shop-item-button" href = "updatereservation.php?idreservation=<?= $reservationh['idreservation']?>">Update</a>
            </td>

           

<!--<input type="button" value="Print & Do New Transaction" class="dontPrint" id="payout_print"  onclick="window.print();window.location.href='transaction/admin/new_transaction'">-->

               <!-- <a type="button" class=" btn btn-danger" href = "print.php?idreservation=<?= $reservation//['idreservation']?>" onClick="window.print()">Print Attestaion</a>-->

                <td>

<a type="button" class="btn btn-primary shop-item-button" href = "print.php?idreservation=<?= $reservationh['idreservation']?>">Generate PDF</a>
            </td>



<!--<td>-->
<!--<button onclick="window.print();" style="background-color:#4682B4" style="text:white">Print</button>-->
<!--<a type="button" class=" btn btn-danger" href = "print.php?idreservation=<?= $reservation//['idreservation']?>" onClick="window.print()">Print</a>
            </td>-->
<!--<td>
<button onClick="window.print();" class="dontPrint" >Print</button>
            </td>-->
            </div>
        </tr>
        <?PHP



    }

    ?>
</table>
<table>
<td>
    <a type="button" class="btn btn-primary shop-item-button" href = "create-dynamic-pdf-send-as-attachment-with-email-in-php-demo?idreservation=<?= $reservationh['idreservation']?>">send/print all informations</a>
            
</td>
</table>
    </div>
</div>
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
    .dontPrint{
        visibility: hidden;
    }


</style>
</body>
</html>