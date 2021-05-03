<?php
include_once '../../Model/Promo.php';
include_once '../../Controller/PromoC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $PromoC=new PromotionC() ;
 $PromoC->deletePromotion($id);
 header('location:gestion_promo.php');
}