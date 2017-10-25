<?php 
session_start();
include '../sql/ft_connexion_database.php';


var_dump($_POST);

if ($_POST["INFORMATION"] === "INFORMATION") {
	if (isset($_POST["INF_SEXE"]) && !empty($_POST["INF_SEXE"])) {
		ft_information_sexe();
	}
	if (isset($_POST["INF_ORIENTATION"]) && !empty($_POST["INF_ORIENTATION"])) {
		ft_information_orientation();
	}
	if (isset($_POST["INF_AGE"]) && !empty($_POST["INF_AGE"])) {
		ft_information_age();
	}
	if (isset($_POST["INF_SEARCH_SEXE"]) && !empty($_POST["INF_SEARCH_SEXE"])) {
		ft_information_search_sexe();
	}
	if (isset($_POST["INF_SEARCH_ORIENTATION"]) && !empty($_POST["INF_SEARCH_ORIENTATION"])) {
		ft_information_search_orientation();
	}
	if (isset($_POST["INF_SEARCH_AGE_D"]) && !empty($_POST["INF_SEARCH_AGE_D"])) {
		ft_information_search_age_d();
	}
	if (isset($_POST["INF_SEARCH_AGE_F"]) && !empty($_POST["INF_SEARCH_AGE_F"])) {
		ft_information_search_age_f();
	}
}

?>