<?php 
require_once 'header.php';
 include_once '../../Model/Produit.php';
include_once '../../Controller/ProduitC.php';


  $id=$_GET['id'];  
 $produits=NULL;
 $produitC=new ProduitC() ;
      $produit=$produitC->recoverProduitbyid($id);
      $error= array();
     
      if (
        isset($_POST['nom'])&&
        isset($_POST['type'])&&
        isset($_POST['quantite'])&&
        isset($_POST['image'])&&
        isset($_POST['prix'])
       )
       {

          if (empty($error))
           {
                  
            $produits = new Produit(
             
                $_POST['nom'],
                $_POST['type'],
                $_POST['quantite'],
                $_POST['image'],
                $_POST['prix']
             );
              $produitC->updateProduit($produits, $id);  
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
                        Modifier   <small>produit </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div id="page-wrapper">
            <div id="page-inner">

                            
 
  <br><br><br>
  <section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
<form class="contact__form" method="post" action="">

<div class="control-group form-group">   
<label for="nom">Nom:</label>
        <input name="nom" type="text" class="form-control" placeholder="Tapez le nom"  value="<?=$produit->nom?>"required>
    </div>
    <br>
    <div class="control-group form-group">
    <label for="type">type:</label>
    <input type="text" name="type" list="type" >
    <datalist id="type">
      <option value="accessoire">
      <option value="nourriture">
    </datalist>
    
    </div>
    <br>
    <div class="control-group form-group">
  
	<label for="quantite">quantite:</label>   
        <input name="quantite" type="text" class="form-control" placeholder="Tapez la quantite" value="<?=$produit->quantite?>" required>
    </div>
	
    <br>
	

		
    <div class="control-group form-group">
	  <label for="prix">Prix:</label>  
        <input name="prix" type="text" class="form-control" placeholder="Tapez le prix" value="<?=$produit->prix?>" required>
    </div>

  
	</div>

    <div class="control-group form-group">
	
    <label for="myfile">Image:</label>
    
<input type="file" class="form-control" id="img"  name="image">
</div>

    

<div class="control-group form-group">
        <input name="confirm" type="submit" class=" btn btn-primary" value="Confirm">
    </div>
    <br>
	
</div>
</form>

</div>  
</div>
</div>
</div>




<? require_once 'footer.php';?>
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>