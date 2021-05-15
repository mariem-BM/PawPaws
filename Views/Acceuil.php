
<!DOCTYPE html>
<html>
<?php session_start();
?>
    <head>
        <meta charset="utf-8">
     <style>
       .css1 {
        font-family: Arial,Heveltica, sans-serif;
        color: tomato;
        font-style: italic;
       }

       .css2 {
        font-family: Arial,Heveltica, sans-serif;
        color: black;
        font-style: italic;
       }
       .css3 {
       
        text-decoration: none;
        background-color: tomato;
        color: black;
       
        text-align: center;
        width: 100px;
      margin-bottom: 1px;
       }
       .css4.css5{
         font-family: Arial,Heveltica, sans-serif;
         font-size: 29px;
       }
       #bg {
        width: 100px;
        height: 40px;
        background-repeat: no-repeat;
        background-position: top-right;

       }
   </style>
   <meta charset="utf-8">
  <title>PawPaws</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets3/css/main2.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
     <!-- hne yet7at el logo ama tfas5etli el taswira w eli 3ana sghirabarcha -->
   <link rel = "icon" href = "../assets3/img/PawPaws_Logo2.png" type = "image/png">
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
    <img src = "../assets3/img/PawPaws_Logo2.png" id="bg" alt = "logo image" height="50px" width="50px">
   <div class = "head-top">
   <div class = "site-name">
    
    <span>PawPaws</i></span>

    </div>
    <div class = "site-nav">
    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
    </div>
    </div>
   <div class = "head-bottom flex">
   <h2 style="color: tomato";>Welcome to PawPaws</h2>
   <p class="css4";>PawPaws best website for your pets and their needs!</p>

    <button type = "button" class = "head-btn" onclick="bouton()" style="color: tomato";>GET STARTED</button>
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

  
   <li><a href = "Frontt/accessoires.php">Produits</a></li>
   
   <li><a href = "Frontt/promotion.php">Promotions</a></li>



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
if (isset($_SESSION["role"]) && $_SESSION["role"]!="admin")
    {

    echo "<li><a href = 'liste_des_profil.php'>Liste des profils</a></li>";
}

if (isset($_SESSION["e"])){

    echo "<li><a href = 'profil.php'>User Space</a></li>";
       
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
<div class = "sec-width">
                <div class = "title">
                    <h3 style="text-align: center;color:#FF5733;">OUR WEBSITE PROVIDES</h3>
                </div>
    
              
    <!-- SERVICES -->  


<section class = "customers" id = "customers">
	<div class = "sec-width">
                <div class = "title">
                    <h3 style="text-align: center;color:#FF5733;">We Provide</h3>
                </div>
            
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "title">
                <h3 style="color:#FF5733;">Services</h3>
            </div>
                        
                        <h3 class="css1">Services for every pet</h3>
                        <p class="css2">Whether it’s a pamper day, playdate, sleepover, training class or veterinary visit, we provide the best in pet services with highly trained, passionate associates. From our pet hotel & doggie day camp as an alternative to pet sitting, to our dog training and grooming as an alternative to DIY, our services are conveniently located inside most of our PawPaws stores.</p>
                                    CHECK THE <li><a a style="text-align: center;" class="css3" href = "servicespage.php">Services Page</a></li>
                        <img src = "../assets3/img/customor1.jpg" alt = "customer image">
                        <span herf = "servicespage.php">Services Page</span>
                    </div>
                 <div class = "customer">
                    <div class = "title">
                <h3 style="color:#FF5733;">Rooms</h3>
            </div>
                       
                        <h3 class="css1">Because your pet deserves the best</h3>
                        <p class="css2">When you leave your pet somewhere overnight, you want to be sure they’re well taken care of.pawpaws Resorts Luxury Pet Hotel are award-winning, internationally recognized pet care resorts that will make your pup feel right at home. All our trained and certified staff members are true animal lovers and will care for your pet as if they were our own.</p>
                                    CHECK THE <li><a style="text-align: center;" class="css3" href = "roomspage.php">Rooms Page</a></li>
                        <img src = "../assets3/img/customor1.jpg" alt = "customer image">
                         <span herf = "roomsspage.php">Rooms Page</span>
                    </div>
        </section>



        <!--   <div class = "title">
                <h3 style="color:#FF5733;">Services</h3>
            </div>         
<div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 class="css1">Services for every pet</h3>
                        <p class="css2">Whether it’s a pamper day, playdate, sleepover, training class or veterinary visit, we provide the best in pet services with highly trained, passionate associates. From our pet hotel & doggie day camp as an alternative to pet sitting, to our dog training and grooming as an alternative to DIY, our services are conveniently located inside most of our PawPaws stores.</p>
                                    CHECK THE <li><a style="text-align: center;" class="css3"  href = "servicespage.php">Services Page</a></li>
                    </div>
                    
                </div>
               
            </div>
                </div>
            </div>
 <!-- ROOMS --> 
        <!--    <div class = "title">
                <h3 style="color:#FF5733;">Rooms</h3>
            </div> 
<div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3 style="color:#FF5733;">Because your pet deserves the best</h3>
                         <img src = "../assets3/img//rooms_Acceuil.png" alt = "room image" width="900px" height="200px">
                        <p class="css2">When you leave your pet somewhere overnight, you want to be sure they’re well taken care of.pawpaws Resorts Luxury Pet Hotel are award-winning, internationally recognized pet care resorts that will make your pup feel right at home. All our trained and certified staff members are true animal lovers and will care for your pet as if they were our own.</p>
                        
                                    CHECK THE <li><a style="text-align: center;" class="css3" href = "roomspage.php">Rooms Page</a></li>
                    </div>
                    
                </div>
               
            </div>

</div>
</div>

-->
       <!-- <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h3 style="text-align: center;color:#FF5733;">CUSTOMORES</h3>
                </div>
                <div class = "customers-container">
                   
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
                  
                </div>
           </div>
        </section> -->
        <!-- end of body content -->
        <section>
        	<div class = "sec-width">
                <div class = "title">
                    <h3 style="text-align: center;color:#FF5733;">Paw Paws</h3>
                </div>
        </section>
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
              

                

               
                
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
    </body>
</html>