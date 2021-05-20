<?php
require "../controller/BlogC.php";
require "../model/bloc.php";


    if (isset($_POST['name']) && isset($_POST['post']) && isset(($_FILES["image"]))) {
        if (!empty($_POST["name"]) && !empty($_POST["post"]) && !empty(basename($_FILES["image"]["name"])))
        {echo "rerere";
        include "../file_upload.php";
        $post =  new post();
        $post->nom = $_POST["name"];
        $post->text = $_POST["post"];
        $post->picture = basename($_FILES["image"]["name"]);
        echo $post->picture; 
        addReveiw($post);}
        if (empty($_POST["name"]))
            echo 'inserer un titre';
        if (empty($_POST["post"]))
            echo 'inserer un texte';
        if (empty(basename($_FILES["image"]["name"])))
            echo "pas d'image";
        /*sendmail ();*/

    


}

?>
<!DOCTYPE html>
<html>
<script src="../Assets3/Controledesaisiejs/Control_Blog.js"></script>
    <head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets3/css/blog-home.css" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>Inscription</title>
        <script src="script.js"></script>
    </head>
<body>
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
            <a class="nav-link" href="DashboardUser.php">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new 1.html">Rate Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<h1>Post</h1>    
    <form NAME="f" action="blank.php" method="POST" enctype="multipart/form-data" >
    <table border="1" width="80%">
        <tr>
            <th align="left" rowspan ="8">
            </th>
            <th align="left">
                <label for="name">Title:
        </label>
            </th>
            <th align="left">
        <input type="text" id="name" name="name" maxlength="25" size="20" placeholder="Titre" required onkeyup="EnableDisable(this)">
            </th>
        </tr>
        <tr>
            <th align="left">
                <label for="comment">Text:
        </label>
            </th>
            <th align="left">
        <textarea name="post" id="post" cols="30" rows="5" maxlength="200" onkeyup="EnableDisable(this)">
                </textarea>
            </th>
        </tr>
          <tr>
            <th align="left">
            </th>
        </tr>
          <tr>
            <th align="left">
                <label for="name" >Picture:
        </label>
            </th>
            <th align="left">
        <input type="file"  name="image" id="image"  required onkeyup="EnableDisable(this)">
            </th>
        </tr>
                    
        <tr>
            <th align="left">
            </th>
            <th align="left">
                <button type="submit" name="submit" id="submit" class="btn btn-success" disabled>Envoyer</button>
            </th>
        </tr>
    </table>
</form>
    
    </body>
    
</html>    
    