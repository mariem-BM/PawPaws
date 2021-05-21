<?php 
 require_once 'header.php';
      include '../../controller/PromoC.php' ;
      require_once '../../model/Promo.php';

      $id_produit=$_GET['id'];
      $promo=NULL;
      $produitc=new ProduitC();
      $promoC=new PromotionC() ;
      $error= array();
      if (
       
          isset($_POST['pourcentage'])
         

         )
       {
  
     

          if (empty($error))
           {
           $old_prix= $produitc->recoverProduitbyid($id_produit);
               $nv_prix=$old_prix->prix-(($old_prix->prix)*($_POST['pourcentage']/100));
             
              $promo = new Promotion(
             
                $id_produit,
                $_POST['pourcentage'],
                $nv_prix
              );
              $promoC->addPromotion($promo);
              header('Location:gestion_promo.php');
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
                        Ajouter   <small>promo </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">

<?php if(!empty($error)):?>
<div class='container'>
<div class="row justify-content-center">
                  <div class="alert alert-danger">
                 <p> you have not completed the form correctly  </p>
                  <ul>  
                  <?php foreach($error as $errors):?>
                     <li><?= $errors; ?>   </li>
                  <?php endforeach; ?>
                  </ul>
                 </div>
                 </div>
        </div>
                 <?php endif; ?>
              
                 <?php if(empty($error) && isset($_POST['pourcentage'])):?>
                    <div class='container'>
               <div class="row justify-content-center">
                    <div class="alert alert-success">
                 <p> promo ajouté !!  </p>
                 <?php endif; ?>
              

        
    <!---------------formulaire--------->
 <form class="contact__form" method="post" action="">

<div class="row">
<div class="col-md-6 form-group">    
        <input name="pourcentage" type="text" class="form-control" placeholder="Tapez le pourcentage" required>
    </div>

   

    <div class="col-12 mt-4">
        <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Confirm">
    </div>
</div>
</div>  
</div>
</form>

  
      <?require_once 'footer.php';?>