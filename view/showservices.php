<?php
include '../controller/serviceC.php';
$serviceC1= new serviceC1();

$liste=$serviceC1->affiche();







?>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Services </title>
    <title>Paw Paws</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img2/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
       
<a class="btn btn-info" href="addservice.php"> <i class="glyphicon glyphicon-plus" > </i> &nbsp;add service</a>
<hr>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
    <tr>
        <th>Id</th>
        <th>servicetype</th>
        <th>price</th>
        <th>photo</th>
        <th>Places available</th>

        <th>supprimer</th>
        <th>modifier</th>
    </tr>
            </thead>
    <?PHP
    foreach($liste as $service){ //echo reservation 9dima//
        ?>
        <tr>
            <td><?PHP echo $service['idservice']; ?></td>
            <td><?PHP echo $service['servicetype']; ?></td>
            <td><?PHP echo $service['price']; ?></td>
            <td><?PHP echo $service['photo']; ?></td>
            <td><?PHP echo $service['qty']; ?></td>


            <td>
                <form method="POST" action="deleteservice.php">
                    <input type="submit"  class=" btn btn-danger" name="supprimer" value="Delete">
                    <input type="hidden" value=<?PHP echo $service['idservice'] ; // ba3thna id  champs hiddden bch na9rawh fi page spperimer ?> name="idservice">
                </form>
            </td>
            <td>

                <a type="button" class="btn btn-primary shop-item-button" href = "updateservice.php?idservice=<?= $service['idservice'] ?>">Modifier</a>
            </td>
        </tr>
        <?PHP



    }

    ?>
</table>
    </div>
</div>
<style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }</style>

</body>
</html>