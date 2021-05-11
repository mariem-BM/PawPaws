
<!DOCTYPE html>
<html>
<?php session_start();
?>
    <head>
   <meta charset="utf-8">
  <title>Paw Paws</title>
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
    
  <!-- header -->
   <header class = "header" id = "header">
   <div class = "head-top">
   <div class = "site-name">
    <span>Paw Paws</span>
    </div>
    <div class = "site-nav">
    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
    </div>
    </div>
   <div class = "head-bottom flex">
   <h2>Welcome</h2>
   <p>Paw Paws best website for all yours and your pets needs!</p>

    <button type = "button" class = "head-btn" onclick="bouton()">GET STARTED</button>
    </div>
    </header>
    <!-- end of header -->

   <!-- side navbar -->
   <div class = "sidenav" id = "sidenav">
    <span class = "cancel-btn" id = "cancel-btn">
    <i class = "fas fa-times"></i>
    </span>
    <ul class = "navbar">
    <li><a href = "#header">home</a></li>
   <li><a href = "servicespage.php">services</a></li>
   <li><a href = "WatchBlogPost.php">Blog</a></li>
  <!-- <li><a href = "form.php">activités</a></li>-->
   <li><a href = "FormComplaint.php">Products</a></li>
    <li><a href = "roomspage.php">Rooms</a></li>
    <?php if (isset($_SESSION["e"]))
    {

    echo "<li><a href = 'DashboardUser.php'>Account</a></li>";
       
    } if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin")
    {

  echo "<li><a href = 'DashboardAdmin.php'>Admin Space</a></li>";


}

if (isset($_SESSION["role"]) && $_SESSION["role"]=="hotelmanager")
    {

  echo "<li><a href = 'DashboardHotelManager.php'>hotelmanager Space</a></li>";



}
 if (!isset($_SESSION["e"]))
    {


 echo "<a class = 'btn sign-up' href='Signup.php'>sign up</a>";
  echo  "<a class = 'btn log-in' href='signin.php'>log in</a>";
    
    
    }

?>
</ul>

    </div>
    <!-- end of side navbar -->

    
              
<section class = "rooms sec-width"  id = "rooms">
    <?php

include_once '../model/reservation.php';
include_once '../model/room.php';
include_once '../controller/reservationC.php';

?>
            <div class = "title">
                <h3 style="color:#FF5733;">Hotels</h3>
            </div> 
<div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 style="color:#FF5733;">BECAUSE YOUR PET DESERVES THE BEST</h3>
                        <p>When you leave your pet somewhere overnight, you want to be sure they’re well taken care of.pawpaws Resorts Luxury Pet Hotel are award-winning, internationally recognized pet care resorts that will make your pup feel right at home. All our trained and certified staff members are true animal lovers and will care for your pet as if they were our own.</p>

                    </div>
                    
                </div>
               
            </div>
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
         </section>  
        

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h3 style="color:#FF5733;">Hotels</h3>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "../assets3/img/pet_hotels1.png" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Hotel</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Private Suite.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                               Comforts.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Cleanliness.
                            </li>
                        </ul>
                        <p>Our comfortable accommodations & safety-certified associates provide a welcoming place for dogs & cats to stay while you’re away! Guests will feel at home with the around-the-clock care of our pet-loving staff. We offer a safe, clean, temperature-controlled environment, playtime, exercise, healthy meals & more. Book the ultimate staycation destination for your pet now!</p>
                      <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>-->
                        <p class = "rate">
                            <span style="color:#FF5733;">TND400.4 /</span> Per Night
                        </p>

                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "../assets3/img/pet_hotel2.jpeg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Hotel</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Private Suite.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Comforts.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Cleanliness.
                            </li>
                        </ul>
                        <p>Our comfortable accommodations & safety-certified associates provide a welcoming place for dogs & cats to stay while you’re away! Guests will feel at home with the around-the-clock care of our pet-loving staff. We offer a safe, clean, temperature-controlled environment, playtime, exercise, healthy meals & more. Book the ultimate staycation destination for your pet now!</p>
                       <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>-->
                        <p class = "rate">
                            <span style="color:#FF5733;">TND220.4 /</span> Per Night
                        </p>

                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "../assets3/img/pet_hotels3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Hotel</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                               Private Suite.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Comforts.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right" style="color:#FF5733;"></i>
                                Cleanliness.
                            </li>
                        </ul>
                        <p>Our comfortable accommodations & safety-certified associates provide a welcoming place for dogs & cats to stay while you’re away! Guests will feel at home with the around-the-clock care of our pet-loving staff. We offer a safe, clean, temperature-controlled environment, playtime, exercise, healthy meals & more. Book the ultimate staycation destination for your pet now!</p>
                     <!--   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>-->
                        <p class = "rate">
                            <span style="color:#FF5733;">TND150.00 /</span> Per Night
                        </p>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>
        <section class = "rooms sec-width"  id = "rooms">
            <div class = "title">
                <h3 style="color:#FF5733;">Products</h3>
               
            </div> 
         </section>  


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2 style="color:#FF5733;">customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Great staff at swiming pool and young Ali - who helped us to play voleyball - simply super! , A great man for water aerobics, They made us a volleyball court, brought a subwoofer, and delivered bottled water and drinks every day,</p>
                        <img src = "../assets3/img/customor1.jpg" alt = "customer image">
                        <span>Samir, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>This is a comfortable Radisson hotel. All facilities were good and there was an amazing selection in Ceramique restaurant both for breakfast and dinner, including local and international dishes. However, our final night was interrupted by an alarm which went off at 04.30 in the next room</p>
                        <img src = "../assets3/img/customor2.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Excellent</h3>
                        <p>This is a very good hotel. All Staff is so attentive. They do more than their best to assist with a smile. Food and other services are also good. I would especially thank Mohamad, Husseim, Ahmed and Mohamad Ali from reception for their special help. We really loved to be there.</p>
                        <img src = "../assets3/img/customor3.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
    </body>
</html>