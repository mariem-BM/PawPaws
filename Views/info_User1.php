<?php
//session_start();
require_once "../controller/UserC.php";
session_start();
//$x=Get_one_User_Info($_SESSION["e"]);
?>



<!doctype html>
<html class="no-js" lang="zxx">

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
   <h2>Profil Information</h2>
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

   <li><a href = "form.php">Shop</a></li>

    <li><a href = "chatAdmin.php">Chat</a></li>

   <li><a href = "FormComplaint.php">Reclamation</a></li>

    <li><a href = "roomspage.php">Rooms</a></li>


    <?php 
  if (isset($_SESSION["role"]) && $_SESSION["role"]=="hotelmanager")
    {

   echo " <li class='sub-menu'>
                      <a href='javascript:;'' >
                          <i class='fa fa-book'></i>
                              <span>Hotels</span>
                      </a>
                      <ul class='sub'>
                          <li ><a  href='Reservation_Gestion.php'>G??rer Les Reservations</a></li>
                          <li><a  href='Ajouter_Room.php'>Ajouter Une Chambre</a></li>
                          <li><a  href='Room_Gestion.php'>G??rer Les Chambres</a></li>
                          <li><a  href='sendemail'>Send Email</a></li>
                          <li><a  href='create-dynamic-pdf-send-as-attachment-with-email-in-php-demo'>Reservations Details</a></li>
                      </ul>
                  </li><a>Hotel Manager</a>";

}
  if (isset($_SESSION["role"]) && $_SESSION["role"]=="ServiceProvider")
    {

  echo " <li class='sub-menu'>
                      <a href='javascript:;'' >
                          <i class='fa fa-book'></i>
                          <span>Sevices</span>
                      </a>
                      <ul class='sub'>
                          <li ><a  href='ReservationS_Gestion.php'>G??rer Les Reservations</a></li>
                          <li><a  href='Ajouter_Service.php'>Ajouter Une Sevice</a></li>
                          <li><a  href='Services_Gestion.php'>G??rer Les Sevices</a></li>
                          <li><a  href='create-dynamic-pdf-send'>rendez-vous Details</a></li>
                      </ul>
                  </li><a>Service Provider</a>";

}
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

<?php 
            //    $Nom=$_GET['Nom'];
              //  $result=Get_one_User_Info($Nom);
?>
                  


                  <?php
                  $iddd=$_GET['id'];
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur where id=$iddd";
  $query=$db->prepare($sql);
  $query->execute();
  $result =$query->fetchall() ;
  ?>
                          <?php 
                             foreach($result as $row) {
                          ?>       


<div class="profil">
  <div class="container">
     <div class="main">
       <div class="row">

          <div class="col-md-4 mt-1"> 
             <div class="card text center sidebar">
               <div class="card-body">
                  <img src="../assets3/img/profil.jpg" class="rounded-circle" width="150">
                  <div class="mt-3">
                  
                      <h3> <?php echo $row["Nom"] ?> <?php echo $row["Prenom"] ?> </h3>
                  </div>
               </div>
             </div>
          </div>

          <div class="col-md-8 mt-1">
             <div class="card mb-3 content">
                <h1 class="m-3 pt-3"> About </h1>
                <div class="card-body">
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Nom </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                        <h5> <?php echo $row["Nom"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Prenom </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $row["Prenom"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3"> 
                         <h5> Email </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $row["Email"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Date de naissance </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $row["Date_N"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> sexe</h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $row["sexe"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Role </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                          <h5> <?php echo $row["Role"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <?php
                                                    $test='<a class="apt-btn add_comm" href="../Views/profil/index.php?id='.$row['id'].'">add comment</a>';
echo $test;
                                                    ?>
                </div>
             </div>
          </div> 
       </div>
     </div>
  </div>
</div>

<?php
		}
		?>

       <footer class = "footer">
            <div class = "footer-container">
              

                              
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
</body>

</html>