<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['username']))
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location:signIn.php');
  exit();
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Amazon Clone.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.js">

    </script>

  </head>
  <body>
<header>
  <div class="outer">
    <span>
      <img src="image/1.jpg" alt="brand" height="50px" width="50px" style=" margin-top:5px; margin-left:100px" >
      <img src="image/ima.jpg" alt="brand" height="50px" width="50px" style=" margin-top:5px;margin-left:200px" >
      <img src="image/images.jpg" alt="brand" height="50px" width="50px" style="margin-top:5px;margin-left:300px" >
      <img src="image/im.jpg" alt="brand" height="50px" width="50px" style=" margin-top:5px;margin-left:400px" >
    </span>

  </div>
  <img src="image/logo.png" alt="brand" height="50px" width="200px" style="float:left; margin-top:10px" >
  <div class="container main">
      <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
  		    <div class="input-group">
                  <div class="input-group-btn search-panel">
                      <button type="button" class="btn filtrer dropdown-toggle" data-toggle="dropdown">
                      	<span id="search_concept">Clothing, shoes, jewlery</span> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#contains">Contains</a></li>
                        <li><a href="#its_equal">It's equal</a></li>
                        <li><a href="#greather_than">Greather than ></a></li>
                        <li><a href="#less_than">Less than < </a></li>
                        <li class="divider"></li>
                        <li><a href="#all">Anything</a></li>
                      </ul>
                  </div>
                  <input type="hidden" name="search_param" value="all" id="search_param">
                  <input type="text" class="form-control" name="x" placeholder="Search term...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
              </div>
          </div>
  	</div>
  </div>



  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Departments</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Your Amazon.com <span class="sr-only">(current)</span></a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Today's list <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Profile</a></li>
              <li><a href="index.php">Log Out <?php session_destroy() ;?></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
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
<div class="row">
  <div class="col-md-3 col-xs-6">
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
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="container-fluid">
      <div class="card" style="width: 20rem; margin-top:20px; margin-bottom:10px">
        <img class="card-img-top" src="image/watch.jpg" alt="Card image cap" style="width:255px; height:300px">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <a href="#">Shop watches</a>

        </div>

      </div>

    </div>
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="container-fluid">
      <div class="card" style="width: 20rem; margin-top:20px; margin-bottom:10px">
        <img class="card-img-top" src="image/pc.jpg" alt="Card image cap" style="width:255px; height:300px">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <a href="#">Explore All Amazon Basics</a>
        </div>

      </div>

    </div>
  </div>
  <div class="col-md-3 col-xs-6">
    <div class="container-fluid">
      <div class="card" style="width: 20rem; margin-top:20px; margin-bottom:10px">
        <img class="card-img-top" src="image/dress.jpg" alt="Card image cap" style="width:255px; height:300px">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <a href="#">Shop women's dresses</a>

        </div>

      </div>

    </div>
  </div>

</div>


<footer>
  <div class="first">
    <div class="container first">
      <p style="font-size:14px">Back to top</p>
    </div>

  </div>
  <div class="last">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
        <h4><b>Get To Know Us</b></h4>
        <h5>Sell on Amazon</h5>
        <h5>Buy on Amazon</h5>
        <h5>Credit Card Marketplace</h5>
        <h5>Amazon Currency Converter</h5>
        </div>
        <div class="col-md-4">
          <h4><b>Make Money with us</b></h4>
          <h5>Sell on Amazon</h5>
          <h5>Buy on Amazon</h5>
          <h5>Self Publish with Us</h5>
          <h5>Become an Affliate</h5>
        </div>
        <div class="col-md-4">
        <h4><b>Let Us Help you</b></h4>
          <h5>Sell on Amazon</h5>
          <h5>Buy on Amazon</h5>
          <h5>Your Account</h5>
          <h5>Your Order</h5>
        </div>

      </div>
    </div>

 <hr class="styler">
<div class="container lang">
  <div class="row">
    <div class="col-md-6">
      <img src="image/logo.png" alt="bottomLogo" width="110px" height="50px" style="margin-left:400px; margin-top:20px">
    </div>
    <div class="col-md-6">
        <button class="bottom-but"><span class="glyphicon glyphicon-globe">English</span></button>
        <button class="bottom-but"><span class="glyphicon glyphicon-blackboard">United States</span></button>
    </div>
  </div>

</div>



    </div>
    <div class="service">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3">
          <h5>Sell on Amazon</h5>
          <h6>Cloud storage from Amazon</h6>
          </div>
          <div class="col-md-3">
            <h5>Sell on Amazon</h5>
            <h6>Cloud storage from Amazon</h6>

          </div>
          <div class="col-md-3">
            <h5>Sell on Amazon</h5>
            <h6>Cloud storage from Amazon</h6>
          </div>
          <div class="col-md-2">
            <h5>Sell on Amazon</h5>
            <h6>Cloud storage from Amazon</h6>
          </div>
        </div>
        <center>
        <p>Terms and Conditions</p>
      </center>
      </div>
    </div>
</footer>
  </body>
</html>
