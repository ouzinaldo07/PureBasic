<?php 

	/**
	 * 
	 */
	class FormUsers extends FormInscription
	{
		// Cette fonction permet de dessiner le container 
		public function startFormUser($class, $heading){
			return '<div class="'.$class.'">
 						<div class="panel panel-default">
 							<div class="panel-heading text-center">'.$heading.'</div>
 							<div class="panel-body">';
 		}

		// Cette fonction permet de fermer le container
		public function endFormUser(){
			return '</div>
				</div>
			</div>';
		}

		//cette fonction permet d'afficher une information d'un utilisateur
		public function printInfo($class, $name, $value){			
			echo $this->formRow($class).
				'<h5>'.$name.'</h5>'
				.$this->betweenRowForm($class).
				'<h4>'.$value.'</h4>'.
				$this->endFormRow();
		}

		public function startTable($id, $nom, $prenom, $email, $tel, $login){
			echo '<table class="table table-striped table-bordered">
					<thead>
						<th>'.$id.'</th>
						<th>'.$nom.'</th>
						<th>'.$prenom.'</th>
						<th>'.$email.'</th>
						<th>'.$tel.'</th>
						<th>'.$login.'</th>
						<th>Action</th>
					</thead>
					<tbody>
					<tr>
					';
		}

		public function endTable(){
			echo '</tr>
					</tbody>
				</table';
		}

		public function design($class){
			echo '<div class="row">
					<div class=".$class.">';
		}

		public function betweendesign($class){
			echo '</div>
					<div class=".$class.">';
		}

		public function endDesign(){
			echo '</div>
				</div>';
		}
	}
 ?>