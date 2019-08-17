<?php
	if(isset($_POST['Valider'])){
		//Recuperation des donnees du formulaire
		$matricule= $_POST['matricule'];
		$prenom= $_POST['prenom'];
		$action1= $_POST['action1'];
		$action2= $_POST['action2'];
		$f = fopen("../Etudiant/classe.csv","a");
		$obj = $matricule.";".$prenom.";".$action1.";".$action2."\n"; //contenu du fichier
		fputs($f, $obj);

		header("location:../View/ListAdministrateur.php?ok=true");


?>