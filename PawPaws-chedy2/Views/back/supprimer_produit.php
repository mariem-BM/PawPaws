<?php
include_once '../../Model/Produit.php';
include_once '../../Controller/ProduitC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $Produitc=new ProduitC() ;
 $Produitc->deleteProduit($id);
 header('location:gestion_produit.php');
}