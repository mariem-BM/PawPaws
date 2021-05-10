
<!DOCTYPE html>
<html>
<?php session_start();
?>
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
   <h2>Welcome</h2>
   <p>PawPaws best website for all yours and your pets needs!</p>

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
    <li><a href = "#header">Home</a></li>

   <li><a href = "servicespage.php">services</a></li>

   <li><a href = "WatchBlogPost.php">Blog</a></li>

   <li><a href = "form.php">Shop</a></li>
    <li><a href = "roomspage.php">Rooms</a></li>

    <li><a href = "chatAdmin.php">Chat</a></li>

   <li><a href = "FormComplaint.php">Reclamation</a></li>

   



    <?php 
 /* if (isset($_SESSION["role"]) && $_SESSION["role"]=="hotelmanager")
    {

  echo "<li><a href = 'DashboardHotelManager.php'>HotelManager Space</a></li>";

}
  if (isset($_SESSION["role"]) && $_SESSION["role"]=="ServiceProvider")
    {

  echo "<li><a href = 'DashboardServiceProvider.php'>ServiceProvider Space</a></li>";

}*/
if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin")
    {

  echo "<li><a href = 'DashboardAdmin.php'>Admin Space</a></li>";
}
if (isset($_SESSION["e"])){

    echo "<li><a href = 'Info User.php'>User Space</a></li>";
       
    } 


if (!isset($_SESSION["e"]))
    {


 echo "<a class = 'btn sign-up' href='Signup.php'>sign up</a>";
  echo  "<a class = 'btn log-in' href='signin.php'>log in</a>";
    
    
    }
echo "<a class = 'btn sign-up' href='../disconnect.php'>Logout</a>";
?>
</ul>

    </div>
    <!-- end of side navbar -->

    
              
    <!-- SERVICES -->  
           <div class = "title">
                <h3 style="color:#FF5733;">Services</h3>
            </div>         
<div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 style="color:#FF5733;">Services for every pet</h3>
                        <p>Whether it’s a pamper day, playdate, sleepover, training class or veterinary visit, we provide the best in pet services with highly trained, passionate associates. From our pet hotel & doggie day camp as an alternative to pet sitting, to our dog training and grooming as an alternative to DIY, our services are conveniently located inside most of our PawPaws stores.</p>
                                    CHECK THE <li><a href = "servicespage.php">Services Page</a></li>
                    </div>
                    
                </div>
               
            </div>
                </div>
            </div>
 <!-- ROOMS --> 
            <div class = "title">
                <h3 style="color:#FF5733;">Rooms</h3>
            </div> 
<div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 style="color:#FF5733;">Because your pet deserves the best</h3>
                        <p>When you leave your pet somewhere overnight, you want to be sure they’re well taken care of.pawpaws Resorts Luxury Pet Hotel are award-winning, internationally recognized pet care resorts that will make your pup feel right at home. All our trained and certified staff members are true animal lovers and will care for your pet as if they were our own.</p>
                                    CHECK THE <li><a href = "roomspage.php">Rooms Page</a></li>
                    </div>
                    
                </div>
               
            </div>

</div>
</div>


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h3 style="text-align: center;color:#FF5733;">CUSTOMORES</h3>
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
                        <p>This is a comfortable PAWPAWS hotel. All facilities were good and there was an amazing selection in Ceramique restaurant both for breakfast and dinner, including local and international dishes. However, our final night was interrupted by an alarm which went off at 04.30 in the next room</p>
                        <img src = "../assets3/img/customor2.jpg" alt = "customer image">
                        <span>Mohamed, Country</span>
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
                        <span>Olfa, Country</span>
                    </div>
                    <!-- end of single customer -->
                </div>
           </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
              

                

               
                
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
    </body>
</html>