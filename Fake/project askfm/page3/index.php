<?php
  session_start();
    $db = mysqli_connect('35.160.127.179','fake','true7102','fake');

  $result = $db->query("SELECT asked_by,quest FROM questions");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img id="logo" src="ASKfm-logo.svg.png" alt="askfm"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li id="flux"><a href="#">Flux</a></li>
        <li id="questions"><a href="#">Questions</a></li>
        <li id="profil" class="active"><a href="#">Profil</a></li>
        <li ><a id="amis" href="#">Amis</a></li>
        <li id="notifications"><a href="#">Notifications</a></li>
        <li ><a href="#"> <span  class="fa fa-cog "></span> </a></li>
        <li ><a href="#"><span  class="fa fa-plus-square"></span> </a></li>
        <li ><a href="#"><?php echo $_SESSION['id']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="jumbotron cover text-center">
  <img class="ask" src="ask-01.jpg" alt="ask">
  <span class="" id="imaage"><img id="useer"src="avatar.png" alt="user" style="opacity: 0.7;
    filter: alpha(opacity=50);"></span>
  <p id="name">wafa klabi</p>
  <p id="userid">@wafaklabi</p>
  <div class="profile-label">
    <span class="abonne">
      Abonnés:
      <strong>0</strong>
    </span>
  </div>
</div>
<div class="row">
  <div id="question" class="col-md-8" style="margin-left:15px">
    <form class="" action="ajoutquest.php" method="post">
      <h3>Poser une question à @wafaklabi :</h3>
      <textarea id="text" name="ques" placeholder="Quoi, quand, pourquoi..pose une question" >  </textarea>


      <button id="demander" class="btn pull-right" style="margin-bottom: 18px ; margin-top:5px" type="submit" name="submit">Demander</button>
    </form>

  </div>
  <!--......................................-->
  <div class="col-md-3 propos shit">
    <span><b >A propos de moi </b></span>


      <a href="#" ><i class="fa fa-pencil bhemaLoun" aria-hidden="false"></i> Modifier le profil...</a>

    <div >

      <a href="#" ><i class="  bhemaLoun fa fa-user" aria-hidden="true"></i>Raconte nous quelque chose sur toi...</a>
    </div>

    <div >
      <a href="#" ><i class="  bhemaLoun fa fa-map-marker  " aria-hidden="true"></i>Ajoute un emplacement...</a>
    </div>

    <div >
      <a href="#" ><i class="  bhemaLoun fa fa-link " aria-hidden="true"></i>Ajoute des liens web ...</a>
    </div>

  <div>
      <a href="#" ><i class="  bhemaLoun fa fa-gratipay" aria-hidden="true"></i>Ajoute des intérêts...</a>
  </div>

</div>
<!--....................................................................................-->
</div>
<!--............................................................................-->
<div class="row">

  <div class="col-md-8 text-align:center" style="background-color:white; margin-left:16px">
    <div class="main__header" style="text-align:center ">
      Questions
    </div>
    <?php
    while($row = $result->fetch_array()) {
    echo '<div class="quest"><h1>'. $row["asked_by"]. '</h1><br><p>' . $row["quest"].'</p><br><br><div class="aime"><a  href="#" role = "button"><i id="heart" class="fa fa-heart fa-3 " aria-hidden="true"  onclick="couleur()"></i></a> </div></div>' ;
          }
    ?>
<script type="text/javascript">
  var heart = document.getElementById('heart')
  function couleur() {
    heart.style.color= "red"

}
</script>



</div>
<div class="col-md-3 ">

  <div class="gif" style="line-break:break all">
  <iframe  id ="thisImg" src="https://giphy.com/embed/QEEwcJM5SiL2o" width="270" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/owl-QEEwcJM5SiL2o"></a></p>

    </div>

<div class="aide">
  <a href="#">A propos de ASKfm</a>
  <a href="#">Centre de sécurité</a>
  <a href="#">Aide</a>
  <a href="#">Directives de la communauté</a>
  <a href="#">Conditions d'utilisation</a>
  <a href="#">Politique de confidentialité</a>
  <a href="#">Politique relative aux cookies</a>
  <a href="#">Publicité</a>
  <div class="social">
    <a  href="#"><img class="owl" src="owl.png" alt="ask.fm"></a>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-vk"></a>
    <hr align="center" id="line" >
    <i id="copy"class="fa fa-copyright" aria-hidden="true" ></i>
   <p class="copyr"> Ask.fm 2017</p>
</div>
  </div>
</div>
</div>


</body>
</html>
