<?php
session_start();

    include "../controller/UserC.php";
    include_once '../model/User.php';

	$utilisateurC = new UserC();
	$error = "";

	if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["Date_N"]) && 
        isset($_POST["email"]) && 
        isset($_POST["role"]) &&
        isset($_POST["sexe"]) &&
        isset($_POST["login"]) && 
        isset($_POST["password"])
    ){
       
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["Date_N"]) &&
            !empty($_POST["email"]) && 
            !empty($_POST["role"]) && 
            !empty($_POST["sexe"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["password"])
        ) { 
            $user = new User(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['sexe'],
                $_POST['email'],
                $_POST['Date_N'],
                $_POST['role'],
                $_POST['login'],
                $_POST['password']
            );
            
            $utilisateurC->modifierUtilisateur($user, $_SESSION['e']);
            //header('Location:afficherUtilisateurs.php');
           
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
        
			if (isset($_SESSION['e'])){
				$user = $utilisateurC->recupererUtilisateur($_SESSION['e']);
				
		?>
		<form action="modifierUser.php" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user['Nom']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user['Prenom'];?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="txt" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo  $user['Email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" value = "<?php echo $user['Login']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="password" id="password" value = "<?php echo $user['Password']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="role">role:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="role" id="role" value = "<?php echo  $user['role']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_N">date:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Date_N" id="Date_N" value = "<?php echo $user['Date_N']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexe">gender:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="sexe" id="sexe" value = "<?php echo $user['sexe']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>