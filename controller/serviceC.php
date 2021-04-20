<?php
include "../config.php";
class serviceC1
{
    function affiche()
    {


        $sql = "SELECT * FROM services ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);

            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function deleteservice($idservice) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'DELETE FROM services WHERE idservice= :idservice'
            );
            $query->execute([
                'idservice' => $idservice
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function updateservice($service, $idservice)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE services SET servicetype=:servicetype, price=:price,photo=:photo,qty=:qty WHERE idservice = :idservice'
            );
            $query->execute([
                'servicetype' => $service->getservicetype(),
                'price' => $service->getPrice(),
                'photo' => $service->getPhoto(),
                'qty' => $service->getQty(),
                'idservice' => $idservice
            ]);
            echo $query->rowCount() . " service UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getservicesById($idservice)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'SELECT * FROM services WHERE idservice = :idservice'
            );
            $query->execute([
                'idservice' => $idservice
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

}