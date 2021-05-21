<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_GET['id']) )
{
$panier1=new panier($_GET['id'],NULL);

$panier1C=new panierC();
$panier1C->ajouterpanier($panier1);




header('Location: http://localhost/Web/PawPaws/Views/cart.php');

	





	
}else{
	echo "vérifier les champs";
}
//*/

?>