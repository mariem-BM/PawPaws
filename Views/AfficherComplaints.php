<?php
require_once "../Controller/RatingsC.php";
$tri="";
if (isset($_GET["tri"]))
$tri=$_GET["tri"];

 if (isset($_POST['id']) && isset($_POST['supprimer'])) {

      $id=$_POST['id'];
      echo $id;

       Supprimer($id);
    


    }
    if (isset($_POST["id"]) && isset ($_POST["titre"]) && isset ($_POST["Message"]) && isset ($_POST["Type"]) && isset ($_POST["Checked"]) && isset ($_POST["modifier"]))
    {
      Modifier($_POST["titre"], $_POST["Type"],$_POST["Message"],$_POST["id"],$_POST["Checked"]);
    }
    
    $list=AfficherComplaints($tri);
?>
 
<table border=3 align = 'center'>

   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Gestion Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets3/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets3/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets3/css/style.css" rel="stylesheet">
    <link href="../assets3/css/style-responsive.css" rel="stylesheet">

    
  </head>

<?PHP
        foreach($list as $Complaints)
        {
      ?>
        <tr>
<form method="POST" action="AfficherComplaints.php">
          <td align="center" ><input name="titre" value="<?PHP echo $Complaints['Titre']; ?>"></td>
          <td align="center"><input name="Message" value="<?PHP echo $Complaints['Message']; ?>"></td>
          <td align="center"><?PHP echo $Complaints['nom_user']; ?></td>>
          <td align="center"><input name="Type" value="<?PHP echo $Complaints['Type']; ?>"></td>>
          <td align="center"><input name="Checked" value="<?PHP echo $Complaints['Checked']; ?>"></td>>
          <td align="center"><?PHP echo $Complaints['Date']; ?></td>>
          

          <td align="center" >
            
            <input style="margin: 5px;"  class="btn btn-warning" type="submit" name="modifier" value="modifier">
            <input  type="hidden" value= "<?PHP echo $Complaints['id']; ?>" id="id" name="id">
            </form>
          </td>
          <td  align="center">
            <form method="POST" action="AfficherComplaints.php"  >
            <input style="margin: 5px; "  class="btn btn-danger"  type="submit" name="supprimer" value="supprimer" >
            <input type="hidden" value= "<?PHP echo $Complaints['id']; ?>" name="id" id="id">
            </form>
          </td>
          <td align="center" >
            <a style="margin: 5px;" href="Read_Complaint.php?id=<?php echo $Complaints['id']; ?>"  class="btn btn-primary" type="submit" name="pic" value="Picture">View</a>
          </td>
          </tr>
      <?PHP
        }
      ?>