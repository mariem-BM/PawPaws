<?php
session_start();
include_once '../../model/ComentU.php'; 
include_once '../../controller/ComentUC.php';
//include '../../view/profil/index.php';


                    $error = "";
                  
                   // create user
                   $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
                   $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
                    $Coment = null;
                    $idd=$_GET['id'];
                    $ComentC = new ComentC();
                    if(isset($_POST["message"]))    {
                       if(!empty($_POST["message"])){
                        $Coment = new Comment(
                            $_SESSION['e'],
                            $_GET['id'],
                            $_POST['message'],
                            $current_timestamp
                        );
                        $ComentC->ajouterComent($Coment);
                        header('Location:index.php?id=' .$idd.'');
                    }
                       
                       else {
                           $test='<script> alert("message not found");</script> ';
                           echo $test;
                       } 
                    }   
                    // create an instance of the controller
                   
                   
                           
                    
                    ?>