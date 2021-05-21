<?PHP

include_once __DIR__."/../../config.php";

class produitC {
	




	
	function afficherproduits(){
		
		$sql="SELECT * from produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}
	
	
	
}

?>
