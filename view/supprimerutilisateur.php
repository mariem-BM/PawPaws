<?PHP
	include "../Controller/UserC.php";

	$userC=new UserC();
	
	if (isset($_POST["id"])){
		$userC->supprimerutilisateur($_POST["id"]);
		header('Location:Gerer_utilisateurs.php');
	}

?>