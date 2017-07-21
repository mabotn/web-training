<?php 
require '_header.html';
?>

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/slide1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="image/slide2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="image/slide3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style type="text/css">
  .btn-primary{
background: #f0c14b;
background: linear-gradient(to bottom,#f7dfa5,#f0c14b);
border-color: #a88734 #9c7e31 #846a29;
color: #111;

border-style: solid;
border-width: 1px;
cursor: pointer;
display: inline-block;
padding: 0;
text-align: center;
text-decoration: none!important;
font-family: "Amazon Ember",Arial,sans-serif;
font-size: 13px;
vertical-align: middle;
box-sizing: border-box;
line-height: 19px;
border-radius: 3px;
text-align: center;
font-size: 13px;
line-height: 29px;

}
</style>

<!-- les catégories -->

<div class="container cat">
	<div class="row">
<?php
  if(!isset($_SESSION['username']))
    echo '  <div class="col-md-3 col-xs-6">
    <div class="container-fluid">
      <div class="jumbotron" style=" margin-top:20px; margin-bottom:10px; height:360px">
        <div class="container">
          <h2 style="color:black">Welcome</h2>
          <p style="color: black; font-size: 11px">Sign in for best experience</p>
          <p><a class="btn btn-primary btn-lg" href="signIn.html" role="button">Sign In Securely</a></p>
          <p style="color: black; font-size: 11px; margin-top:95px;">New To Amazon?<a href="register.html">Start here</a></p>
        </div>

    </div>

    </div>
  </div>';
?>
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