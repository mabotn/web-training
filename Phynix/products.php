<?php 
require '_header.html';
$nameCategorie = $_GET['nameOfType'];
$produits =  $DB->query("SELECT * FROM produits WHERE categorie like '$nameCategorie'") ;
?>
<!-- les catégories -->
<div class="container cat">
	<div class="row">
	<?php foreach ($produits as $prod): ?>
	  <div class="col-sm-4 col-md-3 text-center fadeOut" style="margin-bottom: 20px">
	    <div class="thumbnail">
	      <?php echo'<img src="data:image;base64,'.$prod->image.'" alt="'.$prod->image.'" height="500">';?>
	      <div class="caption">
	        <h3><?= $prod->name;?></h3>
	        
	        <a href="productDetails.php?id=<?= $prod->id;?>&?nameOfType=<?= $prod->categorie;?>"><b><?= $prod->description ;?></b></a>
	        <b><p class="h4" style="color: #b00"><?=$prod->price;?> TND &nbsp<span style="color: gray;font-size: 14px"><s><?=$prod->price + 120;?> TND</s></p></b>
	      </div>
	    </div>
	  </div>
	<?php endforeach ?>
	</div>
</div>

<?php require '_footer.html'; ?>





