<?php

/****************************************************************
* GraphPHP 1.0 développé par UBrain Fr                          *
*****************************************************************
* Merci de ne pas modifier ce message et de garder en cas de    *
* modifications "Basé sur WebController par UBrain Fr"          *
*****************************************************************
* Version 1.0 du 23 aout 2018                                   *
****************************************************************/


/****************************************************************
* Merci de configurer PDO.php avant de lancer l'addons.         *
****************************************************************/
// Champs à entrer pour se connecter à la base de données, vos données sont sécurisés et éffacés après s'etre connecté à la base de données. Ils ne sont ni communiqués ni affichés. N'oubliez pas, par mesure de sécurité de ne jamais donner ces identifiants à une personne n'étant pas de confiance !

//===============================|champs|=============================//

// HOST de la base de données (si intégré directement au site ou si vous utilisez WAMP, entrez 'localhost').
$host = 'localhost';
// DBNAME, nom de la base de données, vous pouvez le trouver dans la liste à gauche si vous utilisez PhpMyAdmin.
$dbname = 'graph_ubrain_data';
// UTILISATEUR, utilisé pour se connecter à la base de données.
$utilisateur = 'mariem123';
// MOT DE PASSE, mot de passe de la base de données, aussi utilisé lors de la connexion à PhpMyAdmin.
$motdepasse = '';

//====================================================================//

// Connexion avec la base de données
try{
	$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', ''.$utilisateur.'', ''.$motdepasse.'');
}catch (Exception $e){
// Signalement en cas d'erreur lors de la connexion
        die('[GRAPH_PLUGIN_UBRAIN] ERROR (PDO_ERR)');
        exit;
}
// Suppression sécurisée des données de connexions pour éviter une récupération
$host = NULL;
$dbname = NULL;
$utilisateur = NULL;
$notdepasse = NULL;
?>