
   <?php
 include "../Model/activites.php";
 include "../Controller/ActivitesC.php";

/*class activitesC
{
	public $nom;
	public $activites;
	public $places;
	public $dateS;
	public $email;

}*/

$ActivitesC=new ActivitesC();
$post=new ActivitesC ();
session_start();

$Activite=$ActivitesC->getact($_POST["activites"]);
foreach ($Activite as $activites)
{if ($ActivitesC ->subsplaces($_POST["places"],$_POST["activites"])==1)
{$ActivitesC ->connexion($_SESSION['e'],$_SESSION['Nom']." ".$_SESSION['Prenom'],$_POST["places"],$_POST["activites"],$activites["nom"]);
header( "refresh:5;url=Acceuil.php");}
else {echo "Places non restantes, merci pour votre comprehension";
header( "refresh:5;url=Form.php");
return;
}
$ActivitesC->sendmail($post);
}





?>

