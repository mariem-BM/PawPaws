<?php 
include "../Controller/RatingsC.php";
session_start();
  if (!isset($_SESSION['e'])) {
    header('Location: signin.php');
  }
  if (isset($_POST["id"]) && isset($_POST["message"]) && isset($_POST["type"]) && isset($_POST["titre"]))
  {
    echo "Posted Successfully";
    Creation_Comp ($_POST["titre"],$_POST["message"],$_POST["type"],$_POST["id"],$_SESSION["Nom"]." ".$_SESSION["Prenom"]);
  }
 ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../Assets/AssetsComplaint/style.css">

</head>

<body>
  <div class="wrapper">
    <form class="form" method ="POST" action="FormComplaint.php">
      <div class="pageTitle title">FEEDBACK </div>
    

      
      <input name="id" value="<?php echo $_SESSION["e"];?>" hidden>
      <input name="titre" type="text" class="name formEntry">
      <select type="select" name="type" class="select formEntry" >     

    <option  value="Animals">Animals</option>
    <option  value="Services">Services</option>
    <option  value="Reservation">Reservation</option>
    <option  value="Produits">Products</option>
         </select>
      <textarea class="message formEntry"  name="message" placeholder="Message"></textarea>

    <button class="submit formEntry" type="submit" name="submit">Submit</button>
    </form>
  </div>
  <script src="../Assets/AssetsComplaint/script.js"></script>
</body>

</html>