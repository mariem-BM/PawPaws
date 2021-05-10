<?php
//session_start();
require_once "../controller/UserC.php";

//$x=Get_one_User_Info($_SESSION["e"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Info</title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="../assets3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets3/css/style2.css">  <!-- taille- color -->
        <!-- <link rel="stylesheet" href="../css/profile.css"> -->  
    </head>
<body>

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






  <!--
  <h1>Nom : <?php //echo $user["Nom"] ?> </h2>
  <br>
  <h5>Prénom : <?php //echo $user["Prenom"] ?> </h2>
  <br>
  <h5>Email : <?php //echo $user["Email"] ?> </h2>
  <br>
  <h5>Date de naissance : <?php //echo $user["Date_N"] ?> </h2>
  <br>
  <h5>Sexe : <?php //echo $user["sexe"] ?> </h2>
  <br>
  <h5>Role : <?php //echo $user["role"] ?> </h2>
  <br>
  -->
  <?php } ?>

  <!-- ajout coment -->
<!--
  <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="nom" name="nom" placeholder="Nom">
			<br>
			<textarea name="message" cols="110" rows="5" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_coment">Post Comment</button>
		</form>
	</div>
	<div class="content">
-->
</body>
</html>