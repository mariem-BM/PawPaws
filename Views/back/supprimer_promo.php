<?php
include_once '../../model/Promo.php';
include_once '../../controller/PromoC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $PromoC=new PromotionC() ;
 $PromoC->deletePromotion($id);
 header('location:gestion_promo.php');
}