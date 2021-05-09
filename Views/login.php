<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../Core/UserCore.php";
        $UserC = new UserCore();
        $user = NULL;
        $user = $UserC->logIn($_POST['username'],$_POST['password']);
        if($user) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['matricule'];
            $_SESSION['role'] = $user['role'];
            if($_SESSION['role'] == 'Admin') {
                 header('Location: chatAdmin.php');
            }
            header('Location: afficherClients.php');
        }
        else {
            echo '<script type="text/javascript"> alert("username or password incorrect!"); </script>';
        }

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
    <form class="form" method ="post">
      <div class="pageTitle title">LOGIN </div>
      <div class="secondaryTitle title"></div>
      <input type="text" class="name formEntry" name="username"  id="username"placeholder="Username" />
	    <input type="password" class="last name formEntry"name="password" id="password" placeholder="Password" />
   <button class="submit formEntry">Submit</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>