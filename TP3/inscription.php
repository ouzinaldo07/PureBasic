<?php 
	$title = "Inscription";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	chargerMesClasses();

	$db = new Database();

	if (isset($_POST['ajouter'])) {
		extract($_POST);
		if (notEmpty([$nom, $prenom, $email, $tel, $login, $mdp])) {

			$user = new Users($nom, $prenom, $email, $tel, $login, $mdp);

			if($db->addUser($user)){
				header('Location: index.php');
			}else{
				message("Erreur d'ajout");
			}
			
		}
		else{
			message("Veuillez remplir tous les champs");
		}
	}


	require('view/inscription.view.php');
?>