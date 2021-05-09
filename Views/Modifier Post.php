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

    <title>Modify Post</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets3/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets3/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets3/css/style.css" rel="stylesheet">
    <link href="../assets3/css/style-responsive.css" rel="stylesheet">

   
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
            <a href="Acceuil.php" class="logo"><b>PawPaws</b></a>
            <!--logo end-->
             <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../disconnect.php">Logout</a></li>
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
                          <span>Gérer Comptes</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Affichertoutusers.php">Gérer les Comptes</a></l>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="blank.php">Ajouter un Blog Post</a></li>
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
                          <li ><a  href="Act_Gestion.php">Gérer Les Réservations</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Services</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="Services_Gestion.php">Gérer Services</a></li>
                          <li ><a  href="Res_Serv_Gestion.php">Gérer Les Réservations</a></li>
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
          	<?php
require "../Controller/BlogC.php";
require "../model/bloc.php";
         if (isset($_POST['id']))
        {
        $id=$_POST['id'];
         $poste=afficheronepost($id);
    }

     if (isset($_POST['name']) && isset($_POST['post']) && isset(($_FILES["image"]))) {
        if (!empty($_POST["name"]) && !empty($_POST["post"]) && !empty(basename($_FILES["image"]["name"])))
        {echo "rerere";
        include "../file_upload.php";
        $post =  new post();
        $post->nom = $_POST["name"];
        $post->text = $_POST["post"];
        $post->picture = basename($_FILES["image"]["name"]);
        echo $post->picture; 
         update($post, $id);
       echo("<script>location.href = 'Affichertoutposts.php';</script>");
}
        if (empty($_POST["name"]))
            echo 'inserer un titre';
        if (empty($_POST["post"]))
            echo 'inserer un texte';
        if (empty(basename($_FILES["image"]["name"])))
            echo "pas d'image";
        /*sendmail ();*/
}
    foreach ($poste as $posted)
    {
       $posts=$posted;
    }  
?>
<h1>Post</h1>    
    <form NAME="f" action="Modifier Post.php" method="POST" enctype="multipart/form-data">
    <table border="1" width="50%">
        <tr>
            <th align="left" rowspan ="8">
            </th>
            <th align="left">
                <label for="name">Title:
        </label>
            </th>
            <th align="left">
        <input type="text" id="name" name="name" maxlength="25" size="20" value="<?php echo  $posts["Titre"]?>" required>
        <input value="<?php echo  $posts["id"]?>" name="id" hidden>
            </th>
        </tr>
        <tr>
            <th align="left">
                <label for="comment">Text:
        </label>
            </th>
            <th align="left">
        <textarea name="post" id="post" cols="30" rows="5"  value="<?php  echo $posts["Message"]?>" maxlength="200">
                <?php  echo $posts["Message"]?></textarea>
            </th>
        </tr>
          <tr>
            <th align="left">
            </th>
        </tr>
          <tr>
            <th align="left">
                <label for="name">Picture:
        </label>
            </th>
            <th align="left">
        <input type="file" id="image" name="image"  value="<?php  echo $posts["Picture"];?>" required>
            </th>
        </tr>
        <input value="<?php echo $id ?>" id="id1" name="id1" hidden>         
        <tr>
            <th align="left">
            </th>
            <th align="left">
                <button type="submit" name="submit">Envoyer</button>
            </th>
        </tr>
    </table>
</form>
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