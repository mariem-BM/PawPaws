<?PHP
	include "../../config_chedi.php";
	require_once '../../model/Produit.php';

		

	class ProduitC {
		
		function addProduit($produit){
			$sql="INSERT INTO produit (nom, type, quantite, image, prix) 
			VALUES (:nom,:type,:quantite,:image,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $produit->getnom(),
					'type' => $produit->gettype(),
					'quantite' => $produit->getquantite(),
					'image' => $produit->getimage(),
					'prix' => $produit->getprix()
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function displayProduits(){
			
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deleteProduit($id){
			$sql="DELETE FROM produit WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function updateProduit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						nom = :nom, 
						type = :type,
						quantite = :quantite,
						image = :image,
						prix = :prix
					
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $produit->getnom(),
					'type' => $produit->gettype(),
					'quantite' => $produit->getquantite(),
					'image' => $produit->getimage(),
					'prix' => $produit->getprix(),
			
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recoverProduitbyid($id){
			$sql="SELECT * from produit where id=:id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute(['id'=>$id]);

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function trierProduit($tri){
			switch ($tri) {
				case 0:
					$sql="SELECT * FROM produit";
					   break;
				case 1:
					$sql="SELECT * FROM produit ORDER BY prix ";
				  break;
				case 2:
					$sql="SELECT * FROM produit ORDER BY nom ";
					   break ;
			
				  }
		
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}	
		
			}
			function searchProduits($search){
			
				$sql="SELECT * FROM produit WHERE nom LIKE  '%$search%' OR type LIKE '%$search%' OR quantite LIKE '%$search%' OR prix LIKE '%$search%' ";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}	
			}
}


?>