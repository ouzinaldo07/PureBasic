<?php 

// cette fonction permet d'appeler automatiquement les classes
	function chargerClass($nomClass)
	{
		require 'classe/'.$nomClass.'.php';
	}

	function chargerMesClasses(){
		spl_autoload_register('chargerClass');
	}

// cette fonction renvoie true si tous les champs sont remplis sinon elle renvoie false
	function notEmpty($tab = []){
		for ($i=0; $i < count($tab); $i++) { 
			if(empty($tab[$i])){
				return false;
			}
		}
		return true;
	}

	// cette methode permet d'afficher les messages d'erreur
	function message($texte, $type="danger")
	{
		echo '<div class="alert alert-'.$type.' text-center">'.$texte.'</div>';
	}


 ?>