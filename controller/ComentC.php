<?php
include "../config.php";
include "../config1.php";
require_once "../model/Coment.php";  

function ajouterComent ($New_Coment)       // coment_creation
{
            try
              {
                  $db = config::getConnexion();
                $zero=0;
                $query = $db->prepare(
                    'INSERT INTO coment (NOM, MESSAGE, DATE) VALUES (:nom, :message, :date)'
                );
                $query->execute([
                    'nom' => $New_Coment->nom,
                    'message' => $New_Coment->message,
                    'date' => $New_Coment->date,
                     
                ]);}
             catch (PDOException $e) {
                echo $e->getMessage();
            }
}

class ComentC{
  
    function afficherComents(){
                
      $sql="SELECT * FROM coment";
      $db = config::getConnexion();
      try{
        $liste = $db->query($sql);
        return $liste;
      }
      catch (Exception $e){
        die('Erreur: '.$e->getMessage());
      }	
    }

    
    function supprimerComent($id){
      $sql="DELETE FROM coment WHERE ID= :id";
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


    function modifierComent($coment,$id){
      try {
        $db = config::getConnexion();
        $query = $db->prepare(
          'UPDATE coment SET 
            NOM = :nom, 
            MESSAGE = :message,
            DATE =:date,
          WHERE id = :id'
        );
        
        $query->execute([
          'nom' => $coment->nom,
                        'message' => $coment->message,
                        'date' => $coment->date,
          'id' => $id
        ]);
       
        echo $query->rowCount() . " records UPDATED successfully <br>";
        
      } catch (PDOException $e) {
        $e->getMessage();
      }
    }
    
 }
?>
