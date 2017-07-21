<?php 
require '_header.html';
?>

<!-- les catégories -->

<div class="container cat">
	<div class="row">
	<?php foreach ($category as $cat): ?>
	  <div class="col-sm-4 col-md-3 text-center">
	    <div class="thumbnail fadeOut">
	      <?php echo'<img src="data:image;base64,'.$cat->image.'" alt="'.$cat->image.'">';?>
	      <div class="caption">
	        <h3><?= $cat->nom;?></h3>
	        
	        <form action="products.php" method="GET">
	        	<button type="submit" class="btn btn-block b" name="nameOfType" style="width: 100%;margin: auto;background-color: #232F3E;color: white" value="<?= $cat->nom;?>">More ..</button>
	        </form>
	      </div>
	    </div>
	  </div>
	<?php endforeach ?>
	</div>
</div>

<?php require '_footer.html'; ?>
</body>
</html>