 <?php 

	include('partials/_header.php');

	echo $form->design("col-md-3");

		echo $form->startFormUser("container col-md-4 col-md-offset-3  well spacer", "Information de ".$user->login);
			$form->printInfo("col-xs-6", "NOM : ", $user->nom);
			$form->printInfo("col-xs-6", "PRENOM : ", $user->prenom);
			$form->printInfo("col-xs-6", "EMAIL : ", $user->email);
			$form->printInfo("col-xs-6", "TELEPHONE : ", $user->tel);
			echo $form->reset("Deconnecter", "index.php");
			echo $form->reset("Pub","pub.php");
		    echo $form->endFormUser();

	echo $form->betweenDesign("col-md-8");
		
	echo $form->endDesign();
	
	include('partials/_footer.php');
 ?>