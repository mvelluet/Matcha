<?php 
function ft_check_login_exist()
{
	$_GET['UTI_LOGIN'] = strtolower($_GET['UTI_LOGIN']);
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT UTI_LOGIN FROM UTILISATEUR WHERE UTI_LOGIN = ?"); 
	$stmt->execute(array($_GET['UTI_LOGIN']));
	$res = $stmt->fetchAll();
	echo(json_encode($res));
}
?>