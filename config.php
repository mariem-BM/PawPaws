<?php

    function getConnexion () {
        $servername = 'localhost';	
        $username = 'root';	
        $password = '';       
        $dbname = 'pawpaws';	
        try {
            $pdo = new PDO(
                "mysql:host=$servername;dbname=$dbname", 
                $username, 
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            //echo "Connected successfully";
            return $pdo;
        }
        catch(PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
        }
    
    }
?>
<?php
  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=pawpaws', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
?>
