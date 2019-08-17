<?php 

	/**
	 * 
	 */
	class FormInscription extends Formulaire
	{
		public function formRow($class)
		{
			return '<div class="row">
						<div class="'.$class.'">';
		}

		public function betweenRowForm($class)
		{
			return '	</div>
						<div class="'.$class.'">';
		}

		public function endFormRow(){
			return '	</div>
					</div>';
		}
		
	}
 ?>