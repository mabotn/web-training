<?php
require '_header.html';

	if(isset($_GET['recherche']))
	{
		$rechercher = $_GET['recherche'];
		$cat = $_GET['categ'];
		$result = $DB->query("SELECT * FROM produits WHERE name like '%$rechercher%' and categorie like '%$cat%'");
	}
	
	if(sizeof($result) < 1)
	{
		echo "<script>setTimeout(\"location.href = '404.php';\",0);</script>";
	}	

?>

<div class="container cat">
	<div class="row">
	<?php foreach ($result as $prodSearch): ?>
	  <div class="col-sm-4 col-md-3 text-center">
	    <div class="thumbnail fadeOut">
	      <?php echo'<img src="data:image;base64,'.$prodSearch->image.'" style="height: 250px" alt="'.$prodSearch->image.'">';?>
	      <div class="caption">
	        <h3><?= $prodSearch->name;?></h3>
	        <a href="productDetails.php?id=<?= $prodSearch->id;?>&?nameOfType=<?= $prodSearch->categorie;?>"><b><?= $prodSearch->description ;?></b></a>
	        <p><a href="#" class="btn btn-block b" role="button" style="width: 100%;margin: auto;background-color: #232F3E;color: white">More ..</a></p>
	      </div>
	    </div>
	  </div>
	<?php endforeach ?>
	</div>
</div>

<?php 
require '_footer.html';
?>