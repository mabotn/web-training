<?php
  session_start();
  $db = mysqli_connect('35.160.127.179','fake','true7102','fake');
  $db->query("insert into Commentaire values (NULL,'{$_POST['comment']}')");

  header('location: index.php');
 ?>
