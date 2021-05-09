<?php 
session_start();
  if (!isset($_SESSION['id'])) {
    header('Location: login.php');
  }
 ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="wrapper">
    <form class="form" method ="post" action="connexion.php">
      <div class="pageTitle title">FEEDBACK </div>
      <div class="secondaryTitle title">Please fill this form to reclam.</div>
      <input type="text" class="name formEntry" name="nom"  id="nom"placeholder="name" />
	    <input type="text" class="last name formEntry"name="prenom" id="prenom" placeholder="last name" />
      <input type="text" class="email formEntry" name="email" id="email" placeholder="Email"/>
<!-- 	  <input type="number" class="id formEntry"  name="id"  id="id"placeholder="id"/>
 -->      <textarea class="message formEntry"  name="message"id="message" placeholder="Message"></textarea>
<!--       <input type="checkbox" class="termsConditions" value="Term">
 --><!--       <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & <span style="color: #0e3721">Privacy Policy</span>.</label><br>
 -->      <button class="submit formEntry" onclick="thanks()">Submit</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>