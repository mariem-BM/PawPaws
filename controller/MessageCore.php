<?PHP
include_once "../DB/Config.php";

class MessageCore {




		function ajouterMessage($message){
		$sql="insert into message values (null,:source, :destinataire,:contenu,:date, 0,0)";
		$db = config2::getConnexion();
		try{

        $req=$db->prepare($sql);
		$req->bindValue(':source',$message->getSource());
		$req->bindValue(':destinataire',$message->getDestinataire());
		$req->bindValue(':contenu',$message->getContenu());
		$req->bindValue(':date',$message->getDate());

		
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function ajouterReclamation($message){
		$sql="insert into reclamation values (null,:source, :destinataire,:contenu,:date, 0,0)";
		$db = config2::getConnexion();
		try{

        $req=$db->prepare($sql);
		$req->bindValue(':source',$message->getSource());
		$req->bindValue(':destinataire',$message->getDestinataire());
		$req->bindValue(':contenu',$message->getContenu());
		$req->bindValue(':date',$message->getDate());


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}




}

?>
