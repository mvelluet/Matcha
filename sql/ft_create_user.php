<?php
function ft_create_user()
{
	$UTI_LOGIN = strtolower($_POST['UTI_LOGIN']);
	$UTI_NOM = strtolower($_POST['UTI_NOM']);
	$UTI_PRENOM = strtolower($_POST['UTI_PRENOM']);
	$UTI_PWD = ft_crypt_pwd($_POST['UTI_PWD']);
	$UTI_MAIL = strtolower($_POST['UTI_MAIL']);
	$UTI_CLE = md5(microtime(TRUE)*154723);;
	$UTI_ACTIF = 1;
	
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("
		INSERT INTO `UTILISATEUR`
		(
		`UTI_NOM`,
		`UTI_PRENOM`,
		`UTI_LOGIN`,
		`UTI_PWD`,
		`UTI_MAIL`,
		`UTI_CLE`,
		`UTI_ACTIF`
		) 

		VALUES (?, ?, ?, ?, ?, ?, ?);"
	);
	$stmt->execute(array($UTI_NOM, $UTI_PRENOM, $UTI_LOGIN, $UTI_PWD, $UTI_MAIL, $UTI_CLE, $UTI_ACTIF));

	$stmt = $conn->prepare("SELECT MAX(UTI_ID) FROM UTILISATEUR");
	$stmt->execute();
	$res = $stmt->fetchAll();
	$stmt = $conn->prepare("INSERT INTO `INFORMATION`
		(
		`INF_ID`,
		`INF_SEXE`,
		`INF_AGE`,
		`INF_ORIENTATION`,
		`INF_SEARCH_SEXE`,
		`INF_SEARCH_AGE_D`,
		`INF_SEARCH_AGE_F`,
		`INF_SEARCH_ORIENTATION`,
		`INF_BIO`,
		`INF_SCORE`,
		`INF_GEOLOCATION`,
		`INF_TAG`,
		`INF_IMAGE`,
		`INF_CONNECTE`,
		`INF_MESSAGE`,
		`INF_BLOQUER`,
		`INF_VUE`
		) 

		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
	);
	$stmt->execute(array($res[0]["MAX(UTI_ID)"],'H', 18, 'Bi', 'F', 18, 100, 'Bi', "", 0, $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"], $res[0]["MAX(UTI_ID)"]));
	$conn = null;
	// ft_send_mail($UTI_NOM, $UTI_MAIL, $UTI_CLE);
}
?>