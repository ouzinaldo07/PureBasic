<!DOCTYPE html>
<html>
<head>
	<title>Ajout Etudiant</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="View/style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="View/ListEtudiants.php">Gestion des Etudiants</a></li>
			<li><a href="View/ListAdministrateur.php">Gestion des Administrateurs</a></li>
		</ul>
	</nav>
 	<div class="row">
 		<div class="col-md-4"></div>
 			<div class="col-md-4">
 			<div class="panel-body">
 				<form action="Administrateur.php" methode="POST">
 					<div class="form-group">
 					
 						<label>Nom</label>
 						<input type="text" name="nom" class="form-control">
 					</div>
 					 <div class="form-group">
 						<label>Prenom</label>
 						<input type="text" name="prenom" class="form-control">
 					
 				    </div>
 					<div class="form-group">
 						<label>Email</label>
 						<input type="text" name="email" class="form-control">
 					</div>
 				
 					<div class="form-group">
 						<label>Tel</label>
 						<input type="text" name="tel" class="form-control">
 					</div>
 				 
 					<button type="submit" name="Valider" class="btn btn-success">Valider</button>
 					<button type="reset" name="retour" class="btn btn-warning">retour</button>
 				</form>
 			</div>
 		</div>
 	</div>
</body>
</html> 