<?php 
function ft_check_connexion()
{
	$_POST['UTI_LOGIN'] = strtolower($_POST['UTI_LOGIN']);
	$_POST['UTI_PWD'] = ft_crypt_pwd($_POST['UTI_PWD']);
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM UTILISATEUR WHERE UTI_LOGIN = ? AND UTI_PWD = ?"); 
	$stmt->execute(array($_POST['UTI_LOGIN'], $_POST['UTI_PWD']));
	$res = $stmt->fetchAll();
	$i = 0;
	if (!empty($res))
	{
		if (!strcmp($res[0]['UTI_LOGIN'],$_POST['UTI_LOGIN'])) {
			if (!strcmp($res[0]['UTI_PWD'],$_POST['UTI_PWD'])) {
				if (!strcmp($res[0]['UTI_ACTIF'], "1")) {
					$_SESSION['USER'] = TRUE;
					$_SESSION['USER_ID'] = $res[0]['UTI_ID'];
					$_SESSION['UTI_LOGIN'] = $res[0]['UTI_LOGIN'];
					$_SESSION['UTI_NOM'] = $res[0]['UTI_NOM'];
					$_SESSION['UTI_PRENOM'] = $res[0]['UTI_PRENOM'];

					$i++; // RAS
				}
				$i++; // Vous devez valider votre e-mail4
			}
			$i++; // Mot de passe ou Utilisateur inconnu3
		}
		$i++; // Mot de passe ou Utilisateur inconnu2
	}
	$i++; // Aucun utilisateur enregistré1
	$conn = null;
	if ($i >= 1) {
		$arr = array('MESSAGE_ERROR' => 'Mot de passe ou Utilisateur inconnu');
		if ($i >= 2) {
			$arr = array('MESSAGE_ERROR' => 'Mot de passe ou Utilisateur inconnu');
			if ($i >= 3) {
				$arr = array('MESSAGE_ERROR' => 'Mot de passe ou Utilisateur inconnu');
				if ($i >= 4) {
					$arr = array('MESSAGE_ERROR' => 'Vous devez valider votre e-mail');
					if ($i >= 5) {
						$arr = array('MESSAGE_ERROR' => 'OK !');
					}
				}
			}
		}
	}
	$res = array_merge($res, $arr);
	echo(json_encode($arr));
}

?>

