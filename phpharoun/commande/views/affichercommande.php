

<?PHP

include __DIR__."/../core/commandeC.php";
include __DIR__."/../../panier/entities/panier.php";
include __DIR__."/../../panier/core/panierC.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();

?>


<tr>
	<td>id_commande</td>
	<td>nom_produit</td> 
	<td>prix_produit</td>
	<td>prix_commande</td>
	<td>date_livraison</td>
	<td>action</td>

	
            </tr>
<?PHP
foreach($listecommandes as $row){
	$panierC=new panierC();
	$liste=$panierC->countpanier($row['id']);
	$liste1=$panierC->afficherpanier($row['id']);
	foreach($liste as $row1){
		$nbr=$row1['nbr'];
	}
	$i=0;
	foreach($liste1 as $row2){
		if($i==0)
		{
			?>

			<tr>
	<td rowspan="<?=$nbr?>"><?=$row['id']?></td>
	<td><?=$row2['nom']?></td> 
	<td><?=$row2['prix']?>TND</td>
	<td rowspan="<?=$nbr?>"><?=$row['prix']?>TND</td>
	<td rowspan="<?=$nbr?>"><?=$row['date']?></td>
	<td rowspan="<?=$nbr?>">

	<a href="http://localhost/Web/PawPaws/phpharoun/commande/views/supprimercommande.php?id=<?=$row['id'] ?>" class=" fa fa-trash">supprimer</a>
	
	</td>
	
            </tr>
<?PHP

		}
		else
		
	{
	
	?>
	<tr>
	<td><?=$row2['nom']?></td>
	<td><?=$row2['prix']?>TND</td>



</tr>
	
<?php
	}	
	$i++;
}
}
?>
