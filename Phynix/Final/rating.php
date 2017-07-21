<?php
require '_header.html';
$rate = $_POST['rate'];
$id = $_POST['id'];
$sql = "UPDATE produits SET rate = rate + $rate WHERE id=$id";
$sql1 = "UPDATE produits SET total = total + 1 WHERE id=$id";

$DB->update($sql);
$DB->update($sql1);