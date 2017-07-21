<?php
include "user.php";
include "config.php";
/*session_start();


     // username and password sent from form
     $c=new config();
     $conn=$c->getConnexion();
     $myusername = $_POST['email'];
     $mypassword = $_POST['password'];
     $f=new user('a','b','c',1);
     $result=$f->verifier($myusername,$mypassword,$conn);
    foreach ($result as $res){
      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
      $active = $row['active'];
       $count = mysqli_num_rows($result);
      session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      var_dump($_SESSION);
      $username=$res['username'];
      var_dump($username);
    // header("location:index.html");

  }


     // If result matched $myusername and $mypassword, table row must be 1 row

  /*   if($count == 1) {


        header("location: index.php");
     }else {
        $error = "Your Login Name or Password is invalid";
     }*/
  // Definition des constantes et variables
  $c=new config();
  $conn=$c->getConnexion();
  $myemail = $_POST['email'];
  $mypassword = $_POST['password'];
  $f=new user('a','b','c',1);
   $result=$f->verifier($myemail,$mypassword,$conn);
   $notif=0;

    foreach ($result as $res){
    $notif=1;
    $username=$res['username'];
        session_start();
        // On enregistre le login en session
        $_SESSION['username'] = $username;
        // On redirige vers le fichier admin.php
      header("location:index.php");
    }
    if($notif==0){
      header("location:signIn.html");
    }





?>
