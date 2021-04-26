<?PHP
	include "../../Controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Liste des Utilisateurs </title>
    </head>
    <body>
		<button><a href="../front/signup.php">Ajouter un Utilisateur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom_Prenom</th>
				<th>Image</th>
				<th>Email</th>
				<th>Tel</th>
				<th>Date de naissance</th>
				<th>Type</th>
				<th>Sexe</th>
				<th>Login</th>
				<th>Password</th>
				<th>supprimer</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom_prenom']; ?></td>
					<td><?PHP echo $user['image']; ?></td>
					<td><?PHP echo $user['email']; ?></td>
					<td><?PHP echo $user['tel']; ?></td>
					<td><?PHP echo $user['date_n']; ?></td>
					<td><?PHP echo $user['type']; ?></td>
					<td><?PHP echo $user['sexe']; ?></td>
					<td><?PHP echo $user['login']; ?></td>
					<td><?PHP echo $user['password']; ?></td>
					<td>
						<form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> 
                                                name="id">
						</form>
					</td>
				</tr>
			<?PHP
				}       // sakart beha l foreach
			?>
		</table>
	</body>
</html>