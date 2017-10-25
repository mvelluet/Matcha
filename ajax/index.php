<?php 
session_start();
include '../php/ft_crypt_pwd.php';
include '../sql/ft_connexion_database.php';

include '../sql/ft_create_user.php';
include '../sql/ft_check_register.php';
include '../sql/ft_check_login_exist.php';
include '../sql/ft_check_mail_exist.php';

include '../sql/ft_check_connexion.php';

if (isset($_GET['UTI_LOGIN'])) {
	ft_check_login_exist();
}
if (isset($_GET['UTI_MAIL'])) {
	ft_check_mail_exist();
}
if ($_POST["INSCRIPTION"] === "INSCRIPTION") {
	$ret = ft_check_register();
	if ($ret === 3) {
		ft_create_user();
	}
}
if ($_POST["CONNEXION"] === "CONNEXION") {
	ft_check_connexion();
}
?>