<?php 
session_start();
include '../php/ft_crypt_pwd.php';
include '../sql/ft_connexion_database.php';

include '../sql/ft_modify_user.php';

if ($_POST["MODIFICATION"] === "MODIFICATION") {
	if (isset($_POST["UTI_NAME"]) && !empty($_POST["UTI_NAME"])) {
		ft_modification_nom();
	}
	if (isset($_POST["UTI_PRENOM"]) && !empty($_POST["UTI_PRENOM"])) {
		ft_modification_prenom();
	}
	if (isset($_POST["UTI_PWD"]) && !empty($_POST["UTI_PWD"])) {
		ft_modification_pwd();
	}
	if (isset($_POST["UTI_MAIL"]) && !empty($_POST["UTI_MAIL"])) {
		ft_modification_mail();
	}
}

?>