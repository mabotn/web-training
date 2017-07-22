<?php

session_start();

$db= mysqli_connect('35.160.127.179:3306','fake','true7102','fake');

if($db && isset($_POST['submit']))
{
  $result=$db->query("select * FROM asksign where mail='{$_POST['mail']}' AND pass='{$_POST['pass']}'");
  echo $db->error;
  if (mysqli_num_rows($result) >0) {
    $row = $result->fetch_array();
    $id = $row['id'];
    $_SESSION['signed-in'] = true;
    $_SESSION['id'] = $id ;
    header('location: ../page3/index.php');
  }
}




 ?>
