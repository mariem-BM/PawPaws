<?php
session_start();
if (isset($_SESSION["e"])&& isset($_SESSION["role"]))
{
  if ($_SESSION["role"]=="admin" || $_SESSION["role"]=="hotelmanager" || $_SESSION["role"]=="client"  )
  {
    include '../controller/reservationC.php';

/*$reservationsC= new reservationsC();

$liste=$reservationsC->afficherReservation();


$tri='';
if (isset($_GET["tri"]))
    $tri=$_GET["tri"];


$listereservation=$reservationsC->afficherActivites($tri);*/
$search="";
$reservationsC= new reservationsC();
if(isset($_POST['valueToSearch']))
{   
    $search=$_POST['valueToSearch'];
        
}
$liste=$reservationsC->searchreservation($search);
if(isset($_POST['tri']))
{
if($_POST['tri']=="defaut")
{
    $tri=0;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="date asc")
{
    $tri=1;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="roomtype asc")
{
    $tri=2;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="date desc")
{
    $tri=3;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="roomtype desc")
{
    $tri=4;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="Nights asc")
{
    $tri=5;
    $liste=$reservationsC->trireservation($tri);
}
else if($_POST['tri']=="Nights desc")
{
    $tri=6;
    $liste=$reservationsC->trireservation($tri);
}

}


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
            <a href="acceuil.php" class="logo"><b>PAWPAWS</b></a>
            <!--logo end-->
             <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="Acceuil.php">Logout</a></li>
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
              
              	  <p class="centered"><a href="profile.html"><img src="../assets/img/<?php echo $_SESSION["Picture"];?>" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION["Nom"]." ".$_SESSION["Prenom"]; ?></h5>
                  <h6 class="centered"><?php echo $_SESSION["role"]?></h6>
              	  	
                  <li class="mt">
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
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-book"></i>
                          <span>Services</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="ReservationS_Gestion.php">Gérer Les Reservations</a></li>
                          <li><a  href="Ajouter_Service.php">Ajouter Un Service</a></li>
                          <li><a  href="Services_Gestion.php">Gérer Les Services</a></li>
                          <li><a  href="create-dynamic-pdf-send">Rendez-vous Details</a></li>
                      </ul>
                  </li>
                                    <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-book"></i>
                          <span>Rooms</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="Reservation_Gestion.php">Gérer Les Reservations</a></li>
                          <li><a  href="Ajouter_Room.php">Ajouter Une Chambre</a></li>
                          <li><a  href="Room_Gestion.php">Gérer Les Chambres</a></li>
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> show reservation name </title>
</head>
<body>
<!--<a class="btn btn-info" href="searchreservation.php"> <i class="glyphicon glyphicon-plus" > </i> &nbsp;Search reservation</a>
<a href="showreservations.php?tri=P"> Alphabetique A-Z</a>
<a href="showreservations.php?tri=ZA"> Alphabetique Z-A</a>
<a href="showreservations.php?tri=DA"> Date↓</a>
<a href="showreservations.php?tri=DS"> Date↑</a>-->
    <div  align="center" class="container-fluid">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<form class="contact__form" method="post" action="">
    <div align="center"  class="control-group form-group">   
<input type="text" name="tri" list="tri" >
    <datalist id="tri">
      <option value="defaut">
        <option value="date asc">
      <option value="roomtype asc">
      
        <option value="date desc">
        <option value="roomtype desc">
      <option value="Nights asc">
        <option value="nights desc">
      <div class="col-12 mt-4">

    </div>
    </datalist>
            <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Trier">
    </div>
    </form>
    <form align="center" action="" method="post">
    <input type="text" name="valueToSearch", placeholder="Reservations to search">
    <input type="submit" name="search" value="search"><br><br>
</form>
<hr>
<!--<div class="container">-->
    <style>
    @media print{
        body * { 
        visibility: visible; 
    }
    .print-container, .print-container * {
        visibility: visible;
    }
    .dontPrint * {
        visibility: hidden;
    }
}

</style>
  <!--  <button onclick="window.print();" class="dontPrint" >Print</button>-->

    <div class="row print-container"></div>
    <div >
        <table class="table table-striped custab">
            <thead>
    <tr>
        <th>Idreservation</th>
         <th>user</th>
       <th>Pets</th>
       <!-- <th>Lastname </th>-->
        <th>Adress</th>
        <th>Phone</th>
        <th>Check In</th>
        <th>Email</th>
        <th>Hotel Adress</th>
        <th>Nights</th>
        <th>Nbre Room</th>
        <th>Special Requirments</th>
        <th>Roomtype<th>
        <th>Hotel adress<th>
        <!-- <th>user</th>-->
        <th>delete</th>
        <th>update</th>
        <th>Genrate PDF</th>
        
    </tr>
            </thead>
    <?PHP
    foreach($liste as $reservationh){ //echo reservation 9dima//
        ?>
        <tr>

            <td><?PHP echo $reservationh['idreservation']; ?></td>
             <td><?PHP echo $reservationh['Nom']; ?>&nbsp;<?PHP echo $reservationh['Prenom'];?></td>
            <td><?PHP echo $reservationh['firstname']; ?></td>
           <!-- <td><?PHP //echo $reservation//['lastname']; ?></td>-->
            <td><?PHP echo $reservationh['adresse']; ?></td>
            <td><?PHP echo $reservationh['tel']; ?></td>
            <td><?PHP echo $reservationh['date']; ?></td>
            <td><?PHP echo $reservationh['email']; ?></td>
            <td><?PHP echo $reservationh['hoteladresse']; ?></td>
            <td><?PHP echo $reservationh['nbn']; ?></td>
            <td><?PHP echo $reservationh['room']; ?></td>
            <td><?PHP echo $reservationh['rp']; ?></td>

            <td><?PHP echo $reservationh['roomtype']; ?></td>
            <td><?PHP echo $reservationh['hoteladresse']; ?></td>

         <!--   <td><?PHP// echo $reservationh['Nom']; ?>&nbsp;<?PHP //echo $reservationh//['Prenom'];?></td>-->
<div class="dontPrint">
            <td>
                <form method="POST" action="deletereservation.php">
                    <input type="submit"  class=" btn btn-danger" name="supprimer" value="Delete">
                    <input type="hidden" value=<?PHP echo $reservationh['idreservation'] ; // ba3thna id  champs hiddden bch na9rawh fi page spperimer ?> name="idreservation">
                    <input type="hidden" value=<?PHP echo $reservationh['idroom'] ; ?> name="idroom">

                </form>
            </td>
            <td>

                <a type="button" class="btn btn-primary shop-item-button" href = "updatereservation.php?idreservation=<?= $reservationh['idreservation']?>">Update</a>
            </td>

           

<!--<input type="button" value="Print & Do New Transaction" class="dontPrint" id="payout_print"  onclick="window.print();window.location.href='transaction/admin/new_transaction'">-->

               <!-- <a type="button" class=" btn btn-danger" href = "print.php?idreservation=<?= $reservation//['idreservation']?>" onClick="window.print()">Print Attestaion</a>-->

                <td>

<a type="button" class="btn btn-primary shop-item-button" href = "print.php?idreservation=<?= $reservationh['idreservation']?>">Generate PDF</a>
            </td>



<!--<td>-->
<!--<button onclick="window.print();" style="background-color:#4682B4" style="text:white">Print</button>-->
<!--<a type="button" class=" btn btn-danger" href = "print.php?idreservation=<?= $reservation//['idreservation']?>" onClick="window.print()">Print</a>
            </td>-->
<!--<td>
<button onClick="window.print();" class="dontPrint" >Print</button>
            </td>-->
            </div>
        </tr>
        <?PHP



    }

    ?>
</table>
<table>
<td>
    <a type="button" class="btn btn-primary shop-item-button" href = "create-dynamic-pdf-send-as-attachment-with-email-in-php-demo?idreservation=<?= $reservationh['idreservation']?>">send/print all informations</a>
            
</td>
</table>
    </div>
</div>
<style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 1% 0;
        width:100%
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;

    }
    .dontPrint{
        visibility: hidden;
    }


</style>
</body>
</html>
          		</div>
          	</div>
			
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
<?php }
else echo "Access denied to non admins";
}
else   echo("<script>location.href = 'signin.php';</script>");
?>