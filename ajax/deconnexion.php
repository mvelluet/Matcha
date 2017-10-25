<?php 
session_start();
if ($_GET['DECONNEXION']) {
	session_destroy();
	exit();
}

?>