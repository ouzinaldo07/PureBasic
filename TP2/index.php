<!DOCTYPE html>
<html>
<head>
	<title>titre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css">
</head>
<body>
<?php
                  include "form.php";
				   $form=new Formulaire("moussa","diouf");

?>
	     
			  <form data-parsley-validate  method="POST" action="info.php" class="well col-md-6 col-md-offset-3" autocomplete="off"> <!--col-md-offset-3-->
			    <?php
			            
			          echo $form->input($form->username);
			          echo $form->inpute($form->password);
			          echo $form->submit();
			          echo $form->reset();

				?>
				</form>


</body>
</html>
			
		
	 