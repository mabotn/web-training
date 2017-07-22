<?php
require '_header.html';
$id = $_GET['id'];
$sqlVu = "UPDATE produits SET vu = vu + 1 WHERE id=$id";
$DB->update($sqlVu);
?>
