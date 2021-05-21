


<?PHP

include __DIR__."/../core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherproduits();

?>
<table>
<tr>
	<td>nom</td>
	<td>prix</td>
	<td>ajouter au panier</td>
    </tr>
<?PHP
foreach($listeproduits as $row){
	
	?>
	<tr>
	<td><?= $row['nom'] ?></td>
	
	<td><?=$row['prix']?>TND</td>
	<td>
		
		<a href="http://localhost/haroun/php/panier/views/ajouterpanier.php?id=<?=$row['id']?>">ajouter au panier</a>
	</td>
    </tr>
	
	
<?php	

}
?>
</table>