

<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #f76a05;
  color: white;
}
</style>



<?PHP

include __DIR__."/../core/panierC.php";
$panier1C=new panierC();
$listepaniers=$panier1C->afficherpaniers();

?>
<table>
<tr>
	<th>nom</th>
	<th>prix</th>
	<th>suprimer</th>
    </tr>
<?PHP
foreach($listepaniers as $row){
	if($row['id_commande']==NULL)
	{
	?>
	<tr>
	<td><span><?=$row['nom']?></span></td>

	<td><span>$<?=$row['prix']?>TND</span></td>
	<td scope="row" class="text-center">
		<a href="http://localhost/Web/PawPaws/phpharoun/panier/views/supprimerpanier.php?id=<?=$row['idp'] ?>" class=" fa fa-trash">supprimer</a>
		
	</td>
</tr>
	
<?php	
}
}
?>

</table>
<a href="http://localhost/Web/PawPaws/phpharoun/commande/views/ajoutercommande.php?">passer commande</a>