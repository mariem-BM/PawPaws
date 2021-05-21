<?php  require_once 'header.php';
include '../../controller/ProduitC.php' ;
      require_once '../../model/Produit.php';

      
      $produit=NULL;
      $produitC=new ProduitC() ;
      $error= array();
      if (
          isset($_POST['nom'])&&
          isset($_POST['type'])&&
          isset($_POST['quantite'])&&
          isset($_POST['image'])&&
          isset($_POST['prix'])
         )
       {
  
     
        if($_POST['quantite']==0)
        {  
            $error['quantite'] ='Quantité insuffisante  ERROR !!' ;
        }


          if (empty($error))
           {
             
              $produit = new produit(
             
                 $_POST['nom'],
                 $_POST['type'],
                 $_POST['quantite'],
                 $_POST['image'],
                 $_POST['prix']
              );
              $produitC->addproduit($produit);
              header('Location:gestion_produit.php');
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
                        Ajouter   <small>produit </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">


<?php if(!empty($error)):?>
   
			<div class="contact-agileits">
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
              
                 <?php if(empty($error) && isset($_POST['nom'])):?>
                    <div class='container'>
               <div class="row justify-content-center">
                    <div class="alert alert-success">
                 <p> Produit ajouté !!  </p>
                 <?php endif; ?>
               


                            
        <section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
 <form class="contact__form" method="post" action="">

<div class="row">
<div class="control-group form-group">   
        <input name="nom" type="text" class="form-control" placeholder="Tapez le nom du produit" required>
    </div>
  
    <div class="control-group form-group">   
<input type="text" name="type" list="type">
    <datalist id="type">
      <option value="accessoire">
      <option value="nourriture">
    </datalist>
    </div>
    
    <div class="control-group form-group">    
        <input name="quantite" type="text" class="form-control" placeholder="Tapez la quantite du produit" required>
    </div>
    <div class="control-group form-group">
    
        <input name="image" type="file" class="form-control" placeholder="votre image" required>
    </div>

    <div class="control-group form-group">
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix du produit" required>
    </div>
 

    <div class="control-group form-group"> 
        <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Confirm">
    </div>
</div>
</div>  
</div>
</form>

  
      <? require_once ' footer.php';?>