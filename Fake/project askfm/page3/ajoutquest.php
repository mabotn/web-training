<?php
session_start();
  $db = mysqli_connect('35.160.127.179','fake','true7102','fake');

$db->query("insert into questions values (NULL,'{$_POST['ques']}',{$_SESSION['id']})");

header('location: index.php');
 ?>
