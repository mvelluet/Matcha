<?php 
function ft_check_mail_exist()
{
	$_GET['UTI_MAIL'] = strtolower($_GET['UTI_MAIL']);
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT UTI_MAIL FROM UTILISATEUR WHERE UTI_MAIL = ?"); 
	$stmt->execute(array($_GET['UTI_MAIL']));
	$res = $stmt->fetchAll();
	echo(json_encode($res));
}
?>