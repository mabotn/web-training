<?PHP
include "user.php";
include "config.php";
$user = new user($_POST['username'],$_POST['email'],$_POST['password'],1);
$c=new config();
$conn=$c->getConnexion();
$user->ajouter($user,$conn);
session_start();
$_SESSION['username'] = $_POST['username'];
header("location:index.php");
?>
