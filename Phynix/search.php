<?php
require '_header.html';

	if(isset($_GET['recherche']))
	{
		$rechercher = $_GET['recherche'];
		$result = $DB->query("SELECT * FROM produits WHERE name like '%$rechercher%'");
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
	      <?php echo'<img src="data:image;base64,'.$prodSearch->image.'" alt="'.$prodSearch->image.'">';?>
	      <div class="caption">
	        <h3><?= $prodSearch->name;?></h3>
	        <a href="#"><p><b><?= $prodSearch->description ;?></b></p></a>
	        <p><a href="#" class="btn btn-block b" role="button" style="width: 100%;margin: auto;background-color: #232F3E;color: white">More ..</a></p>
	      </div>
	    </div>
	  </div>
	<?php endforeach ?>
	</div>
</div>

</body>
</html>