<?PHP

	session_start();
	if (!isset($_SESSION['id'])) {
		header('Location: login.php');
	}

	if ($_SESSION['role'] == 'Admin') {
		header("Location: chatAdmin.php");
	}

	include "../controller/ClientsC.php";

	$ClientsC=new clientsC();
	$listeClients=$ClientsC->afficherClients();
	$count = 0;
?>

<html>
	<head>
		 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<title> Afficher Liste Clients</title>
    </head>
    <body>

		<button><a href="form.php">Ajouter Clients</a></button><br>
		<button><a href="chat.php">Chat</a></button><br>
		<button><a href="recla/">reclamation</a></button>
		<hr>
		<table>
			<thead>
							<tr class="table100-head">
				<th class="column1">#</th>
				<th class="column2">Nom</th>
				<th class="column3">Prenom</th>
				<th class="column4">Email</th>
				<th class="column4">Message</th>
				<th class="column5">supprimer</th>
				<th class="column6">modifier</th>
			</tr>
		</thead>
		<tbody>

			<?PHP
				foreach($listeClients as $clients){
			?>
				<tr>
					<td class="column1"><?PHP echo ++$count; ?></td>
					<td class="column2"><?PHP echo $clients['nom']; ?></td>
					<td class="column3"><?PHP echo $clients['prenom']; ?></td>
					<td class="column4"><?PHP echo $clients['email']; ?></td>
					<td class="column4"><?PHP echo $clients['message']; ?> </td>
					<td class="column4">
						<form method="POST" action="supprimerClients.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value="<?PHP echo $clients['id']; ?>" name="id">
						</form>
					</td>
					<td class="column6">
						<a href="modifierClients.php?id=<?= $clients['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</tbody>
		</table>
	</body>
</html>
