<?php 
 require_once 'header.php';
      include '../../Controller/PromoC.php' ;
      require_once '../../Model/Promo.php';


  $id=$_GET['id'];  
 $promo=NULL;
 $promoc=new PromotionC() ;
      $promotion=$promoc->recoverpromotionbyid($id);
      $error= array();
    
      
      if (
        isset($_POST['pourcentage'])
     
       )
       {

          if (empty($error))
           {
                  
            $promo = new Promotion(
                 
                $promotion->id_produit,
                $_POST['pourcentage'],
                $promotion->nv_prix
              
             );
              $promoc->updatepromotion($promo, $id);  
          }
    
      }
	  ?>
 <div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        Modifier   <small>promo </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">


        
    <!---------------formulaire--------->
 <form class="contact__form" method="post" action="">

<div class="row">
<div class="col-md-6 form-group">    
        <input name="pourcentage" type="text" class="form-control" placeholder="Tapez le pourcentage"  value="<?=$promotion->pourcentage?>" required>
    </div>

   

    <div class="col-12 mt-4">
        <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Confirm">
    </div>
</div>
</div>  
</div>
</form>

  
      <?require_once 'footer.php';?>