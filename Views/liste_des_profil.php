<?php 
            require_once '../controller/UserC.php';
session_start();

            $UserC =  new UserC();
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
   <h2>Liste des profils</h2>
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

          <!--main content start-->
          <section id="main-content">
          <section class="wrapper site-min-height">
            <!-- include user info -->
            <table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Nom</th>
													<th>Prenom</th>
													<th>Email</th>
													<th>date de naissance</th>
                                                    <th>Login</th>
													<th>Sexe</th>
													<th>Role</th>
                                                    													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur where role !='admin'";
  $query=$db->prepare($sql);
  $query->execute();
  $result =$query->fetchall() ;
  ?>
												<?php 
												foreach($result as $row) {
													?>
												<tr>
													<td>
														<h2 class="table-avatar">
														<?php $test='<a href="info_User1.php?id='.$row['id'].'">'.$row['Nom'].'</a>' ;
                                                        echo $test;
                                                        ?>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['Role'];?></td>
                                                   
											
												
													<td>
                        <?php
                                                    //$test='<a class="apt-btn add_comm" href="../view/profil/index.php?id='.$row['id'].'">add comment</a>';
//echo $test;
                                                    ?>
					</td>
                                   
												</tr>
                                                
												<?php
												}
												?>
											</tbody>
										</table>
              </div>
            </div>

            <!-- recherche par nom et prenom -->
        <section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">  
                                 
                        <label>Search User: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'nom' placeholder="Nom">  
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'prenom' placeholder="Prenom">  
                    </div>
                </div>
                <div class="row">
                     <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	    </section>
        
        <?php
		if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['search'])){
			$result = $UserC->getUserByNom_Prenom($_POST['nom'],$_POST['prenom']);
			if ($result !== false) {
	    ?>
        <table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Nom</th>
													<th>Prenom</th>
													<th>Email</th>
													<th>date de naissance</th>
                                                    <th>Login</th>
													<th>Sexe</th>
													<th>Role</th>
                                                    
													
												</tr>
											</thead>
											<tbody>
        											<td>
													<h2 class="table-avatar">
                                                    <?php $test='<a href="info_User1.php?id='.$result['id'].'">'.$result['Nom'].'</a>' ;
                                                        echo $test;
                                                    ?>
													</h2>
													</td>
													<td><?php echo $result['Prenom'];?></td>
													<td><?php echo $result['Email'];?></td>
                                                    <td><?php echo $result['Date_N'];?></td>
													<td><?php echo $result['Login'];?></td>
													
													<td><?php echo $result['sexe'];?></td>
                                                    <td><?php echo $result['Role'];?></td>
													
													<td>
                        <?php
                                                    //$test='<a class="apt-btn add_comm" href="../view/profil/index.php?id='.$row['id'].'">add comment</a>';
//echo $test;
                                                    ?>
					</td>
                                        </tbody>
			</table>
        <?php
		}
		else {

			echo "<div> No results found ! </div>";
		}
	    }
	    ?>
        <br>
        
                <!-- tri par nom -->
                <form method="POST" action="">
        <div class="sort">
          <input type = "submit" value = "Sort by nom" name ="sort_n">
          <input type = "submit" value = "Sort by prenom" name ="sort_p">
          <input type = "submit" value = "Sort by email" name ="sort_a">
        </div>
        </form>
        <?php
        if (isset($_POST['sort_n']))
        {
        ?>
        <table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Nom</th>
													<th>Prenom</th>
													<th>Email</th>
													<th>date de naissance</th>
                                                    <th>Login</th>
													<th>Sexe</th>
													<th>Role</th>
                                                    													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur where role!='admin' ORDER BY NOM ASC";
  $query=$db->prepare($sql);
  $query->execute();
  $result =$query->fetchall() ;
  ?>
												<?php 
												foreach($result as $row) {
													?>
												<tr>
													<td>
														<h2 class="table-avatar">
                                                        <?php $test='<a href="info_User1.php?id='.$row['id'].'">'.$row['Nom'].'</a>' ;
                                                        echo $test;
                                                        ?>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['Role'];?></td>
													
											
													<td>
                        <?php
                                                    //$test='<a class="apt-btn add_comm" href="../view/profil/index.php?id='.$row['id'].'">add comment</a>';
//echo $test;
                                                    ?>
					</td>
                                   
												</tr>
												<?php
												}
												?>
											</tbody>
										</table>
    <?php
    }
        else if (isset($_POST['sort_p']))
        {
        ?>
        <table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Nom</th>
													<th>Prenom</th>
													<th>Email</th>
													<th>date de naissance</th>
                                                    <th>Login</th>
													<th>Sexe</th>
													<th>Role</th>
                                                    
													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur where role!='admin' ORDER BY PRENOM ASC";
  $query=$db->prepare($sql);
  $query->execute();
  $result =$query->fetchall() ;
  ?>
												<?php 
												foreach($result as $row) {
													?>
												<tr>
													<td>
														<h2 class="table-avatar">
                                                        <?php $test='<a href="info_User1.php?id='.$row['id'].'">'.$row['Nom'].'</a>' ;
                                                        echo $test;
                                                        ?>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['Role'];?></td>
													

													<td>
                        <?php
                                                    //$test='<a class="apt-btn add_comm" href="../view/profil/index.php?id='.$row['id'].'">add comment</a>';
//echo $test;
                                                    ?>
					</td>
                                   
												</tr>
												<?php
												}
												?>
											</tbody>
										</table>
    <?php
    }
    else if (isset($_POST['sort_a']))
    {
    ?>
    <table class="datatable table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>date de naissance</th>
                                                <th>Login</th>
                                                <th>Sexe</th>
                                                <th>Role</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

<?php
$db = config::getConnexion();
                                        $sql = "SELECT * FROM utilisateur where role!='admin' ORDER BY EMAIL ASC";
$query=$db->prepare($sql);
$query->execute();
$result =$query->fetchall() ;
?>
                                            <?php 
                                            foreach($result as $row) {
                                                ?>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                    <?php $test='<a href="info_User1.php?id='.$row['id'].'">'.$row['Nom'].'</a>' ;
                                                        echo $test;
                                                        ?>
                                                    </h2>
                                                </td>
                                                <td><?php echo $row['Prenom'];?></td>
                                                <td><?php echo $row['Email'];?></td>
                                                <td><?php echo $row['Date_N'];?></td>
                                                <td><?php echo $row['Login'];?></td>
                                                
                                                <td><?php echo $row['sexe'];?></td>
                                                <td><?php echo $row['Role'];?></td>
                                                
                                            
                                                <td>
                        <?php
                                                    //$test='<a class="apt-btn add_comm" href="../view/profil/index.php?id='.$row['id'].'">add comment</a>';
//echo $test;
                                                    ?>
					</td>
                               
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
<?php
}
?>
   <br>
   <br>

       <footer class = "footer">
            <div class = "footer-container">
              

                

               
                
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="../assets3/js/script.js"></script>
</body>

</html>