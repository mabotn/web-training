<?php
require '_header.html';

$idProduit = $_GET['id'];
$produits =  $DB->query("SELECT * FROM produits WHERE id= '$idProduit'" ) ;
$vu = "UPDATE produits SET vu = vu+1 WHERE id=$idProduit";
$DB->update($vu);
?>

    <style type="text/css">


fieldset, label { margin: 0; padding: 0; }

h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 


.fadeOut:hover {
  cursor: crosshair;
}
    </style>

  <body>

  <!-- container -->
  <div class="container">
<?php foreach ($produits as $prod): ?>
<?php $produitsCategorie = $prod->categorie ; $x = $prod->id;?>
    <div class="row">
      <div class="col-md-4 fadeOut">
        <div class="thumbnail" style="margin-top: 20px;">
        <?php echo'<img alt="100%x180" data-src="holder.js/100%x180" style="width: 100%; display: block;"
              src="data:image;base64,'.$prod->image.'" data-holder-rendered="true" id="zoom1" onmousemove="zoomIn(event)" onmouseout="zoomOut()">'; ?>
              
        </div>
      </div>
      <div id="preview" onmousemove="zoomIn(event)" style="position: absolute;z-index: 999;right: 0 "></div> 
      <div class="col-md-7">
        <h2><?= $prod->name ;?></h2>
        <div class="details row">
          <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" class="star" rat="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
              
              <input type="radio" id="star4" name="rating" class="star" rat="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
              
              <input type="radio" id="star3" name="rating" class="star" rat="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
              
              <input type="radio" id="star2" name="rating" class="star" rat="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
              
              <input type="radio" id="star1" name="rating" class="star" rat="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
              
          </fieldset>
          Rate : <?php
          if ($prod->total != 0)
            {
              echo number_format($prod->rate/$prod->total,1,',','');
            }
          else
            echo "0";
          echo '<p style="font-size:10px; color:rgba(0,0,0,.7);">'.$prod->total.' Voters';
          ?>
          <div class="col-md-2">
            <i class="fa fa-eye" aria-hidden="true"><?= $prod->vu?></i>
          </div>
        </div>
        <hr>
        <div class="desc">
          <?= $prod->description ;?>
          <br>
          
        </div>
        <br>
        <div class="price">
         <span>Price:</span><?=$prod->price;?>TND &nbsp&nbsp<s><?=$prod->price + 120;?> TND</s>
       </div><br>
        <button style="background: linear-gradient(to bottom,#f5d78e,#eeb933);border-radius: 2px;" type="button" name="button" id="submit"><i class="fa fa-shopping-cart"></i> Add to card</button>
      </div>
    </div>
<?php endforeach ?>
    <hr><!-- hr -->

    <div class="row text-center" id="slider-text">
        <h2>See similar products</h2>
    </div>

<style type="text/css">
  #preview{
  margin-top: 10px;
  border: 1px solid;
  width:350px;
  height:500px;
  background-repeat: no-repeat;
  margin-left: auto;
  margin-right: auto;
  transform: scale(1.5);
  background-color: white;
  visibility: hidden;
  border-radius: 30px 30px 30px 30px; 
}
#samples{
  text-align: center;
}
#samples img {  
  margin: 10px;
  display: block;
   border: 2px solid #6A6462;
}
#samples img:hover {
   cursor: zoom-in;
   border: 0;
   -moz-box-shadow:2px 2px 7px 2px rgba(130,130,130,1),-1px -1px 7px 2px rgba(130,130,130,1);
  -webkit-box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-1px -1px 7px 2px rgba(130,130,130,1);
  box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-2px -2px 7px 2px rgba(130,130,130,1);
}
@media screen and (max-width: 767px){
  #samples img {
    display: inline-block;
  }
}
</style>



<script type="text/javascript">
  function zoomIn(event) {
  var pre = document.getElementById("preview");
  pre.style.visibility = "visible";
  if ($('#zoom1').is(':hover')) {
        var img = document.getElementById("zoom1");
    pre.style.backgroundImage = "url('<?php echo 'data:image;base64,'.$prod->image.'';?>')";
    }
  var posX = event.offsetX;
  var posY = event.offsetY;
  posY = posY -170 ;
  posX = posX - 100;
  pre.style.backgroundPosition=(-posX*2.5)+"px "+(-posY*5.5)+"px";

}

function zoomOut() {
  var pre = document.getElementById("preview");
  pre.style.visibility = "hidden";
}

</script>

<!-- search for items in the same categorie -->
<?php 
$sql = "SELECT * FROM produits WHERE categorie like '%$produitsCategorie%' ORDER BY vu desc LIMIT 10";
$result = $DB->query($sql);
?>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          <div class="item active">

          </div>
          
          <?php foreach ($result as $prodC): ?>
          <div class="item">
            <div style="width: 10vw;height: 10vh"></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="productDetails.php?id=<?= $prodC->id;?>&?nameOfType=<?= $prodC->categorie;?>"><?php echo'<img src="data:image;base64,'.$prodC->image.'" class="img-responsive center-block fadeOut" style="margin:20px auto">'; ?></a>
              <h4 class="text-center"><?= $prodC->name ;?></h4>
              <h5 class="text-center"><?=$prodC->price;?> TND </h5>
            </div>
          </div>
          <div class="item">
            <div style="width: 10vw;height: 10vh"></div>
          </div>
          <?php endforeach ?>
        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive" hidden="true"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>

  </div>
  <!-- container end -->

  <!-- script for data binding -->
  <script type="text/javascript">
$(".star").click(function(e) {
   $.ajax({
        url: 'rating.php',
        type: 'POST',
        data: {
            rate: $(this).attr("rat"),
            id: <?= $x?>
            //$_POST['yourData']
        },
        success: function() {
            alert('success' + rate);
        },
        error: function() {
            alert('fail' + rate);
        }
    });
});
  </script>
<?php
require '_footer.html';
?>
