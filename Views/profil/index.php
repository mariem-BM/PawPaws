
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Coment </title>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <?php
                                
                include "../../Views/profil/send_msg.php";              
                  
                $idd=$_GET['id'];
                
$db = config::getConnexion();
											$sql = "SELECT * FROM utilisateur where id=$idd";
  $query=$db->prepare($sql);
  $query->execute();
  $result =$query->fetchall() ;
  ?>
												<?php 
												foreach($result as $row) {
													?>
                                                    <div class="col-md-8 ">
              <div class="card mb-3" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Reciever</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Nom'];?>

                    <?php echo $row['Prenom'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">date of birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Date_N'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['sexe'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Role'];?>
                    </div>
                  </div>
                </div>
              </div>
												
												<?php
												}
												?>
                        
                        
                        <?php
                                $sql = "SELECT * FROM comentu inner join utilisateur on comentu.id_sender=utilisateur.id where comentu.id_reciever=$idd";
                        $query=$db->prepare($sql);
                        $query->execute();
                        $result1 =$query->fetchall() ;
                        ?>
                        <h6 class="text-light bg-dark">Coments</h6> 
  
												<?php 
												foreach($result1 as $row1) {
													?>
                                        <div class="card mb-3" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Sender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row1['Nom'];?>

                    <?php echo $row1['Prenom'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">Coment</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row1['message'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="text-light bg-dark">date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row1['date_com'];?>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
              <?php
												}
												?>

            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                       <!-- <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" role="form">-->
                       <form action="send_msg.php?id=<?php echo $idd;?>" method="post" role="form" >
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <input type="text" class="form-control" name="message" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></input>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                           <!-- <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>-->
                           <div class="text-center"><button type="submit" class="btn btn-info">SEND</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
