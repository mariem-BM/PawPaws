<?php
include "../config.php";
include "../config1.php";
require_once "../model/User.php";  
function user_creation ($New_User)     
{
            try
              {
                  $db = config::getConnexion();
                $zero=0;
                $query = $db->prepare(
                    'INSERT INTO utilisateur (Nom, Prenom, Email, Date_N, role, Login, Password, sexe) VALUES (:Nom, :Prenom, :email, :Date_N, :role, :login, :Password, :sexe)'
                );
                $query->execute([
                    'Nom' => $New_User->nom,
                    'Prenom' => $New_User->prenom,
                    'email' => $New_User->email,
                    'Date_N' => $New_User->date,
                    'role' => $New_User->role,
                    'login' => $New_User->login,
                    'Password' => $New_User->password,
                    'sexe' => $New_User->sexe
                     
                ]);}
             catch (PDOException $e) {
                echo $e->getMessage();
            }


}


function Check_Info ($email,$Login)
{
   $conn = getConnexion1();
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="SELECT Login, Email FROM utilisateur WHERE Login=$Login OR Email=$email";
  $result = $conn->query($sql);
  if (isset($result->num_row))
  {if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      if (row["Login"]===$Login)
        echo "Login déja utilisé";
      if (row["Email"]===$email)
        echo "email déja utilisé";
    }
    return 0;
  }
  else return 1;}
  else return 1;
}


function verification_sign_in ($Login, $Password)
{
     $sql="SELECT * FROM utilisateur WHERE Login= :Login AND Password= :Password";
    $db = config::getConnexion();
     try{
      $query=$db->prepare($sql);
      $query->execute(['Login' => $Login,
                    'Password' =>  $Password]);
      $count=$query->rowCount();
      if ($count==0){
        echo "le mote de passe ou le pseudo est incorrecte";
        return 0;
      }
      else
      {
        $x=$query->fetch();
        $User_info = new User ($x["Nom"],$x["Prenom"],$x["sexe"],$x["Email"],$x["Date_N"],$x["role"],$x["Login"],$x["Password"]);
        $User_info->id=$x["id"];

        return $User_info->id; 
      }}
      catch (Exception $e)
      {
        echo $e->getMessage();
      }
     

}

function Connect ($id)
{

    session_start();
    try{
      $sql="SELECT * FROM utilisateur WHERE id=:id";
        $db = config::getConnexion();
      $query=$db->prepare($sql);
      $query->execute(['id' => $id]);
      $count=$query->rowCount();
      $x=$query->fetch();
      $_SESSION['e']=$id;
      $_SESSION['Nom']= $x["Nom"];
      $_SESSION['Prenom']=$x["Prenom"];
      $_SESSION['Sexe']=$x["sexe"];
      $_SESSION['Email']=$x["Email"];
      $_SESSION['Date']=$x["Date_N"];
      $_SESSION['Login']=$x["Login"];
      $_SESSION['Password']=$x["Password"];
      $_SESSION['Facture']=$x["Facture"];
      $_SESSION['Picture']=$x["Picture"];
      $_SESSION['role']=$x["Role"];
    }  
    catch (Exception $e)
    {
      echo "error while connecting :";
      echo $e->getMessage();
      session_destroy();
    }
}

function Get_All_User_Info ()
{
    $sql="SELECT * FROM utilisateur";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if ($count==0){
            echo "Aucun Resultat";

        }
        else
        {
            $x=$query->fetchAll();
            return $x;
        }}
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}
function Get_one_User_Info($id)
{
    $sql="SELECT * FROM utilisateur where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if ($count==0){
            echo "Aucun Resultat";

        }
        else
        {
            $x=$query->fetchAll();
            return $x;
        }}
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}



class UserC{
  
  function afficherUtilisateurs(){
        
    $sql="SELECT * FROM utilisateur";
    $db = config::getConnexion();
    try{
      $liste = $db->query($sql);
      return $liste;
    }
    catch (Exception $e){
      die('Erreur: '.$e->getMessage());
    }	
  }
  
  function supprimerUtilisateur($id){
    $sql="DELETE FROM utilisateur WHERE id= :id";
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

  function modifierUtilisateur($utilisateur,$id){
    try {
      $db = config::getConnexion();
      $query = $db->prepare(
        'UPDATE utilisateur SET 
          Nom = :Nom, 
          Prenom = :Prenom,
          Date_N =:Date_N,
          sexe =:sexe, 
          email = :email,
          role = :role,
          login = :login,
          Password = :Password
        WHERE id = :id'
      );
      
      $query->execute([
        'Nom' => $utilisateur->nom,
                      'Prenom' => $utilisateur->prenom,
                      'email' => $utilisateur->email,
                      'Date_N' => $utilisateur->date,
                      'role' => $utilisateur->role,
                      'login' => $utilisateur->login,
                      'Password' => $utilisateur->password,
                      'sexe' => $utilisateur->sexe,
        'id' => $id
      ]);
     
      echo $query->rowCount() . " records UPDATED successfully <br>";
      
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  
  function getUserByNom_Prenom($Nom,$Prenom) {
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'SELECT * FROM utilisateur WHERE Nom = :Nom AND Prenom= :Prenom'
        );
        $query->execute([
            'Nom' => $Nom,
            'Prenom' => $Prenom
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
  }
  
  
  
  function sort_Nom(){
    try {
      $db = config::getConnexion();
      $query = $db->prepare(
          'SELECT * FROM utilisateur ORDER BY Nom ASC'
      );
      $query->execute();
      return $query->fetch();
    } catch (PDOException $e){
      $e->getMessage();
    }
  }
  
  
  
  
  function recupererUtilisateur($id){
    $sql="SELECT * from utilisateur where id=$id";
    $db = config::getConnexion();
    try{
      $query=$db->prepare($sql);
      $query->execute();
  
      $user=$query->fetch();
      return $user;
    }
    catch (Exception $e){
      die('Erreur: '.$e->getMessage());
    }
  }
  
  
  function validerUtilisateur($id,$email,$name){}
  
  
  function afficherUtilisateur(){
    $sql="SELECT * FROM Utilisateur ";
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