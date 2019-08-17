 <?php 

	include('partials/_header.php');

	echo $form->design("col-md-3");

		echo $form->startFormUser("container col-md-4 well spacer", "Information de ".$user->login);
			$form->printInfo("col-md-6", "NOM : ", $user->nom);
			$form->printInfo("col-md-6", "PRENOM : ", $user->prenom);
			$form->printInfo("col-md-6", "EMAIL : ", $user->email);
			$form->printInfo("col-md-6", "TELEPHONE : ", $user->tel);
			echo $form->reset("Deconnecter", "index.php");
		echo $form->endFormUser();

	echo $form->betweenDesign("col-md-8");
		echo $form->startFormUser("container col-md-8 well spacer", "Liste des utilisateurs");
			$form->startTable("Identifiant", "Nom", "Prenom", "Email", "Telephone", "Login");
				foreach ($allUsers as $people) {
					echo '<tr>';
						echo '<td>'.$people->id.'</td>';
						echo '<td>'.$people->nom.'</td>';
						echo '<td>'.$people->prenom.'</td>';
						echo '<td>'.$people->email.'</td>';
						echo '<td>'.$people->tel.'</td>';
						echo '<td>'.$people->login.'</td>';
						echo $people->status == '1'
								?'<td><a href="#" class = "btn btn-success" >Déja validé</a></td>' 
								: '<td><a href="admin.php?id='.$people->id.'" class = "btn btn-info" >Valider</a></td>';
					echo '</tr>';
				}
			$form->endTable();
		echo $form->endFormUser();
	echo $form->endDesign();
	
	include('partials/_footer.php');
 ?>