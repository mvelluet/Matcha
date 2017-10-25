<?php
function ft_modification_nom() 
{
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare('UPDATE UTILISATEUR SET UTI_NOM=? WHERE UTI_ID=?');
	$stmt->execute(array($_POST['UTI_NOM'], $_SESSION['USER_ID']));
	$conn = null;
}

function ft_modification_prenom()
{
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("UPDATE UTILISATEUR SET UTI_PRENOM=? WHERE UTI_ID=?");
	$stmt->execute(array($_POST['UTI_PRENOM'], $_SESSION['USER_ID']));
	$conn = null;
}

function ft_modification_pwd()
{
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("UPDATE UTILISATEUR SET UTI_PWD=? WHERE UTI_ID=?");
	$stmt->execute(array($_POST['UTI_PWD'], $_SESSION['USER_ID']));
	$conn = null;
}

function ft_modification_mail()
{
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("UPDATE UTILISATEUR SET UTI_MAIL=? WHERE UTI_ID=?");
	$stmt->execute(array($_POST['UTI_MAIL'], $_SESSION['USER_ID']));
	$conn = null;
}
?>