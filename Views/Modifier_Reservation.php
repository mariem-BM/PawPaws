<?php
session_start();
if (isset($_SESSION["e"])&& isset($_SESSION["role"]))
{
  if ($_SESSION["role"]=="admin")
  {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Gestion Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

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
            <a href="acceuil.php" class="logo"><b>PawPaws</b></a>
            <!--logo end-->
             <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
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
              
                   <p class="centered"><a href="profil.php"><img src="../assets3/img/Unknown.png" class="img-circle" width="60"></a></p>
                  
                  <h5 class="centered"><?php echo $_SESSION["Nom"]." ".$_SESSION["Prenom"]; ?></h5>
                  <h6 class="centered"><?php echo $_SESSION["role"]?></h6> 
                    
                  <li class="mt" class="active">
                      <a href="DashboardAdmin.php">
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
                          <li ><a  href="Gerer_utilisateurs.php">Liste des utilisateurs</a></li>
                         
                      </ul>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Sevices</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="ReservationS_Gestion.php">Gérer Les Reservations</a></li>
                        
                          <li><a  href="Ajouter_Service.php">Ajouter Une Sevice</a></li>
                          <li><a  href="Services_Gestion.php">Gérer Les Sevices</a></li>
                          <li><a  href="create-dynamic-pdf-send">Rendez-vous Details</a></li>
                      </ul>
                  </li>

                      <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-book"></i>
                          <span>Rooms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Reservation_Gestion.php">Gérer Les Reservations</a></li>
                          <li><a  href="Ajouter_Room.php">Ajouter Une Chambre</a></li>
                          <li><a  href="Room_Gestion.php">Gérer Les Chambres</a></li>
                          <li><a  href="create-dynamic-pdf-send-as-attachment-with-email-in-php-demo">Reservation Details</a></li>
                        
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Gestion Produit</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="back/gestion_produit.php">Gestion Produit</a></li>
                            <li ><a  href="back/gestion_promo.php">Gestion Promo</a></li>
                             
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
                          <span>FeedBack</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Complaints_Gestion.php">Gérer Les FeedBack</a></li>
                          <li ><a  href="chat.php">Chat Room</a></l>
                      </ul>
                  </li>
                   
                   <li><a  href="sendemail">Send Email</a></li>

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
          	<?php include_once 'updatereservation.php'; ?>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php }
else echo "Access denied to non admins";
}
else   echo("<script>location.href = 'signin.php';</script>");
?>