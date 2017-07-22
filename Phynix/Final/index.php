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
    echo '  <div class="col-md-4 col-xs-6" style="height:300px">
    <div class="container-fluid">
      <div class="jumbotron" style="height:300px">
        <div class="container" style="text-align:center">
          <h2 style="color:black">Welcome</h2>
          <p style="color: black; font-size: 11px">Sign in for best experience</p>
          <p><a class="btn btn-primary btn-lg" href="signIn.html" role="button">Sign In Securely</a></p>
          <p style="color: black; font-size: 11px; margin-top:95px;">New To Amazon?<br><a href="register.html">Start here</a></p>
        </div>

      </div>
      <div style="height: 300px;background-color: white;">
      <img src="image/sale.png" height="260" width="300" class="fadeOut">
      </div>
    </div>
  </div>';
  else
    echo '  <div class="col-md-4 col-xs-6" style="height:300px">
    <div class="container-fluid">
      <div class="jumbotron" style="height:300px">
        <div class="container" style="text-align:center">
          <h2 style="color:black">Welcome <br><br>'.strtoupper($_SESSION['username']).'</h2>
          <br>
          <p><a class="btn btn-primary btn-lg" href="logout.php" role="button">LOG OUT</a></p>
        </div>

      </div>
      <div style="height: 300px;background-color: white;">
      <img src="image/sale.png" height="260" width="300" class="fadeOut">
      </div>
    </div>
  </div>';
?>
<?php 
$res =  $DB->query($selectcateg);
?>
  
<div class="col-md-4 col-xs-4 col-sm-4" style="background-color: #F6F6F5; border-radius: 1%;height: 580px">
  <div class="row">
  <h3 style="text-align: center;border-bottom: 1px solid rgba(224,224,224,.8)">OUR PRODUCTS</h3>
  <?php $x = 0; foreach ($res as $type) :?>
    <div class="col-md-4 col-xs-4 col-sm-4" style="margin: 25px">
      <center>
      <?php echo '<a href="products.php?nameOfType='.$type->nom.'"><img class="fadeOut" src="data:image;base64,'.$type->image.'" style="border-radius: 100%;background-color:white;padding:3px;" width="120" height="120">';$x+=1;?></center></a>
      <caption><h3 style="margin-left: 34px;font-size: 18px"><?= $type->nom;?></h3></caption>
      </center>
    </div>
<?php if($x==2)
echo '</div><div class="row">';?>
<?php endforeach ?>

  </div>
  <p style="border-top: 1px solid rgba(224,224,224,.8);color:black;font-size: 12px;text-align: center"><button class="btn btn-default btn-block" style="margin-top: 15px;font-size: 17px">See more</button></p> 
</div>

<div class="col-md-4 col-xs-4 col-sm-4" style="padding-left: 60px">
  <div class="row" style="height: 300px;background-color: black; margin-bottom: 5px ">
    <a href="assistant.php"><img src="image/ads1.png" height="300" width="360" class="fadeOut"></a>
  </div>
  <div class="row" style="height: 300px;background-color: white;">
    <a href="productDetails.php?id=17"><img src="image/ads2.png" height="250" width="360" class="fadeOut"></a>
  </div>
</div>

	</div>
</div>




    
<?php require '_footer.html'; ?>
</body>
</html>