<?php
include "ClassPanier.php";
$panier=new panier ();
var_dump($_GET['id']);
 if(isset($_GET['click'])){
   $res=$panier->addItem($_GET['id']);
    header("Location:panier.php");

   }
   if(isset($_GET['delete'])){
     $res=$panier->removeItem($_GET['id']);
      header("Location:panier.php");

     }

 ?>
