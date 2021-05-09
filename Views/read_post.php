<?php
include "../controller/BlogC.php";
include "../model/bloc.php";
$post=new post();
$id=$_GET["id"];
session_start();
$post=get_post_by_id($id);
$error="";
if (isset($_POST["message"]) && isset($_SESSION )&& !empty($_SESSION["e"]))
{
  if (!empty($_POST["message"]))
  {$message=$_POST["message"];
  add_comment($id,$_SESSION["e"],$message,$_SESSION["Nom"]." ".$_SESSION["Prenom"]);}
  else $error="Le Commentaire est vide";
}
$role="no role";
$e=-1;
if (isset ($_SESSION["e"]) && isset ($_SESSION["role"]))
{
  $role=$_SESSION["role"];
  $e=$_SESSION["e"];
}
if (isset($_GET["idcomment"]))
{
  if (!empty($_GET["idcomment"]))
  {
    deletecomment($_GET["idcomment"]);
  }
}
if(isset($_POST['ajout_news'])) {
    if(!empty($_POST['titre_news']) && !empty($_POST['contenu_news'])) {
        $titre = $_POST['titre_news'];
        $genre = $_POST['genre'];
        $contenu = $_POST['contenu_news'];
        $img = $_POST['img'];
        $date = date('Y-m-d');
        $addNewsQuery = $bdd->prepare("INSERT INTO `news` VALUES ('', ?, ?, ?, ?, ?, ?)") or die(mysql_error());
        $addNewsQuery->execute(array($titre, $date, $contenu, $genre, $img, '1')) or die(mysql_error());
      
      } 
        
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <script src="../Assets/Controledesaisiejs/controle.js"></script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $post->nom ?></title>

  <!-- Bootstrap core CSS -->
  <link href="../Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../Assets/css/blog-post.css" rel="stylesheet">

</head>

<body>
  <br>
    <br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">PawPaws</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Acceuil.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="WatchBlogPost.php.">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
      
        <h1 class="mt-4"><?php echo $post->nom; ?></h1>

        <hr>
        <!-- Date/Time -->
        <p><?php echo $post->date; ?></p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src=<?php echo "../assets/img/blog/".$post->picture." width="."900"." height="."300"; ?>" alt=">
        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $post->text; ?></p>
        <hr> 
     <tr>
<td align="right" valign="top"><span style="font-weight:bold;">Note:</span>
</td>
<td align="left"> <div class="rating">
<a href="#5" title="Donner 5 étoiles">☆</a>
<a href="#4" title="Donner 4 étoiles">☆</a>
<a href="#3" title="Donner 3 étoiles">☆</a>
<a href="#2" title="Donner 2 étoiles">☆</a>
<a href="#1" title="Donner 1 étoile">☆</a>
</div> </td>
</tr>

        <!-- Comments Form -->
       
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
           <h6 class="card-header"><?php echo $error; ?></h6>
          <div class="card-body">
            <form NAME="f" action="" method="POST">
              <div class="form-group">
                <?php 

                if (isset($_SESSION["e"])&& !empty($_SESSION["e"]))
                {?>
                <textarea class="form-control" name="message" id="message" rows="3" onkeyup="EnableDisable(this)"></textarea>
                

              </div>
            
              <button type="submit" name="submit" id="submit" class="btn btn-primary" disabled>Submit</button>
              <?php } else {?>
              <a type="button" class="btn btn-primary" href="signin.php">Login</a>
              <a type="button" class="btn btn-primary" href="signup.php">Register</a>
            </form>

          </div>
        </div>
        <br>
         <?php }afficher_comments($id,$e,$role); ?>



          </div>
        </div>

      </div>

      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../Assets/vendor/jquery/jquery.min.js"></script>
  <script src="../Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>












