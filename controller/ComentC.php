<?php
include "../../config.php";
include "../../config1.php";
include_once "../../model/Coment.php";  


/*
function Check_Coment ()
{
   $conn = getConnexion1();
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="SELECT Nom, Message FROM coment WHERE id_sender=$id_sender OR Message=$message";
  $result = $conn->query($sql);
  if (isset($result->num_row))
  {
    if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      if ($row["Nom"]===$nom)
        echo $row['nom'];
      if ($row["message"]===$message)
        echo $row['message'];
    }
    return 0;
  }
  else return 1;
}
  else return 1;
}

*/






class ComentC{
  function ajouterComent ($New_Coment)       // coment_creation
{
            try
              {
                  $db = config::getConnexion();
                $zero=0;
                $query = $db->prepare(
                    'INSERT INTO coment (id_sender, id_reciever,message,date_com) VALUES (:id_sender,:id_reciever ,:message,:date_com)'
                );
                $query->execute([
                    'id_sender' => $New_Coment->id_sender,
                    'id_reciever' => $New_Coment->id_reciever,
                    'message' => $New_Coment->message,
                    'date_com' => $New_Coment->date_com
                     
                ]);}
             catch (PDOException $e) {
                echo $e->getMessage();
            }
}
  
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
      $sql="DELETE FROM coment WHERE id= :id";
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

/*
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
    */
 }
?>
