<?php
include 'ft_connexion_database2.php';
function ft_information_profil()
{
	$conn = ft_connexion_database2();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM INFORMATION WHERE INF_ID = ?"); 
	$stmt->execute(array($_SESSION['USER_ID']));
	$res = $stmt->fetchAll();

	$conn = NULL;
	return ($res);
}

// ft_information_sexe();
// ft_information_orientation();
// ft_information_age();
// ft_information_search_sexe();
// ft_information_search_orientation();
// ft_information_search_age_d();
// ft_information_search_age_f();
// TODO
?>