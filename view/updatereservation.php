
<?php

    require_once '../controller/reservationC.php';
    require_once '../model/reservation.php';

$reservationC = new reservationC();
if (isset($_GET["idreservation"]))
    $idreservation=$_GET["idreservation"];
$error = "";
if (
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["adresse"])&&
    isset($_POST["tel"]) &&
    isset($_POST["date"]) &&

    isset($_POST["email"]) &&
    isset($_POST["nbn"])&&
    isset($_POST["service"])&&
    isset($_POST["rp"])&&
isset($_POST["idservice"])&&
isset($_POST["iduser"])
) {

        $Reservation = new reservation(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['adresse'],
            $_POST['date'],
            $_POST['tel'],

            $_POST['email'],
            $_POST['nbn'],
            $_POST['service'],
            $_POST['rp'],
            $_POST['idservice'],
$_POST['iduser']
        );
       $idreservation=$_POST["idreservation"];
        $reservationC->updateReservation($Reservation, $idreservation);
        header('Location:showreservations.php');
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paw Paws</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <!-- LINEARICONS -->
    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<div id="error">
    <?php echo $error; ?>
</div>


<body>
<form action="" method="POST">
<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="background.jpg" alt="">

            <h3>Your reservation</h3>
        </div>
        <div id="wizard">


            <?php
            if (isset($_GET['idreservation'])) {
            $result = $reservationC->getReservationById($_GET['idreservation']);
            if ($result !== false) {
            ?>

            <!-- SECTION 1 -->

            <h4>Choose Date</h4>
            <section>

                <div class="form-row">

                    <div class="form-holder">
                        <input id="iduser" name="iduser" style="color: #0c5460" value=" <?php
                        session_start();
                        if((isset($_SESSION['e']))){

                            echo $_SESSION['e'];}?>" hidden>
                        <input type="text" class="form-control datepicker-here pl-85" data-language='en' data-date-format="dd - m - yyyy" id="dp1" name="date" value="<?= $result['date'] ?>" >
                        <input id="idreservation" name="idreservation" value="<?php echo $idreservation ?>" hidden>


                        <span class="lnr lnr-chevron-down"></span>
                        <span class="placeholder">Rendez-vous :</span>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="select">

                        <select  name="nbn" class="form-control" value="<?= $result['nbn'] ?>">
                            <option style="color: midnightblue">1 Pet</option>
                            <option style="color: midnightblue" >2 Pets</option>
                            <option style="color: midnightblue" >3 Pets</option>
                            <option style="color: midnightblue" >4 Pets</option>
                            <option style="color: midnightblue">5 Pets</option>
                        </select>
                    </div>
                    <div class="select">
                        <div class="form-holder">


                        </div>
                        <select class="form-control" name="service" value="<?= $result['service'] ?>">
                            <option style="color: midnightblue">1 service</option>
                            <option style="color: midnightblue" >2 services</option>
                            <option style="color: midnightblue">3 services</option>
                            <option style="color: midnightblue">4 services</option>
                            <option style="color: midnightblue" >5 services</option>
                        </select>
                    </div>
                </div>


            </section>

            <!-- SECTION 2 -->

            <h4>Choose service</h4>
            <section>

                <div class="form-row">

                    <div class="form-holder">

                    </div>
                    <div class="form-holder">

                    </div>
                </div>
                <div class="form-row">
                   
                <div class="form-row mb-21">
                    <div class="form-holder w-100">
                        <textarea name="rp" value="<?= $result['rp'] ?>" id="rp" class="form-control" style="height: 79px;" placeholder="Special Requirements and/or medical conditions :"></textarea>
                        <input class="form-control" type="text"  name="idroom" id="idroom"  value="<?= $result['idroom'] ?> " hidden>



                    </div>
                </div>
                    <button class="forward">NEXT
                    <i class="zmdi zmdi-long-arrow-right"></i>
                </button>

            </section>


            <!-- SECTION 3 -->
            <h4>Make a Reservation</h4>
            <section>
                <div class="form-row">


                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Phone :" name="tel"value="<?= $result['tel'] ?>" >
                    </div>
                    <div class="form-holder">
                        <input type="text" class="form-control" placeholder="Mail :"name="email" id="email"  value="<?= $result['email'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <input type="text" class="form-control" placeholder="Address :" name="adresse" id="adresse" value="<?= $result['adresse'] ?>">
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I have read and accept the <a href="#" >terms and conditions. </a>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button type="submit" value="modify">Modify</button>
            </section>

</form>
<?php
}
}
else {
    header('Location:showreservations.php');
}
?>

                </div>
            </section>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>

<!-- JQUERY STEP -->
<script src="js/jquery.steps.js"></script>

<!-- DATE-PICKER -->
<script src="vendor/date-picker/js/datepicker.js"></script>
<script src="vendor/date-picker/js/datepicker.en.js"></script>

<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->

</body>
</html>
