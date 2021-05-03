<?PHP
include_once "../DB/Config.php";

class UserCore {

	
	function afficherUsers(){
		$sql="SElECT * From user";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherUsersExceptMe($id){
		
		$sql="SELECT u.id, u.nom, u.prenom, u.matricule, u.role, count(m.id) FROM user u LEFT JOIN message m ON u.id = m.source and m.destinataire=".$id." and m.readDestination=0 where u.id!=".$id." and u.role='admin' group by (u.id) ";

		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherAdminExceptMe($id){
		
		$sql="SELECT u.id, u.nom, u.prenom, u.matricule, u.role, count(m.id) FROM user u LEFT JOIN message m ON u.id = m.source and m.destinataire=".$id." and m.readDestination=0 where u.id!=".$id." and u.role<>'Admin' group by (u.id) ";

		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherPatientExceptMe($id){
		
		$sql="SELECT u.id, u.nom, u.prenom, u.matricule, u.role, count(m.id) FROM user u LEFT JOIN message m ON u.id = m.source and m.destinataire=".$id." and m.readDestination=0 where u.id!=".$id." and u.role='Patient' group by (u.id) ";

		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function logIn($username, $password) {
		$sql="SElECT * From user";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach ($liste as $raw) {
			if($raw['matricule'] == $username && $raw['motdepasse'] == $password) {
				return $raw;
			}
		}
		return NULL;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	// function afficherProjetsLimit($x){
	// 	$sql="SElECT * From projet order by id desc limit $x";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$liste=$db->query($sql);
	// 	return $liste;
	// 	}
 //        catch (Exception $e){
 //            die('Erreur: '.$e->getMessage());
 //        }	
	// }

	// 	function supprimerProjet($id){
	// 	$sql="DELETE FROM projet WHERE id=$id";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$db->query($sql);
		
	// 	}
 //        catch (Exception $e){
 //            die('Erreur: '.$e->getMessage());
 //        }	
	// }

	// 	function ajouterProjet($projet){
	// 	$sql="insert into projet values (null,:titre, :description,:image)";
	// 	$db = config::getConnexion();
	// 	try{
		
 //        $req=$db->prepare($sql);
	// 	$req->bindValue(':titre',$projet->getTitre());
	// 	$req->bindValue(':description',$projet->getDescription());
	// 	$req->bindValue(':image',$projet->getImage());
		
		
 //            $req->execute();
           
 //        }
 //        catch (Exception $e){
 //            echo 'Erreur: '.$e->getMessage();
 //        }
		
	// }
	// 		function recupererProjet($id){
	// 	$sql="SELECT * from projet where id=$id";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$liste=$db->query($sql);
	// 	return $liste;
	// 	}
 //        catch (Exception $e){
 //            die('Erreur: '.$e->getMessage());
 //        }
	// }

// 			function modifierProjet($projet,$id,$imageOld){
// 		$sql="UPDATE projet SET titre=:titre,description=:description,image=:image WHERE id=:id";
		
// 		$db = config::getConnexion();
// try{		
//         $req=$db->prepare($sql);
		
//         $titre=$projet->getTitre();
//         $description=$projet->getDescription();
//         $image=$projet->getImage();
//         if($image=="")
//         {
//         	$image=$imageOld;
//         }
// 		//$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
// 		$req->bindValue(':titre',$titre);
// 		$req->bindValue(':description',$description);
// 		$req->bindValue(':image',$image);
// 		$req->bindValue(':id',$id);
		
		
		
//             $s=$req->execute();
			
//            // header('Location: index.php');
//         }
//         catch (Exception $e){
//             echo " Erreur ! ".$e->getMessage();
//   /* echo " Les datas : " ;
//   print_r($datas);*/
//         }
		
// 	}







	
}

?>