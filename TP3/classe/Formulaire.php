<?php 

	/**
	 * 
	 */
	class Formulaire
	{
		const INPUT = "text";
		const PASSWORD = "password";
		const SUBMIT = "submit";
		const EMAIL = "email";
		
		// Cette fonction permet de dessiner le container 
		public function startForm($class, $heading, $action){
			return '<div class="'.$class.'">
 						<div class="panel panel-default">
 							<div class="panel-heading text-center">'.$heading.'</div>
 							<div class="panel-body">
 								<form method="POST" action="'.$action.'">';
		}
		// Cette fonction permet de fermer le container
		public function endForm(){
			return '	</form>
					</div>
				</div>
			</div>';
		}

		protected function champsForm($name,$type = self::INPUT, $libelle = ""){
			if ($type == self::PASSWORD || $type == self::INPUT || $type == self::EMAIL) {
				return '<div class="form-group">
			<lable>'.$libelle
			.'</label>
			<input type="'.$type.'" name="'.$name.'" class="form-control" required>
			</div>';
			}elseif ($type == self::SUBMIT) {
				return '
				<button type="'.$type.'" class="btn btn-success" name="'.$name.'">'.$libelle.'</button>
				';
			}else{
				return '<a href="'.$type.'" class="btn btn-warning">'.$name.'</a>';
			}
		}
		public function input($name, $libelle)
		{
			return $this->champsForm($name, self::INPUT, $libelle);
		}

		public function password($name, $libelle)
		{
			return $this->champsForm($name, self::PASSWORD, $libelle);
		}

		public function submit($name, $libelle)
		{
			return $this->champsForm($name,self::SUBMIT, $libelle);
		}

		public function reset($name, $lien)
		{
			return $this->champsForm($name, $lien);
		}
	}

 ?>