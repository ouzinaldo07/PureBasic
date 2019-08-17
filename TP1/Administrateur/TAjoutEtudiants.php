<?php
	if(isset($_POST['Valider'])){
		//Recuperation des donnees du formulaire
		$nom = $_POST['nom'];
		$prenom= $_POST['prenom'];
		$email= $_POST['email'];
		$tel= $_POST['tel'];
		$f = fopen("../Etudiant/classe.csv","a");
		$obj = $nom.";".$prenom.";".$email.";".$tel."\n"; //contenu du fichier
		fputs($f, $obj);

		header("location:../View/ListEtudiants.php?ok=true");


?>