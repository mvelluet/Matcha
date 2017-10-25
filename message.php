<?php 
session_start();
if ($_SESSION['USER'] !== TRUE) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/materialize.js"></script>
</head>
<body class="mike_fd">
	<header>
		<nav>
			<div class="nav-wrapper container">
				<a href="#" class="left brand-logo">Matcha</a>
				<ul id="nav-mobile" class="right">
					<li><a href="#deconnexion"><i class="material-icons right modal-action modal-close btn-flat">power_settings_new</i></a></li>
					<li><a class="modal-trigger" href="#menu"><i class="material-icons right modal-action modal-close btn-flat">settings</i></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<br>
	<br>
	<br>

	<br>
	<!-- Modal -->
	<!-- Menu -->
	<div id="menu" class="modal">
		<div class="modal-content">
			<h4>Paramètre<i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
			<div class="row">
				<div class="col s12">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<input id="nom" type="text" class="validate">
								<label for="nom">Nom</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="prenom" type="text" class="validate">
								<label for="prenom">Prénom</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" class="validate">
								<label for="password">Mot de passe</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password2" type="password" class="validate">
								<label for="password2">Vérification du mot de passe</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email" data-error="L'email ne semble pas correct" data-success="OK !">Email</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Modifier</a>
		</div>
	</div>

	<nav class="container">
		<div class="nav-wrapper ">
			<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
			<p class="left mike_center_horizontal hide-on-med-and-down">Mike Velluet</p>
			<p class="left mike_center_horizontal hide-on-large-only">Mike</p>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class="mike_inline_icone_notif mike_padding_left_7" href=""><i class="material-icons">star</i><span class="badge white-text">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_7" href="#visite">Visite(s)<span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_7" href="#like">Mes like(s)<span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="mike_padding_left_7" href="message.html">Message(s)<span class="new badge" data-badge-caption="">4</span></a></li>	
			</ul>
			<ul id="nav-mobile" class="right hide-on-large-only hide-on-small-only">
				<li><a class="mike_padding_left_12 mike_inline_icone_notif" href=""><i class="material-icons">star</i><span class="new white-text" data-badge-caption="">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_12 mike_inline_icone_notif" href="#visite"><i class="material-icons">remove_red_eye</i><span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_12 mike_inline_icone_notif" href="#like"><i class="material-icons"><i class="material-icons">person_add</i></i><span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="mike_padding_left_12 mike_inline_icone_notif" href="message.html"><i class="material-icons">message</i><span class="new badge" data-badge-caption="">4</span></a></li>
			</ul>
		</div>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<nav class="container hide-on-med-and-up">
		<div class="nav-wrapper container">
			<ul id="nav-mobile">
				<li><a class="mike_padding_left_7 mike_inline_icone_notif" href=""><i class="material-icons">star</i><span class="white-text badge" data-badge-caption="">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_7 mike_inline_icone_notif" href="#visite"><i class="material-icons">remove_red_eye</i><span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="modal-trigger mike_padding_left_7 mike_inline_icone_notif" href="#like"><i class="material-icons"><i class="material-icons">person_add</i></i><span class="new badge" data-badge-caption="">4</span></a></li>
				<li><a class="mike_padding_left_7 mike_inline_icone_notif" href="message.html"><i class="material-icons">message</i><span class="new badge" data-badge-caption="">4</span></a></li>
			</ul>
		</div>
	</nav>
	<!-- modal -->
	<!-- visite -->
	<div id="visite" class="modal">
		<div class="modal-content">
			<h4>Mes visites<i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
			<div class="row hide-on-small-only">
				<br>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 right">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
			</div>
			<div class="row hide-on-med-and-up">
				<br>
				<div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div><div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- like -->
	<div id="like" class="modal">
		<div class="modal-content">
			<h4>Matcha !<i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
			<div class="row hide-on-small-only">
				<br>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 right">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
			</div>
			<div class="row hide-on-med-and-up">
				<br>
				<div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div><div class="col s12">
					<div class="col s12 left">
						<div class="left mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="container">
			<div class="mike_ligne_photo_chat" id="mike_scrollbar_chat">
				<a href="membre.html" class="mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></a>
				<a href="membre.html" class="mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></a>
				<a href="membre.html" class="mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></a>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="container">
			<div class="card-panel grey lighten-5 z-depth-1">
				<h4>Mes conversation(s)</h4>
				<br>
				<div class="row">
					<br>
					<div class="col s12">
						<a href="#message" class="modal-trigger">
							<div class="col s4 m2">
								<div class="mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
							</div>
							<div class="col s8 m10">
								<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
							</div>
						</a>
					</div>
					<div class="col s12">
						<a href="#message" class="modal-trigger">
							<div class="col s4 m2">
								<div class="mike_carre" style="background-image: url(img/small_mvelluet.jpg)"></div>
							</div>
							<div class="col s8 m10">
								<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
	<!-- conversation -->
	<div id="message" class="modal">
		<div class="modal-content">
			<h4>Conversation avec Mike<i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
			<div class="row">
				<br>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 right">
						<div class="left mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<div class="col s4 left">
						<div class="left mike_rond_chat" style="background-image: url(img/small_mvelluet.jpg)"></div>
					</div>
					<div class="col s8">
						<div class="card-panel lighten-7 z-depth-1"><p style="margin: 0px;">Mike Velluet - 25 - Paris - #Tag #Tag..</p></div>
					</div>
				</div>
				<div class="col s12">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" type="text" class="materialize-textarea validate"></textarea>
								<label for="first_name">Message</label>
							</div>
							<div class="input-field col s3">
								<a class="waves-effect waves-light btn">Envoyer</a>
							</div>
						</div>
					</form>
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
	    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
	    $('.modal').modal();
	});
</script>
</body>
</html>