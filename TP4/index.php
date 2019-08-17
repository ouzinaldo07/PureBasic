<?php 
session_start();
	$title = "Connexion";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	chargerMesClasses();

	$db = new Database();

	if (isset($_POST['connexion'])) {
		extract($_POST);
		if (notEmpty([$login, $mdp])) {
			$data = $db->userHasBeenExist($login, $mdp);
			if($data){
				$_SESSION['validate_user'] = $data;
				
					header("Location: admin.php");
			}else{
				message("Login ou mot de passe incorrect <br>");
			}
		}else{
			message("Veuillez remplir tous les champs<br>");
		}
	}

	require('view/connexion.view.php');
?>