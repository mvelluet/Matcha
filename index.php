<?php  
session_start();
if (isset($_SESSION['USER'])) {
	if ($_SESSION['USER'] === TRUE) {
		header('location: profil.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/app.js"></script>
</head>
<body class="mike_fd">
	<header>
		<nav>
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Matcha</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="waves-effect waves-light modal-trigger" href="#inscription">Inscription</a></li>
					<li><a class="waves-effect waves-light modal-trigger" href="#connexion">Connexion</a></li>
				</ul>
			</div>
		</nav>
		<nav class="hide-on-large-only">
			<div class="nav-wrapper container">
				<ul id="nav-mobile" class="right">
					<li><a class="waves-effect waves-light modal-trigger" href="#inscription">Inscription</a></li>
					<li><a class="waves-effect waves-light modal-trigger" href="#connexion">Connexion</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<br>
	<br>
	<!-- Modal -->
	<!-- Connexion -->
	<div id="connexion" class="modal">
		<div class="modal-content">
			<h4>Connexion <i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_LOGIN_CO" type="text" class="validate">
							<label id="UTI_LOGIN_CO_LABEL" for="UTI_LOGIN">Login</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_PWD_CO" type="password" class="validate">
							<label id="UTI_PWD_CO_LABEL" for="UTI_PWD">Mot de passe</label>
						</div>
					</div>
					<script type="text/javascript">
						$(document).keypress(function (e) {
							if (e.which == 13) {
								check_submit_connexion(e);
							}
						});
					</script>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<!-- <a href="javascript:connexion();"  class="modal-action waves-effect waves-green btn">Se connecter</a> -->
			<input type="submit" class="modal-action waves-effect waves-green btn" onKeyPress="return checkSubmit(event)" name="" value="Se connecter">
		</div>
	</div>
	<!-- Inscription -->
	<div id="inscription" class="modal">
		<div class="modal-content">
			<h4>Inscription <i class="material-icons right modal-action modal-close btn-flat"">close</i></h4>
			<div class="row">
				<form class="col s12" id="inscription">
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_LOGIN" type="text" onblur="check_inscription(this, 3, 25);" class="validate">
							<label id="UTI_LOGIN_LABEL" for="UTI_LOGIN">Login</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_NOM" type="text" onblur="check_inscription(this, 2, 25);" class="validate">
							<label id="UTI_NOM_LABEL" for="UTI_NOM">Nom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_PRENOM" type="text" onblur="check_inscription(this, 2, 25);" class="validate">
							<label id="UTI_PRENOM_LABEL" for="UTI_PRENOM">Prénom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_PWD" type="password" onblur="check_inscription(this, 7, 512);" class="validate">
							<label id="UTI_PWD_LABEL" for="UTI_PWD">Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_PWD2" type="password" onblur="check_inscription(this, 7, 512);" class="validate">
							<label id="UTI_PWD2_LABEL" for="UTI_PWD2">Vérification du mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="UTI_MAIL" type="email" onblur="check_inscription(this, 0, 140);" class="validate">
							<label id="UTI_MAIL_LABEL" for="UTI_MAIL" data-success="OK !" data-error="L'email ne semble pas valide !">Email</label>
						</div>
					</div>
					<script type="text/javascript">
						$(document).keypress(function (e) {
							if (e.which == 13) {
								check_submit_inscription(e);
							}
						});
					</script>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:inscription();" class="modal-action waves-effect waves-green btn">s'inscrire</a>
		</div>
	</div>
	<!-- Slider -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="img/couple-1.jpg"> <!-- random image -->
				<div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="img/couple-2.jpg"> <!-- random image -->
				<div class="caption left-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="img/couple-3.jpg"> <!-- random image -->
				<div class="caption right-align">
					<h3>Right Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
		</ul>
	</div>
	<!-- carte Large -->
	<div class="row">
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l3 xl2">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="img/photo.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>
	<!--  Scripts -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.modal').modal();
			$('.slider').slider();
		});
	</script>

</body>
</html>