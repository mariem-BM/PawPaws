<?php
require_once "../controller/UserC.php";

$x=Get_one_User_Info($_SESSION["e"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Info</title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="../assets3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets3/css/style2.css">  <!-- taille- color -->
    </head>
<body>
  <?php foreach($x as $user)
  { ?>


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

<div class="profil">
  <div class="container">
     <div class="main">
       <div class="row">

          <div class="col-md-4 mt-1"> 
             <div class="card text center sidebar">
               <div class="card-body">
                  <img src="../assets3/img/profil.jpg" class="rounded-circle" width="150">
                  <div class="mt-3">
                      <h3> <?php echo $user["Nom"] ?> <?php echo $user["Prenom"] ?> </h3>
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
                        <h5> <?php echo $user["Nom"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Prenom </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $user["Prenom"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3"> 
                         <h5> Email </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $user["Email"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Date de naissance </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $user["Date_N"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> sexe</h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                         <h5> <?php echo $user["sexe"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-3">
                         <h5> Role </h5>
                      </div>
                      <div class="col-md-9 text-secondary">
                          <h5> <?php echo $user["Role"] ?> </h5>
                      </div>
                   </div>
                   <hr>
                </div>
             </div>
          </div> 
       </div>
     </div>
  </div>
</div>

  <?php } ?>

</body>
</html>