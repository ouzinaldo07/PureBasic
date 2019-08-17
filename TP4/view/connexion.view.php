<?php 
	include('partials/_header.php');
	
	$form = new Formulaire();

	echo $form->startForm("container col-md-offset-4 col-md-3 well spacer", "Formulaire Connexion", "");

	echo $form->input("login", "Login");
	echo $form->password("mdp", "Mot de passe");
	echo $form->reset("Inscription", "inscription.php");
	echo $form->submit("connexion", "Connexion");

	echo $form->endForm();

	include('partials/_footer.php');
 ?>