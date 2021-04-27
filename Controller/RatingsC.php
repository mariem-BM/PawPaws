<?php
require_once "../config1.php";
require_once "../config.php";
function AfficherComplaints($tri) {
            try {
                $pdo = getConnexion();
                if ($tri="")
                $query = $pdo->prepare(
                    'SELECT * FROM complaint'
                );
                 if ($tri="AZ")
                $query = $pdo->prepare(
                    'SELECT * FROM complaint ORDER BY Titre ASC'
                );
                 if ($tri="ZA")
                $query = $pdo->prepare(
                    'SELECT * FROM complaint ORDER BY Titre DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function AfficherComplaintsCONN($tri,$id) {
                    try {
                        $pdo = getConnexion();
                        if ($tri="")
                        $query = $pdo->prepare(
                            'SELECT * FROM complaint where id_user=:id'
                        );
                         if ($tri="AZ")
                        $query = $pdo->prepare(
                            'SELECT * FROM complaint where id_user=:id ORDER BY Titre ASC'
                        );
                         if ($tri="ZA")
                        $query = $pdo->prepare(
                            'SELECT * FROM complaint where id_user=:id ORDER BY Titre DESC'
                        );
                        $query->execute(['id'=>$id]);
                        return $query->fetchAll();
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
function Supprimer($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM Complaint WHERE id= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
function Modifier($titre, $type,$desc,$id,$check) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE complaint SET  Titre=:titre, Type= :type , Message= :Message, Checked=:Checked, WHERE id = :id'
                );
                $query->execute([
         'titre' => $titre,
         'type' => $type,
                    'id' => $id,
                    'Message' => $desc,
                    'Checked'=> $check
                ]);
             echo $id;
             $query->rowCount();
            } catch (PDOException $e) {
               echo $e->getMessage();
            }
        }

function Creation_Comp ($titre,$message,$type,$id_user,$nomuser)
{
            try
              {
                $pdo = getConnexion();
                $zero=0;
                $query = $pdo->prepare(
                    'INSERT INTO complaint (Titre, Message, Type,id_user,nom_user) VALUES (:titre, :message, :type, :id_user, :nom_user)'
                );
                $query->execute([
                    'titre' => $titre,
                    'message' => $message,
                    'type' => $type,
                    'id_user' => $id_user,
                    'nom_user' => $nomuser,
                    
                ]);}
             catch (PDOException $e) {
                echo $e->getMessage();
            }


}

function Creation_Reponse ($iduser,$Message, $Nom,$idrec)
{
            try
              {
                $pdo = getConnexion();
                $zero=0;
                $query = $pdo->prepare(
                    'INSERT INTO reponses (Nom_User, Message ,id_user,id_Reclamation) VALUES (:Nom, :message, :iduser, :idrec) '
                );
                $query->execute([
                    'Nom' => $Nom,
                    'message' => $Message,
                    'iduser' => $iduser,
                    'idrec' => $idrec,
                ]);}
             catch (PDOException $e) {
                echo $e->getMessage();
            }


}
function Supprimer_Response($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM reponses WHERE id= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


function afficher_Reponses($id, $id_user, $role)
{
  $conn = getConnexion1();
  if ($conn->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="SELECT C.id,C.Nom_User,C.id_user,C.id_Reclamation,C.message,C.date_p,U.Picture FROM Reponses C inner JOIN utilisateur U ON C.id_user=U.id WHERE id_Reclamation=$id ORDER BY date_p DESC ";
  $result = $conn->query($sql);
  if ($result>0)
  {
      while($row = $result->fetch_assoc())
      {

        ?>
          <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="../Assets/img/<?php echo $row["Picture"];?>" width ="50" height="50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $row["Nom_User"]; ?></h5>
           <?php echo $row["message"]; ?>
            <h6 class="mt-0">Posted on <?php echo $row["date_p"]; ?></h6>
             <?php if ($id_user==$row["id_user"] || $role=="admin") { ?>
              <a href="Read_Complaint.php?id=<?php echo $row['id_Reclamation'];?>&idresponse=<?php echo $row["id"];?>"> Supprimer</a>
            <?php } ?>
          </div>
        </div>
        <?php
    }
}
}

function get_Rec_by_id($id)
{
  $post=new post();
  $conn = getConnexion1();
  if ($conn->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="SELECT *  FROM complaint WHERE id=$id";
  $result = $conn->query($sql);
  if ($result>0)
  {
    while($row = $result->fetch_assoc())
      {$post->nom=$row["Titre"];
  $post->date=$row["Date"];
  $post->text=$row["Message"];
  $post->type=$row["Type"];
 $post->user=$row["nom_user"];}}
  else
  echo "";
  $conn->close();
  return $post;
}
