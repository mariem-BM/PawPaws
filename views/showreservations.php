<?php
include '../controller/reservationC.php';

$reservationC= new reservationC();

$liste=$reservationC->afficherReservation();


$tri='';
if (isset($_GET["tri"]))
    $tri=$_GET["tri"];


$listereservation=$reservationC->afficherActivites($tri);




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
<a class="btn btn-info" href="searchreservation.php"> <i class="glyphicon glyphicon-plus" > </i> &nbsp;Search reservation</a>
<a href="showreservations.php?tri=P"> Alphabetique A-Z</a>
<a href="showreservations.php?tri=ZA"> Alphabetique Z-A</a>
<a href="showreservations.php?tri=DA"> Date↓</a>
<a href="showreservations.php?tri=DS"> Date↑</a>
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
        <th>Nights</th>
        <th>Nbre Room</th>
        <th>Special Requirments</th>
        <th>Roomtype<th>
        <!-- <th>user</th>-->
        <th>delete</th>
        <th>update</th>
        <th>Genrate PDF</th>
        
    </tr>
            </thead>
    <?PHP
    foreach($listereservation as $reservation){ //echo reservation 9dima//
        ?>
        <tr>

            <td><?PHP echo $reservation['idreservation']; ?></td>
             <td><?PHP echo $reservation['Nom']; ?>&nbsp;<?PHP echo $reservation['Prenom'];?></td>
            <td><?PHP echo $reservation['firstname']; ?></td>
           <!-- <td><?PHP //echo $reservation//['lastname']; ?></td>-->
            <td><?PHP echo $reservation['adresse']; ?></td>
            <td><?PHP echo $reservation['tel']; ?></td>
            <td><?PHP echo $reservation['date']; ?></td>
            <td><?PHP echo $reservation['email']; ?></td>
            <td><?PHP echo $reservation['nbn']; ?></td>
            <td><?PHP echo $reservation['room']; ?></td>
            <td><?PHP echo $reservation['rp']; ?></td>

            <td><?PHP echo $reservation['roomtype']; ?></td>

         <!--   <td><?PHP// echo $reservation['Nom']; ?>&nbsp;<?PHP //echo $reservation//['Prenom'];?></td>-->
<div class="dontPrint">
            <td>
                <form method="POST" action="deletereservation.php">
                    <input type="submit"  class=" btn btn-danger" name="supprimer" value="Delete">
                    <input type="hidden" value=<?PHP echo $reservation['idreservation'] ; // ba3thna id  champs hiddden bch na9rawh fi page spperimer ?> name="idreservation">
                    <input type="hidden" value=<?PHP echo $reservation['idroom'] ; ?> name="idroom">

                </form>
            </td>
            <td>

                <a type="button" class="btn btn-primary shop-item-button" href = "updatereservation.php?idreservation=<?= $reservation['idreservation']?>">Update</a>
            </td>

           

<!--<input type="button" value="Print & Do New Transaction" class="dontPrint" id="payout_print"  onclick="window.print();window.location.href='transaction/admin/new_transaction'">-->

               <!-- <a type="button" class=" btn btn-danger" href = "print.php?idreservation=<?= $reservation//['idreservation']?>" onClick="window.print()">Print Attestaion</a>-->

                <td>

<a type="button" class="btn btn-primary shop-item-button" href = "print.php?idreservation=<?= $reservation['idreservation']?>">Generate PDF</a>
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
    <a type="button" class="btn btn-primary shop-item-button" href = "create-dynamic-pdf-send-as-attachment-with-email-in-php-demo?idreservation=<?= $reservation['idreservation']?>">send/print all informations</a>
            
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