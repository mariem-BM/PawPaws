
<?php
session_start();

    include "../controller/UserC.php";
    include_once '../model/User.php';

	$utilisateurC = new UserC();
	$error = "";

	if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["Date_N"]) && 
        isset($_POST["email"]) && 
        isset($_POST["role"]) &&
        isset($_POST["sexe"]) &&
        isset($_POST["login"]) && 
        isset($_POST["password"])
    ){
       
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["Date_N"]) &&
            !empty($_POST["email"]) && 
            !empty($_POST["role"]) && 
            !empty($_POST["sexe"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["password"])
        ) { 
            $user = new User(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['sexe'],
                $_POST['email'],
                $_POST['Date_N'],
                $_POST['role'],
                $_POST['login'],
                $_POST['password']
            );
            
            $utilisateurC->modifierUtilisateur($user, $_SESSION['e']);
            //header('Location:afficherUtilisateurs.php');
           
        }
        else
            $error = "Missing information";
	}

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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">  <!-- fb- p- g+ -insta -->
    <link rel="stylesheet" href="../css/style.css">  <!-- taille- color -->
    <link rel="stylesheet" href="../css/profile.css">  
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
                                        <li><a  href="Acceuil.php">home</a></li>
                                        <li><a href="#">profil</a></li>
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
                                        <li><a href="signin.php">Logout</a></li>
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
                        <h3>Profil</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

<hr>

<div class="profil">
  <div class="container">
     <div class="main">
       <div class="row">
          <div class="col-md-4 mt-1"> 
             <div class="card text center sidebar">
               <div class="card-body">
                  <img src="../img/profil.jpg" class="rounded-circle" width="150">
                  <div class="mt-3">
                     <h3> User Name </h3>
                 <!-- <a href=""> home </a>
                      <a href=""> work </a>
                      <a href=""> support </a>
                      <a href=""> settings </a>
                      <a href=""> signout </a> -->
                  </div>
               </div>
             </div>
          </div>
          <?php
        
			if (isset($_SESSION['e'])){
				$user = $utilisateurC->recupererUtilisateur($_SESSION['e']);
				
		?>
          <div class="col-md-8 mt-1">
		  <form class="form-sample" action="" method="POST">
         
                      <p class="card-description">Informations personnelles</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prenom</label>
                            <div class="col-sm-9">
                              <input type="text" name="prenom" class="form-control" value='<?php echo $user['Prenom'];?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nom </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nom" value='<?php echo $user['Nom']; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">role</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="role" value='<?php echo  $user['role']; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date de naissance</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="Date_N" value='<?php echo $user['Date_N']; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" class="form-control" value='<?php echo  $user['Email']; ?>' />
                            </div>
                          </div>
                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Login</label>
                            <div class="col-sm-9">
                              <input type="text" name="login" class="form-control" value='<?php echo $user['Login']; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password" class="form-control" value='<?php echo $user['Password']; ?>' />
                            </div>
                          </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">gender</label>
                            <div class="col-sm-9">
                              <input type="text" name="sexe" class="form-control" value='<?php echo $user['sexe']; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      </div>
                      <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Enregistrer modification </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          
                    </form>
                    </div>

           <!-- <div class="card mb-3 content">
			
                <h1 class="m-3 pt-3"> About </h1>
                <div class="card-body">
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Full Name </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                        
						 <input type="text" name="prenom" class="form-control" value='' />
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Email </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         abc@gmail.com
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3"> 
                         <h5> Phone </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         00923469
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Address </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         street no. 4, xyz
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Date Of Birth </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         --/--/---
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Type </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         ****
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Gender </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         Homme
                      </div>
                   </div>
                </div>
             </div>
             
             <hr></hr>
             <div class="card mb-3 content">
                <h1 class="m-3"> Available Services </h1>
                <div class="card-body">
                  <div class="row">
                     <div class="col-md-3">
                        <h5> Service Name </h5>
                     </div>
                     <div class="col-md-9 text-secondary">
                        Service Description
                     </div>
                  </div>
                </div>
             </div>
          </div>
       </div>
     </div>
  </div>-->

<?php
		}
		?>

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