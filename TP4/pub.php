<?php 
	$title = "Publicite";
	include('functions/fonctions.php'); 
	include('functions/constantes.php'); 
	chargerMesClasses();

	$db = new Database();

	$val= new Database();
	$vval=$val->getAllPub();
	$form=new Formulaire();
	$form->corpscontainer();
	foreach($vval as $values){
		echo "<tr>
		<div class='row-md-4'>
		  <div class='col-md-4'>$user->nom</div>;
		   </div>
		   <div class ='row-md-4'>
		     <div class='col-md-4'>$vval->pub</div>
		     </tr>
		     <br> </br>";
	}
	require('view/pub.view.php');
?>