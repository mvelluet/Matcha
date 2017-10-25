<?php 
function ft_check_register()
{
	$conn = ft_connexion_database();
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT UTI_LOGIN, UTI_MAIL FROM UTILISATEUR"); 
	$stmt->execute();
	$res = $stmt->fetchAll();
	if (isset($res))
	{
		foreach ($res as $key => $value) 
		{
			if ($value['UTI_LOGIN'] === strtolower($_POST['UTI_LOGIN']))
			{
				$conn = null;
				return ('Le Login existe déjà');
			}
			if ($value['UTI_MAIL'] === strtolower($_POST['UTI_MAIL'])) 
			{
				$conn = null;
				return ('l\'e-mail existe déjà');
			}	
		}
		$conn = null;
		return (3);
	}
	$conn = null;
	return (4);
}
?>