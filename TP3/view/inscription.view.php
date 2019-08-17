<?php 
	include('partials/_header.php');
	
	$form = new FormInscription();

	echo $form->startForm("container col-md-offset-4 col-md-4 jumbotron spacer", "Formulaire Inscription", "inscription.php");

	echo $form->formRow("col-md-6");
	echo $form->input("nom", "Nom");
	echo $form->betweenRowForm("col-md-6");
	echo $form->input("prenom", "Prénom");
	echo $form->endFormRow();

	echo $form->formRow("col-md-6");
	echo $form->input("email", "Email");
	echo $form->betweenRowForm("col-md-6");
	echo $form->input("tel", "Téléphone");
	echo $form->endFormRow();

	echo $form->formRow("col-md-6");
	echo $form->input("login", "Login");
	echo $form->betweenRowForm("col-md-6");
	echo $form->password("mdp", "Mot de passe");
	echo $form->endFormRow();

	echo $form->formRow("col-md-offset-4");
	echo $form->reset("Connexion", "index.php");
	echo $form->submit("ajouter", "S'inscrire");
	echo $form->endFormRow();

	echo $form->endForm();

	include('partials/_footer.php');


 ?>