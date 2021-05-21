<?PHP

include_once __DIR__."/../../config.php";

class commandeC {
	



	function ajoutercommande($commande){
		
		$sql="insert into commande (date,prix) values (:date, :prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $date=$commande->getdate();
        $prix=$commande->getprix();

		
      
		$req->bindValue(':date',$date);
		$req->bindValue(':prix',$prix);
		
		
            $req->execute();
			

			
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		
		$sql="SELECT * from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}

	function dernierid(){
		
		$sql="SELECT max(id) as maxi from commande ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}
	
	
	function sommecommande(){
		$sql="SELECT SUM(b.prix) as som from produit b INNER JOIN panier a on b.id = a.id_produit where a.id_commande is NULL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimercommande($id){
		$sql="DELETE FROM commande where id = :id ";
		$sql1="DELETE FROM panier where id_commande = :id ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		$req1=$db->prepare($sql1);
		$req1->bindValue(':id',$id);
		
		try{
            $req->execute();
			$req1->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	
}

?>
