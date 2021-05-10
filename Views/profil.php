
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
                          <li ><a  href='Reservation_Gestion.php'>Gérer Les Reservations</a></li>
                          <li><a  href='Ajouter_Room.php'>Ajouter Une Chambre</a></li>
                          <li><a  href='Room_Gestion.php'>Gérer Les Chambres</a></li>
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
                          <li ><a  href='ReservationS_Gestion.php'>Gérer Les Reservations</a></li>
                          <li><a  href='Ajouter_Service.php'>Ajouter Une Sevice</a></li>
                          <li><a  href='Services_Gestion.php'>Gérer Les Sevices</a></li>
                          <li><a  href='create-dynamic-pdf-send'>rendez-vous Details</a></li>
                      </ul>
                  </li><a>Service Provider</a>";

}
if (isset($_SESSION["role"]) && $_SESSION["role"]=="admin")
    {

  echo "<li><a href = 'DashboardAdmin.php'>Admin Space</a></li>";
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

<div class="profil">
  <div class="container">
     <div class="main">
       <div class="row">
          <div class="col-md-4 mt-1"> 
             <div class="card text center sidebar">
               <div class="card-body">
                  <img src="../assets3/img/profil.jpg" class="rounded-circle" width="150">
               </div>
             </div>
          </div>
          <?php
        
			if (isset($_SESSION['e'])){
				$user = $utilisateurC->recupererUtilisateur($_SESSION['e']);
				
		?>
        <div class="mt-3">
        <h3> <?php echo $user["Nom"] ?> <?php echo $user["Prenom"] ?> </h3>
        </div>
          <div class="col-md-8 mt-1">
		  <form class="form-sample" action="" method="POST">
         
                      <p class="card-description">Informations personnelles</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nom</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nom" value='<?php echo $user['Nom']; ?>'  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prenom </label>
                            <div class="col-sm-9">
                               <input type="text" name="prenom" class="form-control" value='<?php echo $user['Prenom'];?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date de naissance</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="Date_N" value='<?php echo $user['Date_N']; ?>'  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">role</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="role" value='<?php echo  $user['Role']; ?>' />
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
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">gender</label>
                            <div class="col-sm-9">
                              <input type="text" name="sexe" class="form-control" value='<?php echo $user['sexe']; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Login</label>
                            <div class="col-sm-9">
                              <input type="text" name="login" class="form-control" value='<?php echo $user['Login']; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password" class="form-control" value='<?php echo $user['Password']; ?>' />
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

       <footer class = "footer">
            <div class = "footer-container">
              

                

               
                
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
</body>

</html>