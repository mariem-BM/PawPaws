<?php
session_start();
include_once '../model/reservation.php';
include_once '../model/room.php';
include_once '../controller/reservationC.php';
//include_once '../view/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>


    <meta charset="utf-8">
  <title>PawPaws</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets3/css/main2.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
   <link rel = "icon" href = "../assets3/img/logo.png" type = "image/png">
       <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/roompagestyle.css">
  
</head> 

<body>
   <!-- Navigation -->
     <!-- header -->
   <header class = "header" id = "header">
   <div class = "head-top">
   <div class = "site-name">
    <span>PawPaws</span>
    </div>
    <div class = "site-nav">
    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
    </div>
    </div>
    <div class = "head-bottom flex">
   <h2>Rooms</h2>
    </div>
    </header>
    <!-- end of header -->

   <!-- side navbar -->
   <div class = "sidenav" id = "sidenav">
    <span class = "cancel-btn" id = "cancel-btn">
    <i class = "fas fa-times"></i>
    </span>
    <ul class = "navbar">
    <li><a href = "Acceuil.php">Home</a></li>

   <li><a href = "servicespage.php">services</a></li>

   <li><a href = "WatchBlogPost.php">Blog</a></li>

    <li><a href = "chat.php">Chat</a></li>

   <li><a href = "FormComplaint.php">Reclamation</a></li>

    <li><a href = "roomspage.php">Rooms</a></li>

 <li><a href = "Frontt/accessoires.php">Produits</a></li>
   
   <li><a href = "Frontt/promotion.php">Promotions</a></li>
    <?php 
if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin")
    {

  echo "<li><a href = 'DashboardAdmin.php'>Admin Space</a></li>";
}
if (isset($_SESSION["role"]) && $_SESSION["role"]!="admin")
    {

    echo "<li><a href = 'liste_des_profil.php'>Liste des profils</a></li>";
}

if (isset($_SESSION["e"])){

    echo "<li><a href = 'profil.php'>User Space</a></li>";
   echo "<a class = 'btn sign-up' href='../disconnect.php'>Logout</a>";
    } 


if (!isset($_SESSION["e"]))
    {


 echo "<a class = 'btn sign-up' href='Signup.php'>sign up</a>";
  echo  "<a class = 'btn log-in' href='signin.php'>log in</a>";
    
    
    }


?>
</ul>

    </div>
   

<!-- bradcam_area_start (couleur orange) -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

<hr>
    <div  align="center" class="container-fluid">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
    <!-- header_start  -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 class="roomscss" style="color:#FF5733;">BECAUSE YOUR PET DESERVES THE BEST</h3>
                        <p class="css8";>When you leave your pet somewhere overnight, you want to be sure they’re well taken care of.pawpaws Resorts Luxury Pet Hotel are award-winning, internationally recognized pet care resorts that will make your pup feel right at home. All our trained and certified staff members are true animal lovers and will care for your pet as if they were our own.</p>

                    </div>
                    
                </div>
               
            </div>
<!-- Navigation -->

    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Portfolio
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                        <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                        <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item active" href="pricing.html">Pricing Table</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
</br></br>

<!-- Page Content -->
<div class="container">

    <?php

    $search="";
    if (isset($_GET["search"]))
    {
        $search=$_GET["search"];
    }
    afficherrooms($search);

    ?>
    <!-- Page Heading/Breadcrumbs -->




    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets3/js/script.js"></script>
   
</body>

</html>
