<?php
include "../config.php";
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

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets3/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets3/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../assets3/css/style.css" rel="stylesheet">
    <link href="../../assets3/css/style-responsive.css" rel="stylesheet">

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
            <a href="../Acceuil.php" class="logo"><b>PawPaws</b></a>
            <!--logo end-->
             <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../../disconnect.php">Logout</a></li>
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
                          <li ><a  href="Gerer_utilisateurs.php">Liste des utilisateurs</a></l>
                         
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
                          <li><a  href="sendemail">Send Email</a></li>
                          <li><a  href="create-dynamic-pdf-send">Rendez-vous Details</a></li>
                      </ul>
                  </li>

                      <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-book"></i>
                          <span>Rooms</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="Reservation_Gestion.php">Gérer Les Reservations</a></li>
                          <li><a  href="Ajouter_Room.php">Ajouter Une Chambre</a></li>
                          <li><a  href="Room_Gestion.php">Gérer Les Chambres</a></li>
                          <li><a  href="sendemail">Send Email</a></li>
                          <li><a  href="create-dynamic-pdf-send-as-attachment-with-email-in-php-demo">Reservation Details</a></li>
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
<div class="container">
<h1 class="text-center">Sending Emails</h1>

<hr>
	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'paw paws');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}*/
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			//$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body</div>';
      $mail->Body    = $_POST['message'];
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo '                                             Message could not be sent.';
			    echo '                                         Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo '                                                       Message has been sent';
			}
		}
	 ?>
	<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-sm-9 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Test Mail" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4">Test mail using PHPMailer</textarea>
                </div>
            </div>
           <!-- <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>-->
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>
</div>
 <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../assets3/js/jquery.js"></script>
    <script src="../../assets3/js/bootstrap.min.js"></script>
    <script src="../../assets3/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../../assets3/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../../assets3/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../assets3/js/jquery.scrollTo.min.js"></script>
    <script src="../../assets3/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../../assets3/js/common-scripts.js"></script>

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
else   echo("<script>location.href = '../signin.php';</script>");
?>