<?php 
	session_start();
	$title = "Page utilisateur";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	chargerMesClasses();

	$db = new Database();
	$form = new FormUsers();
	$user = $_SESSION['validate_user'];

	$allUsers = $db->getAllUsers();

	if (isset($_GET['id'])) {
		if($db->updateUser($_GET['id'])){
			message("Mis a jour avec succes", "success");
		}else{
			message("Erreur de mis a jour");
			header("Location : admin.php");
		}
	}

	require('view/admin.view.php');
 ?>