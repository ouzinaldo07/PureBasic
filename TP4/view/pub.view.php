<?php 
	include('partials/_header.php');
	
	$form = new FormPub();

	echo $form->startForm("container col-md-offset-4 col-md-4 jumbotron spacer", "Page  Publicite", "pub.php");

	echo $form->formRow("col-md-4");
	echo $form->input("nom", "Nom");
	echo $form->betweenRowForm("col-md-12");
	echo $form->input("publicite", "Publicité");
	echo $form->endFormRow();

	echo $form->endForm();

	include('partials/_footer.php');


 ?>