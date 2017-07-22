<?php 
require '_header.html';
?>
<style type="text/css">
.jumbotron 
{
	margin-top: -5vh
}
.jumbotron img {
	left:0;
	right: 0;
	margin: auto;
}


.a-button-inner {
	background-color: #F4D17D;
	padding: 15px
}
.dropdown-menu
{
	margin-left: 45vw
}
.dropdown-toggle {
	border-radius: 20px;
}
a:hover{
    text-decoration: none;
}

.cc {
	right: 0;
	left: 0;
	margin-left: 20vw;
}
.w {
	border: 1px solid transparent;
	transition: all 0.2s linear;
}
.w h3{
	color: black;
	transition: all 0.2s linear;
}
.w p{
	color: gray
}
.w:hover {
	background-color: rgba(224,224,224,.3);
	border-radius: 5px;
	border: 1px solid rgb(224,224,224);
	cursor:pointer
}
.w:hover h3{
	color: orange;
}

</style>

<div class="jumbotron">
    <div class="container aa text-center">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/08/associates/BIT/1button/1bav2logo._CB314819233_.png" class="img-responsive"><br>
        <p style="font-size: 18px;color: black">Achetez plus malin en ligne</p>

        <div class="dropdown">
		  <button class="a-button-inner dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class=""><img src="http://icons.iconarchive.com/icons/marcus-roberto/google-play/256/Google-Chrome-icon.png" height="30"> <a href="https://chrome.google.com/webstore/detail/amazon-assistant-for-chro/pbjikboenpfhbbejgkoklgkhjpfogcam" style="color: black">Installer maintenant pour Google Chrome</a></span><span class="caret"></span></button>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><a href="https://chrome.google.com/webstore/detail/amazon-assistant-for-chro/pbjikboenpfhbbejgkoklgkhjpfogcam">Installer pour Google Chrome</a></li>
		    <li><a href="https://addons.mozilla.org/firefox/downloads/latest/337359/addon-337359-latest.xpi">Installer pour Mozilla Firefox</a></li>
		    <li><a href="https://d1h5tuq46hrbzn.cloudfront.net/aa/AmazonAssistant-FR.msi">Installer pour Internet Explorer</a></li>
		    <li><a href="https://www.microsoft.com/store/apps/9nblggh4vgbl">Installer pour Microsoft Edge</a></li>
		  </ul>
		</div>
		<br>
		<p style="font-size: 12px;color: grey">En cliquant sur 'Installer maintenant', vous acceptez les Conditions d'utilisation.</p>
    </div>
</div>

<div class=" row cc">
	<div class="col-md-5 col-xs-6 col-sm-4">
		<div class="">
			<p style="font-size: 18px;color: grey;padding-left: 10px"><b>Amazon Assistant</b> vous aide à prendre des décisions avisées pour vos achats en ligne.</p>
		</div>
		<div class="w" id="w">
			<h3>Mises à jour sur les commandes et plus</h3>
			<p>Restez informé de vos livraisons et ne ratez aucune offre.</p>
		</div>
		<div class="w">
			<h3>Comparateur de produits</h3>
			<p>Surveillez les comparaisons de produits pouvant vous faire gagner du temps et économiser de l'argent.</p>
		</div>
		<div class="w">
			<h3>Liste d'envies universelle</h3>
			<p>Enregistrez les produits de n'importe quel site Internet avec l'onglet Liste d'envies d'Assistant.</p>
		</div>
		<div class="w">
			<h3>Raccourcis</h3>
			<p>Gagnez du temps. L'Assistant vous propose des raccourcis vers des destinations Amazon populaires dans votre navigateur.</p>
		</div>
	</div>
	<div class="col-md-4 col-xs-6 col-sm-6">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" style="width: 300px;height: 500px">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/click-amazon._CB272522638_.jpg" height="467" width="361">
		    </div>

		    <div class="item">
		      <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/rtn._CB285123512_.jpg" height="467" width="318">
		    </div>

		    <div class="item">
		      <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/pcomp._CB292913815_.jpg" height="467" width="318">
		    </div>
		    <div class="item">
		      <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/uwl._CB505835854_.jpg" height="467" width="318">
		    </div>
		    <div class="item">
		       <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/bookmark._CB505835823_.jpg" height="467" width="318">
		    </div>
		    <div class="item">
		      <img alt="" src="https://images-na.ssl-images-amazon.com/images/G/08/associates/BIT/1BAv2/BITPortal/desktop-notif._CB506312173_.png" height="467" width="318">
		    </div>
		  </div>

		</div>
	</div>
</div>

<?php 
require '_footer.html';
?>


