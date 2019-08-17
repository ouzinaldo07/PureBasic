<?php 
	session_start();
	$title = "Page utilisateur";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	include('partials/_header.php');
	chargerMesClasses();

	$form = new FormUsers();
	$user = $_SESSION['validate_user'];

	echo $form->startFormUser("container col-md-offset-4 col-md-3 well spacer", "Information de ".$user->login);
		$form->printInfo("col-md-6", "NOM : ", $user->nom);
		$form->printInfo("col-md-6", "PRENOM : ", $user->prenom);
		$form->printInfo("col-md-6", "EMAIL : ", $user->email);
		$form->printInfo("col-md-6", "TELEPHONE : ", $user->tel);
		echo $form->reset("Deconnecter", "index.php");
	echo $form->endFormUser();

	include('partials/_footer.php');
 ?>