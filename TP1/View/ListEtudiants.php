<!DOCTYPE html>
<html>
<head>
	<title>ListEtudiant</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="ListEtudiants.php">Gestion des Etudiants</a></li>
			<li><a href="ListAdministrateur.php">Gestion des Administrateur</a></li>
		</ul>
	</nav>
	<div class="container spacer">
		<div class="panel panel-primary">
			<div class="panel-heading">Liste des Etudiants</div>
			<div class="panel-body">
				<a href="Menu.php" class="btn btn-success">MENU</a>
				<table class="table table-bordered table-striped">
					<tr>
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
					</tr>
					

						</table>
			</div>
		</div>
	</div>
</body>
</html>