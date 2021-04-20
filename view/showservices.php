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

    <!-- CSS here -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/themify-icons.css">
    <link rel="stylesheet" href="css2/nice-select.css">
    <link rel="stylesheet" href="css2/flaticon.css">
    <link rel="stylesheet" href="css2/gijgo.css">
    <link rel="stylesheet" href="css2/animate.css">
    <link rel="stylesheet" href="css2/slicknav.css">
    <link rel="stylesheet" href="css2/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
        <!-- header_start  -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#">+880 4664 216</a></li>
                                    <li><a href="#">Mon - Sat 10:00 - 7:00</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img2/logo.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.html">home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="servicespage.php">services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header_start  -->   
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
    <!-- JS here -->
    <script src="js2/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js2/vendor/jquery-1.12.4.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/owl.carousel.min.js"></script>
    <script src="js2/isotope.pkgd.min.js"></script>
    <script src="js2/ajax-form.js"></script>
    <script src="js2/waypoints.min.js"></script>
    <script src="js2/jquery.counterup.min.js"></script>
    <script src="js2/imagesloaded.pkgd.min.js"></script>
    <script src="js2/scrollIt.js"></script>
    <script src="js2/jquery.scrollUp.min.js"></script>
    <script src="js2/wow.min.js"></script>
    <script src="js2/nice-select.min.js"></script>
    <script src="js2/jquery.slicknav.min.js"></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="js2/plugins.js"></script>
    <script src="js2/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js2/contact.js"></script>
    <script src="js2/jquery.ajaxchimp.min.js"></script>
    <script src="js2/jquery.form.js"></script>
    <script src="js2/jquery.validate.min.js"></script>
    <script src="js2/mail-script.js"></script>

    <script src="js2/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>
</html>