<?php
require '_header.html';
$idProduit = $_GET['id'];
$produits =  $DB->query("SELECT * FROM produits WHERE id= '$idProduit'" ) ;
$nameCategorie = $_GET['nameOfType'];
$produitsCategorie =  $DB->query("SELECT * FROM produits WHERE categorie like 'watch'") ;
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  <body>

  <!-- container -->
  <div class="container">
<?php foreach ($produits as $prod): ?>
    <div class="row">
      <div class="col-md-4">
        <a href="#" class="thumbnail" style="margin-top: 20px;">
        <?php echo'<img alt="100%x180" data-src="holder.js/100%x180" style="width: 100%; display: block;"
              src="data:image;base64,'.$prod->image.'" data-holder-rendered="true">'; ?>
        </a>
      </div>
      <div class="col-md-7">
        <h2><?= $prod->name ;?></h2>
        <div class="details row">
          <div class="star-rating col-md-3" style="color: yellow;">
             <span class="fa fa-star-o" data-rating="1"></span>
             <span class="fa fa-star-o" data-rating="2"></span>
             <span class="fa fa-star-o" data-rating="3"></span>
             <span class="fa fa-star-o" data-rating="4"></span>
             <span class="fa fa-star-o" data-rating="5"></span>
             <input type="hidden" name="whatever1" class="rating-value" value="2.56">
          </div>
          <div class="col-md-2">
            <i class="fa fa-eye" aria-hidden="true"> <?= $prod->vu ;?></i>
          </div>
        </div>
        <hr>
        <div class="desc">
          <?= $prod->description ;?>
          <br>
          Lorem ipsum dolor sit amet, solet laoreet deseruisse vix ut, cum ad commodo appareat iudicabit. Mutat accusamus urbanitas an his, discere postulant sit at. His ex postea reprehendunt, vel ad erant explicari, sit cu enim fastidii. Nam magna porro eu, choro volumus erroribus ei pro. Ea sea zril percipit iudicabit, ex est delenit offendit consulatu. Duo te agam consul, summo legendos deserunt ius ne. Ius mazim urbanitas in.
        </div>
        <br>
        <div class="price">
         <span>Price:</span> $ <?=$prod->price;?>
       </div><br>
        <button style="background: linear-gradient(to bottom,#f5d78e,#eeb933);border-radius: 2px;" type="button" name="button" id="submit"><i class="fa fa-shopping-cart"></i> Add to card</button>
      </div>
    </div>
<?php endforeach ?>
    <hr><!-- hr -->

    <div class="row text-center" id="slider-text">
        <h2>See similar products</h2>
    </div>


    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel slide" id="itemslider">
        <div class="carousel-inner">
          <div class="item active">

          </div>
          <?php foreach ($produitsCategorie as $prodC): ?>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><?php echo'<img src="data:image;base64,'.$prodC->image.'" class="img-responsive center-block">'; ?></a>
              <h4 class="text-center"><?= $prodC->name ;?></h4>
              <h5 class="text-center"> $ <?=$prodC->price;?></h5>
            </div>
          </div>
          <?php endforeach ?>
        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>


  </div>
  <!-- container end -->
  </body>
