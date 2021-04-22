<?php
    require_once '../config.php';
    class ActivitesC {
        public function afficherActivites($tri) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites'
                );
                if (isset($tri))
                {if ($tri=="AZ")
                {$query = $pdo->prepare(
                    'SELECT * FROM activites ORDER BY nom ASC'
                );}

                    if ($tri=="ZA")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites ORDER BY nom DESC '
                    );}
                    if ($tri=="I")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites ORDER BY id ASC '
                    );}
                    if ($tri=="P")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites ORDER BY places ASC '
                    );}
                }

                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getact($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites1 WHERE id=:id'
                );

                $query->execute(['id'=>$id]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherActivites1($tri) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites1'
                );
                if (isset($tri))
                {if ($tri=="AZ")
                {$query = $pdo->prepare(
                    'SELECT * FROM activites1 ORDER BY nom ASC'
                );}

                    if ($tri=="ZA")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites1 ORDER BY nom DESC '
                    );}
                    if ($tri=="I")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites1 ORDER BY id ASC '
                    );}
                    if ($tri=="P")
                    {$query = $pdo->prepare(
                        'SELECT * FROM activites1 ORDER BY places ASC '
                    );}
                }

                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getActivitesById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites WHERE id= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getActivitesByIdU($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites WHERE Id_User= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getActivitesByTitle($title) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites WHERE titre = :title'
                );
                $query->execute([
                    'title' => $title
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function connexion($id_user,$username,$places,$id_act,$act) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO activites (nom,places,id_activites,Id_User,Nom_Act) 
                VALUES (:nom,:places,:id_activites,:Id_User,:Nom_Act)'
                );
                $query->execute([
                    "nom" => $username
                    ,"places" => $places
                    ,"id_activites" => $id_act
                    ,"Id_User" => $id_user
                    ,"Nom_Act" => $act

                ]);
                echo "Votre reservation est validée";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

        public function modifierActivites($activites, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE activites SET  nom=:nom,activites = :activites, places= :places WHERE id = :id'
                );
                $query->execute([
				 'nom' => $activites->getNom(),
					'places' => $activites->getPlaces(),
                    'id' => $id
                ]);
             echo $id;
              echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
               echo $e->getMessage();
            }
        }

         public function ModofierPlaces($places, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE activites SET  places= :places WHERE id = :id'
                );
                $query->execute([
                    'places'=>$places,
                    'id' => $id
                ]);
             echo $id;
              echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
               echo $e->getMessage();
            }
        }

        public function modifierActivites1($nom, $places,$id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE activites1 SET  nom=:nom, places= :places WHERE id = :id'
                );
                $query->execute([
				 'nom' => $nom,
				 'places' => $places,
                    'id' => $id
                ]);
             echo $id;
             $query->rowCount(); 
            } catch (PDOException $e) {
               echo $e->getMessage();
            }
        }

        public function supprimerActivites($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM activites WHERE id= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function supprimerActivites1($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM activites1 WHERE id= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherActivites($title) {
            $sql = "SELECT * from activites where titre=:title";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'activites' => $activites->getActivites(),
                ]);
                $result = $query->fetchAll();
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function sendmail($utilisateur)
        {   $pdo = getConnexion();
            $query = $pdo->prepare(
            "SELECT * FROM utilisateur");
        
            $headers = "From: istupid692@gmail.com\r\n";
            $to = $_SESSION['Email'];
            $subject = "confirmation de reservation";
            $message = "Bonjour Mr/Mme je vous confirme qu'on a bien reçu votre reservation pour aujourd'hui pour personnes. ";
            if (mail($to, $subject, $message, $headers))
            echo ' et nous avons vous envoyer une confirmation par mail.Vous etes les bienvenus.';
            else
                echo 'UNSUCCESSFUL...';

        }
        public function connexion1($Nom,$places) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO activites1 (nom,places) 
                VALUES (:nom,:places)'
                );
                $query->execute([
                    'nom' => $Nom,
                    'places' => $places,

                ]);
                echo "Posted Successfully";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }
        public function getselect ()
        {
            {
      try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM activites1'
                );



                $query->execute();
                return $query->fetchAll();}
             catch (PDOException $e) {
               echo $e->getMessage();
            }
}
        }
        public function subsplaces ($places,$id)
        {

            
      try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT places FROM activites1 where id=:id'
                );



                $query->execute(["id"=>$id]);
                $placesrest= $query->fetch();
                if ($placesrest["places"]>$places)
                {
                    $query = $pdo->prepare(
                    'UPDATE activites1 SET places=(places-:placesrest) WHERE id = :id');
                    $query->execute(["id"=>$id,"placesrest"=>$places]);
                    return 1;
                }
                else
                    return 0;
            }
             catch (PDOException $e) {
               echo $e->getMessage();
        }
    }
    public function addsplaces ($places,$id)
        {

            
      try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT places FROM activites1 where id=:id'
                );



                $query->execute(["id"=>$id]);
                $placesrest= $query->fetch();

                    $query = $pdo->prepare(
                    'UPDATE activites1 SET places=(places+:placesrest) WHERE id = :id');
                    $query->execute(["id"=>$id,"placesrest"=>$places]);

            
            }
             catch (PDOException $e) {
               echo $e->getMessage();
        }
    }

}