
<?php 
require_once 'header.php';
 include_once '../../model/Promo.php';
include_once '../../controller/PromoC.php';

$promoC=new PromotionC() ;
$liste=$promoC->displayPromotions();
 

?>
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Gestion <small>Promo </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
			

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
											Gestion des promo  <span class="badge"></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
										<th><i class="fa fa-user"></i> ID </th>
                  <th><i class="fa fa-user"></i> ID_produit </th>
                    <th><i class="fa fa-user"></i> Pourcentage</th>
                    <th ><i class="fa fa-user"></i> Nouveau Prix</th>
                    
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
							
				                
									<?PHP
				foreach($liste as $promo):
			?>
                  <tr>
                    <td><?= $promo->id ?></td>
                    <td><?= $promo->id_produit ?></td>
					<td><?= $promo->pourcentage ?></td>
					<td><?= $promo->nv_prix ?></td>
			

                    <td>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'supprimer_promo.php?id=<?= $promo->id ?>';"> <i class="fa fa-trash-o "></i></button>
					  <button class="btn btn-success btn-xs" onclick="window.location.href = 'modifier_promo.php?id=<?= $promo->id ?>';"> <i class="fa fa-pencil "></i></button>
                      
                   </td>
                  </tr>
				  </td>
                  </tr>
                  <?php endforeach ; ?>
                  <tr>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
                            
		

        <?php require_once 'footer.php';?>
	


			
        
                  <!--
                  JavaScripts
                  ========================== -->
				<!-- JS here -->
				<script src="js/vendor/modernizr-3.5.0.min.js"></script>
				<script src="js/vendor/jquery-1.12.4.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/isotope.pkgd.min.js"></script>
				<script src="js/ajax-form.js"></script>
				<script src="js/waypoints.min.js"></script>
				<script src="js/jquery.counterup.min.js"></script>
				<script src="js/imagesloaded.pkgd.min.js"></script>
				<script src="js/scrollIt.js"></script>
				<script src="js/jquery.scrollUp.min.js"></script>
				<script src="js/wow.min.js"></script>
				<script src="js/nice-select.min.js"></script>
				<script src="js/jquery.slicknav.min.js"></script>
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/plugins.js"></script>
				<script src="js/gijgo.min.js"></script>

				<!--contact js-->
				<script src="js/contact.js"></script>
				<script src="js/jquery.ajaxchimp.min.js"></script>
				<script src="js/jquery.form.js"></script>
				<script src="js/jquery.validate.min.js"></script>
				<script src="js/mail-script.js"></script>

				<script src="js/main.js"></script>
              </pre>

          </section>

          
      		</ul>
      	</div>
      </section>
  </div>
</div>


		<!-- Essential JavaScript Libraries
			==============================================-->
			<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="js/jquery.nav.js"></script>
			<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
			<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
			<script type="text/javascript">
				SyntaxHighlighter.all()
			</script>
			<script type="text/javascript" src="js/custom.js"></script>

		</body>
		</html>
