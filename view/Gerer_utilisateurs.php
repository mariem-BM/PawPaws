<?php 
            require_once '../Controller/UserC.php';

            $UserC =  new UserC();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets3/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets3/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets3/css/style.css" rel="stylesheet">
    <link href="../assets3/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="acceuil.php" class="logo"><b>Paw Paws</b></a>
            <!--logo end-->
             <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="signin.php">Logout</a></li>
              </ul>
            </div>
                                
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <!-- <p class="centered"><a href="profile.html"><img src="../assets3/img/" class="img-circle" width="60"></a></p>
                  
                  <h5 class="centered"><?php //echo $_SESSION["Nom"]." ".$_SESSION["Prenom"]; ?></h5>
                  <h6 class="centered"><?php //echo $_SESSION["role"]?></h6> -->
                    
                  <li class="mt" class="active">
                      <a href="ADMIN.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Gérer les comptes</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Gerer_utilisateurs.php">Liste des utilisateurs</a></l>
                          <li ><a  href="validation.php">Validation</a></l>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="blank.php">Ajouter un Blog Post</a></li>
                          <li><a  href="Affichertoutposts.php">Afficher les Blog Posts</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Activité</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Act_gestion1.php">Gérer Les Activités</a></li>
                          <li><a  href="Act_Gestion.php">Gérer Les Réservations</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Rooms</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Rooms_Gestion.php">Gérer Room</a></li>
                          <li ><a  href="Res_room_Gestion.php">Gérer Les Réservations</a></li>
                      </ul>
                  </li>
            <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Sevices</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Reservation_Gestion.php">Gérer Les Reservations</a></li>
                          <li><a  href="Ajouter_Service.php">Ajouter Une Sevice</a></li>
                          <li><a  href="Services_Gestion.php">Gérer Les Sevices</a></li>
                      </ul>
                  </li>
                   

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
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
                                                    
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur";
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
															<a href="profil.php"><?php echo $row['Nom'];?></a>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['role'];?></td>
													
												
													<td>
						<form method="POST" action="supprimerutilisateur.php">
						<input type="submit" name="supprimer" value="delete">
						<input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
						</form>
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
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	    </section>
        <br>
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
                                                    
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
        											<td>
													<h2 class="table-avatar">
														<a href="profil.php"><?php echo $result['Nom'];?></a>
													</h2>
													</td>
													<td><?php echo $result['Prenom'];?></td>
													<td><?php echo $result['Email'];?></td>
                                                    <td><?php echo $result['Date_N'];?></td>
													<td><?php echo $result['Login'];?></td>
													
													<td><?php echo $result['sexe'];?></td>
                                                    <td><?php echo $result['role'];?></td>
													
													<td>
						<form method="POST" action="supprimerutilisateur.php">
						<input type="submit" name="supprimer" value="delete">
						<input type="hidden" value=<?PHP echo $result['id']; ?> name="id">
						</form>
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
                                                    
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur ORDER BY NOM ASC";
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
															<a href=""><?php echo $row['Nom'];?></a>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['role'];?></td>
													
											
													<td>
						<form method="POST" action="supprimerutilisateur.php">
						<input type="submit" name="supprimer" value="delete">
						<input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
						</form>
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
                                                    
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>

<?php
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur ORDER BY PRENOM ASC";
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
															<a href=""><?php echo $row['Nom'];?></a>
														</h2>
													</td>
													<td><?php echo $row['Prenom'];?></td>
													<td><?php echo $row['Email'];?></td>
                                                    <td><?php echo $row['Date_N'];?></td>
													<td><?php echo $row['Login'];?></td>
													
													<td><?php echo $row['sexe'];?></td>
                                                    <td><?php echo $row['role'];?></td>
													
												
													<td>
						<form method="POST" action="supprimerutilisateur.php">
						<input type="submit" name="supprimer" value="delete">
						<input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
						</form>
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
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

<?php
$db = config::getConnexion();
                                        $sql = "SELECT * FROM utilisateur ORDER BY EMAIL ASC";
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
                                                        <a href=""><?php echo $row['Nom'];?></a>
                                                    </h2>
                                                </td>
                                                <td><?php echo $row['Prenom'];?></td>
                                                <td><?php echo $row['Email'];?></td>
                                                <td><?php echo $row['Date_N'];?></td>
                                                <td><?php echo $row['Login'];?></td>
                                                
                                                <td><?php echo $row['sexe'];?></td>
                                                <td><?php echo $row['role'];?></td>
                                                
                                            
                                                <td>
                    <form method="POST" action="supprimerutilisateur.php">
                    <input type="submit" name="supprimer" value="delete">
                    <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                    </form>
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


        
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets3/js/jquery.js"></script>
    <script src="../assets3/js/bootstrap.min.js"></script>
    <script src="../assets3/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets3/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets3/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets3/js/jquery.scrollTo.min.js"></script>
    <script src="../assets3/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets3/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
