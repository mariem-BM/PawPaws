<?php
include_once '../../model/Produit.php';
include_once '../../controller/ProduitC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $Produitc=new ProduitC() ;
 $Produitc->deleteProduit($id);
 header('location:gestion_produit.php');
}