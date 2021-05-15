<?php 
require 'header.php';
 include_once '../../model/Produit.php';
include_once '../../controller/ProduitC.php';
$search="";
$ProduitC=new ProduitC() ;
if(isset($_POST['valueToSearch']))
{   
	$search=$_POST['valueToSearch'];
		
}
$liste=$ProduitC->searchProduits($search);
if(isset($_POST['tri']))
{
if($_POST['tri']=="defaut")
{
	$tri=0;
	$liste=$ProduitC->trierProduit($tri);
}
else if($_POST['tri']=="alphabet")
{
	$tri=2;
	$liste=$ProduitC->trierProduit($tri);
}
else if($_POST['tri']=="prix")
{
	$tri=1;
	$liste=$ProduitC->trierProduit($tri);
}
}

?>
    <div  align="center" class="container-fluid">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          <div class="row">
<div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Produit</h3>
						
                 </div></div>

    <!--================Blog Area =================-->
 
    <form class="contact__form" method="post" action="">
	<div align="center"  class="control-group form-group">   
<input type="text" name="tri" list="tri" >
    <datalist id="tri">
      <option value="defaut">
      <option value="alphabet">
	  <option value="prix">
	  <div class="col-12 mt-4">

    </div>
    </datalist>
	        <input name="confirm" type="submit" class=" btn btn-hero btn-circled" value="Trier">
    </div>
	</form>
	<form align="center" action="" method="post">
	<input type="text" name="valueToSearch", placeholder="Article to search">
	<input type="submit" name="search" value="search"><br><br>
</form>
                    <?PHP
				foreach($liste as $produit):
		         	?>
					<div   class="w3l-visitors-agile" >
   <section class="blog_area section-padding">
    <div  class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
                        <article class="blog_item">
                            <div class="blog_item_img">
							
                                <img align="center" class="card-img rounded-0" src="<?=$produit->image?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>view</h3>
                                   
                                </a>
                            </div>

                            <div class="blog_details">
                             
                                    <h2><?=$produit->nom?></h2>
                                </a>
                                <p>$<?=$produit->prix?></p>
                                <p><?=$produit->type?></p>
                                <p>size : XS/S/M/L/XL</p>
                                <button class="btn btn-success btn-xs" onclick="window.location.href = 'panier.php?id=<?= $produit->id ?>';"> <i class="fa fa-plus "> ADD to cart</i></button>
                                
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
    </section>
                        </article>
                        <?php endforeach ; ?>
            
                       

    <!--================Blog Area =================-->
<?php require_once 'footer.php';?>