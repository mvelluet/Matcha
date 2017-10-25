<?php 
session_start();
if ($_SESSION['USER'] !== TRUE) {
	header('location: index.php');
}
include 'ajax/ip_adress.php';
get_ip();
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
		<?php include 'header/header.php' ?>
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
								<input id="UTI_NOM" type="text"  class="validate">
								<label id="UTI_NOM_LABEL" for="UTI_NOM">Nom</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="UTI_PRENOM" type="text" onblur="check_inscription(this, 3, 25);" class="validate">
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
								<label id="UTI_MAIL_LABEL" for="UTI_MAIL" data-error="L'email ne semble pas correct" data-success="OK !">Email</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:modification();" class="modal-action waves-effect waves-green btn">Modifier</a>
		</div>
	</div>

		<?php include 'profil/banner_profil.php'; ?>
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
	<?php 
		include 'profil/localisation.php'; 
		include 'profil/information.php'; 
	?>
	

	<!-- modal -->
	<!-- je suis -->
	<!-- INF_ID	
		INF_SEXE	
		INF_AGE	
		INF_ORIENTATION	
		INF_BIO	
	-->
	<div id="iam" class="modal">
		<div class="modal-content">
			<form>
				<h4>Je suis:<i class="material-icons right modal-action modal-close btn-flat">close</i></h4>
				<div class="row">
					<p>Sexe:</p>
					<div class="col s12">
						<p>
							<input name="group1" type="radio" value="H" id="INF_SEXE_H" />
							<label for="INF_SEXE_H">Homme</label>
						</p>
						<p>
							<input name="group1" type="radio" value="F" id="INF_SEXE_F" />
							<label for="INF_SEXE_F">Femme</label>
						</p>
						<br>
					</div>
					<hr>
					<div class="col s12">
						<p>orientation sexuel:</p>
						<p>
							<input name="group2" type="radio" value="He" id="INF_ORIENTATION_HET" />
							<label for="INF_ORIENTATION_HET">Hétérosexuel(le)</label>
						</p>
						<p>
							<input name="group2" type="radio" value="Ho" id="INF_ORIENTATION_HOM" />
							<label for="INF_ORIENTATION_HOM">Homosexuel(le)</label>
						</p>
						<p>
							<input name="group2" type="radio" value="Bi" id="INF_ORIENTATION_BI" />
							<label for="INF_ORIENTATION_BI">Bisexuel(le)</label>
						</p>
						<br>
					</div>
					<hr>
					<div class="col s12">
						<p>Mon âge:</p>
						<div class="input-field inline">
							<input id="INF_AGE" type="number" min="18" max="100" placeholder="18">
						</div>
						<br>
					</div>
					<hr>
					<h4>Je recherche:</h4>
					<div class="col s12">
						<p>Sexe:</p>
						<p>
							<input name="group3" type="radio"  value="H" id="INF_SEARCH_H" />
							<label for="INF_SEARCH_H">Homme</label>
						</p>
						<p>
							<input name="group3" type="radio"  value="F" id="INF_SEARCH_F" />
							<label for="INF_SEARCH_F">Femme</label>
						</p>
						<br>
					</div>
					<hr>
					<div class="col s12">
						<p>Orientation sexuel:</p>
						<p>
							<input name="group4" type="radio" value="He" id="INF_SEARCH_ORIENTATION_HET" />
							<label for="INF_SEARCH_ORIENTATION_HET">Hétérosexuel-le</label>
						</p>
						<p>
							<input name="group4" type="radio" value="Ho" id="INF_SEARCH_ORIENTATION_HET" />
							<label for="INF_SEARCH_ORIENTATION_HET">Homosexuel-le</label>
						</p>
						<p>
							<input name="group4" type="radio" value="Bi" id="INF_SEARCH_ORIENTATION_BI" />
							<label for="INF_SEARCH_ORIENTATION_BI">Bisexuel-le</label>
						</p>
						<br>
					</div>
					<hr>
					<div class="col s12">
						<div class="mike_inline_icone_notif">
							<p class="mike_form_info">Age entre:</p>
							<div class="input-field inline">
								<input id="INF_SEARCH_AGE_D" type="number" min="18" max="100" placeholder="18">
							</div>
							<p class="mike_form_info">et</p>
							<div class="input-field inline">
								<input id="INF_SEARCH_AGE_F" type="number" min="18" max="100" placeholder="100">
							</div>
							<br>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a href="javascript:information();" class="modal-action waves-effect waves-green btn">Modifier</a>
		</div>
	</div>
	<div class="col s12 m8 offset-m2 l6 offset-l3 container">
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="row valign-wrapper">
				<div class="col s12 offset-m2">
					<span class="black-text">
						<h5>Ma bio</h5>
						<form>
							<div class="row">
								<div class="input-field">
									<textarea placeholder="« Belle plume cherche joli crayon de couleur pour écrire ensemble les plus belles pages de notre vie . Dans la joie de nous décrire, Arc-en-Cielement vôtre ! »" id="textarea1" class="materialize-textarea"></textarea>
								</div>
							</div>
						</form>
						<p>Lorem Ipsum</p>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m8 offset-m2 l6 offset-l3 container">
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="row valign-wrapper">
				<div class="col s12">
					<form action="#">
						<div class="file-field input-field">
							<div class="btn">
								<span>File</span>
								<input type="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Ajouter une photo">
							</div>
						</div>
					</form>
					<div class="slider">
						<ul class="slides">
							<li>
								<img src="img/photo.jpg"> <!-- random image -->
								<div class="caption center-align">
								</div>
							</li>
							<li>
								<img src="img/photo.jpg"> <!-- random image -->
								<div class="caption left-align">
								</div>
							</li>
							<li>
								<img src="img/photo.jpg"> <!-- random image -->
								<div class="caption right-align">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m8 offset-m2 l6 offset-l3 container">
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="row valign-wrapper">
				<div class="col s12 offset-m2">
					<span class="black-text">
						<h5>Mes intérêt</h5>
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input placeholder="Ajouter un tag" id="first_name" type="text" class="validate">
										<label for="first_name">#Tag</label>
									</div>
									<div class="input-field col s3">
										<a class="waves-effect waves-light btn">Ajouter</a>
									</div>
								</div>
							</form>
						</div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
						<div class="chip">#Tag<i class="close material-icons">close</i></div>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m8 offset-m2 l6 offset-l3 container">
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="row valign-wrapper mike_margin_zero">
				<div class="col s12">
					
					<a href="#" class="right btn waves-effect waves-light">Signaler</a>
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
	    $('.slider').slider();
	    localisation(); 	
	});
</script>
</body>
</html>