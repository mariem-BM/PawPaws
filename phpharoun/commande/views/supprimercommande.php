<?PHP

include "../core/commandeC.php";
$commandeC=new commandeC();

if (isset($_GET["id"])){
	
	$commandeC->supprimercommande($_GET["id"]);
	
	header('Location: http://localhost/Web/PawPaws/Views/back/commandes.php');
}


?>

