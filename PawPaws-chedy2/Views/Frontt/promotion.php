<?php 
require_once 'header.php';
include_once '../../Controller/ProduitC.php';
include_once '../../Controller/PromoC.php';

$promoc=new PromotionC() ;
$liste=$promoc->displayPromotions();
$produitc=new ProduitC() ;

?>
    <!-- header_start  -->
    <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Promotion</h3>
						
                 </div></div>
    <!--================Blog Area =================-->
 
           
               
                    
                    <?PHP
				foreach($liste as $produit):
			?>
            <?php $produitcc=$produitc->recoverProduitbyid($produit->id_produit);?>
            <section>
           
    <div class="w3l-visitors-agile" >
    <div class="title-w3-agileits title-black-wthree">     
    <div class="w3layouts_work_grids">
    <div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
                          
                                <img class="card-img rounded-0" src="<?=$produitcc->image?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?=$produit->pourcentage?>%</h3>
                                   
                                </a>
                            </div>

                            <div class="blog_details">
                             
                                    <h2><?=$produitcc->nom?></h2>
                                </a>
                                <p>OLD PRICE $<?=$produitcc->prix?></p>
                                <p>New price $<?=$produit->nv_prix?></p>
                                <p><?=$produitcc->type?></p>
                                <p>size : XS/S/M/L/XL</p>
                                <button class="btn btn-success btn-xs" onclick="window.location.href = 'panier.php?id=<?= $produit->id_produit ?>';"> <i class="fa fa-plus "> ADD to card</i></button>
                                
                                <ul class="blog-info-link">
                                <br>
                                    <li><a href="#"><i class="fa fa-user"></i> Ships in: 1-2 Weeks.</a></li>
                               
                                    
                                    <li><a href="#"><i class="fa fa-comments"></i> Add to Wish List</a></li>
                                </ul>
                             </div>
                             </div>
                             </div>
                             </div>
                             </div>
                             </div>
                             </div>
                 
       
    </section>
                       
                        <?php endforeach ; ?>
            
                       

     
   <?php require_once 'footer.php';?>



                        
      
       