<?php
    include_once '../Model/Utilisateur.php';
    include_once '../Controller/UtilisateurC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
    if (
        isset($_POST["id"]) && 
        isset($_POST["nom_prenom"]) &&
        isset($_POST["image"]) && 
        isset($_POST["email"]) && 
        isset($_POST["tel"]) &&
        isset($_POST["date_n"]) && 
        isset($_POST["type"]) &&
        isset($_POST["sexe"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
    ) {
        if (
        !empty($_POST["id"]) && 
        !empty($_POST["nom_prenom"]) &&
        !empty($_POST["image"]) && 
        !empty($_POST["email"]) && 
        !empty($_POST["tel"]) &&
        !empty($_POST["date_n"]) && 
        !empty($_POST["type"]) &&
        !empty($_POST["sexe"]) && 
        !empty($_POST["login"]) && 
        !empty($_POST["pass"])
        ) {
            $user = new Utilisateur(
                $_POST['id'],
                $_POST['nom_prenom'], 
                $_POST['image'],
                $_POST['email'],
                $_POST['tel'] ,
                $_POST['date_n'],
                $_POST['type'], 
                $_POST['sexe'],
                $_POST['login'],
                $_POST['pass']
            );

    
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PawPaws</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">  <!-- fb- p- g+ -insta -->
    <link rel="stylesheet" href="css/style.css">  <!-- taille- color -->
    <link rel="stylesheet" href="css/profile.css">  
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css"> -->



    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="css/themify-icons.css"> -->
    <!-- <link rel="stylesheet" href="css/nice-select.css"> -->
    <!-- <link rel="stylesheet" href="css/flaticon.css"> -->
    <!-- <link rel="stylesheet" href="css/gijgo.css"> -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- <link rel="stylesheet" href="css/slicknav.css"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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
                                    <img src="img/logo.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.html">home</a></li>
                                        <li><a href="profil.html">profil</a></li>
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
                                        <li><a href="service.html">services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Sign up</a></li>
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
    <!-- header_ends  -->

<!-- bradcam_area_start (couleur orange) -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Sign up</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

<hr>





    <div class="main">
       <section class="signup">
          <div class="container">
             <div class="signup-content">
                <div id="error">
                  <?php echo $error; ?>
                </div>
                <form action="#" method="POST" id="signup-form" class="signup-form">
                   <h1><font color="Red">C</font>reate Account </h1>
                   <div class="form-group">
                      <input type="text" name="fullname" class="form-input" id="fullname" placeholder="Enter Your Full Name">
                   </div>
                   <div class="form-group">
                      <input type="email" name="email" class="form-input" id="email" placeholder="Enter Your Email">
                   </div>
                   <div class="form-group">
                      <input type="tel" name="tel" class="form-input" id="tel" placeholder="Enter Your Phone Number">
                   </div>  
                   <div class="form-group">
                      <input type="text" name="adress" class="form-input" id="adress" placeholder="Enter Your Adress">
                   </div>
                   <div class="form-group">
                   <input type="date" name="date_n" id="date_n">
                   </div>
                   <div class="form-group">
		   <select name="prof" id="prof">
	           <option value="select">Select</option>
		   <option value="Responsable hôtel">Responsable hôtel</option>
		   <option value="Vétérinaire">vétérinaire</option>
		   <option value="dresseur">dresseur</option>
		   <option value="toiletteur">toiletteur</option>
		   </select>
                   </div>
                   <div class="form-group">
	           <input type="radio" name="gender" id="gender" value="femme" ><label for="femme">Femme
		   </label>
		   <input type="radio" name="gender" id="gender" value="homme"><label for="homme">Homme
 		   </label>
                   </div>
                   <div class="form-group">
                      <input type="login" name="login" class="form-input" id="login" placeholder="Enter Your Login">
                   </div>
                   <div class="form-group">
                      <input type="password" name="password" class="form-input" id="password" placeholder="Enter Your Password">
                      <span toggle="#password" class="zamdi zamdi-eye field-icon toggle-password"/></span>
                   </div>
                   <div class="form-group">
                      <input type="password" name="re-password" class="form-input" id="re-password" placeholder="Confirmer Password">
                   </div>
                   <div class="form-group">
                      <input type="checkbox" name="agree terms" class="agree-term" >
                      <label for="agree-term" class="label-agree-term"><span><span></span></span> | Agree All Terms <a href="#" class="term-service"></a>
                      </label>     
                   </div>
                   <div class="form-group">
                      <a href="profil.html"><input type="submit" name="submit" id="submit" class="form-submit" value="Create Account"></a>
                   </div>
                </form> 
                <p class="loginhere">
                   Already have an account ? <a href="login.html" class="loginhere-link">Login Here</a>
                </p>
             </div>
          </div>
       </section>
    </div>


    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li>+555 0000 565</li>
                                <li><a href="#">Demomail@gmail.Com</a></li>
                                <li>700, Green Lane, New York, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Insurance</a></li>
                                <li><a href="#">Pet surgeries </a></li>
                                <li><a href="#">Pet Adoption</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Login info</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">239 E 5th St, New York 
                                NY 10003, USA
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/signup.js"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
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