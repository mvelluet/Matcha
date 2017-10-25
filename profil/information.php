<?php
include 'sql/ft_information_profil.php';
$res = ft_information_profil();
echo '<div class="col s12 m8 offset-m2 l6 offset-l3 container">';
echo '	<div class="card-panel grey lighten-5 z-depth-1">';
echo '		<div class="row valign-wrapper">';
echo '			<div class="col s6 offset-m2">';
echo '				<h5>Je suis:</h5>';
echo '				<p>Un' . (($res[0]["INF_SEXE"] === "H") ? "" : "e") . ' ' . (($res[0]["INF_SEXE"] === "H") ? "Homme" : "Femme") . '<p>';
echo '				<p>' . (($res[0]["INF_ORIENTATION"] === "He") ? "Héterosexuelle" : (($res[0]["INF_ORIENTATION"] == "Ho") ? "Homosexuelle" : "Bisexuelle")) . '</p>';
echo '				<p>Age: ' . $res[0]["INF_AGE"] . ' ans</p>';
echo '			</div>';
echo '			<div class="col s6">';
echo '				<h5>Je recherche</h5>';
echo '				<p>Un' . (($res[0]["INF_SEARCH_SEXE"] === "H") ? "" : "e") . ' ' . (($res[0]["INF_SEARCH_SEXE"] === "H") ? "Homme" : "Femme") . '<p>';
echo '				<p>' . (($res[0]["INF_SEARCH_ORIENTATION"] === "He") ? "Héterosexuelle" : (($res[0]["INF_SEARCH_ORIENTATION"] == "Ho") ? "Homosexuelle" : "Bisexuelle")) . '</p>';
echo '				<p>Age entre ' . $res[0]["INF_SEARCH_AGE_D"] . ' et ' . $res[0]["INF_SEARCH_AGE_F"] . ' ans</p>';
echo '			</div>';
echo '		</div>';
echo '		<a href="#iam" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">mode_edit</i></a>';
echo '	</div>';
echo '</div>';
?>