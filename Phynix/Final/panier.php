<?php
session_start();
include "ClassPanier.php";
require '_header.html';

$panier=new panier ();
$produits=$panier-> showCart();

?>

<div class="row">
  <div class="col-md-4">
    <h2>Shopping Cart</h2>
  </div>
  <div class="col-md-4" style="text-align:center">
      <p style="color:grey; margin-top:35px;float:right">Quantity</p>
    <p style="color:grey; margin-top:35px; margin-left:120px">Price</p>

  </div>
</div>
<hr>
<section>
  <div class="container py-3">
    <div class="card">
      <?php foreach ($produits as $prod): ?>
        <?php $item =  $DB->query("SELECT * FROM produits WHERE id= $prod" ) ; ?>
        <?php foreach ($item as $i): ?>
      <div class="row ">
        <div class="col-md-2">
          <?php echo'<img alt="100%x180" data-src="holder.js/100%x180" style="width: 100%; display: block;"
                src="data:image;base64,'.$i->image.'" data-holder-rendered="true">'; ?>
          </div>
          <div class="col-md-3 px-3">
            <div class="card-block px-3">
              <p  style="color:black" class="card-text"> <?php echo $i->description ?> </p>
              <a href="http://localhost/AmazonClone/panier.php?delete">Delete</a>
            </div>
          </div>
          <div class="col-md-3 px-3">
            <h4 style="float:right; color:black; margin-right:120px" name="price">  <?php echo $i->price ?> </h4>
            <h4 style="margin-left:270px;  color:black " name="quantity"><?php echo $i->stock ?></h4>
            </div>



        </div>
   <?php endforeach ?>
<?php endforeach ?>
        <div class="col-md-3 pc-3" style="float:right">
          <div class="container-fluid">
            <div class="jumbotron" style="margin-bottom:10px; height:300px; width:350px">
              <div class="container">
                <h3 style="color:black">Subtotal</h3>
                <p><a class="btn btn-primary btn-lg" href="" role="button">Proceed to checkout</a></p>
              <p style="color:black; font-size:12px; border-top:1px solid black; text-align:center"> <a href="signIn.html">SignIn</a>  to turn On 1-Click ordering.</p>
              </div>

          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require '_footer.html'; ?>
