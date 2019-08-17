<!DOCTYPE html>
<html>
<head>
	<title>ListAdministrateur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="ListEtudiants.php">Gestion des Etudiants</a></li>
			<li><a href="ListAdministrateur.php">Gestion des Administrateurs</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class="panel panel-primary">
			<div class="panel-heading">FORMULAIRE ADMINISTRATEUR</div>
			<div class="panel-body">
				<a href="MENU.php" class="btn btn-success">Ajout Etudiant</a>
				<table class="table table-bordered table-striped">
					<tr>
						<div class="form-group">
 					
 						<label>MATRICULE</label>
 						<input type="text" name="matricule" class="form-control">
 					</div>
					<div class="form-group">
 					
 						<label>PRENOM</label>
 						<input type="text" name="prenom" class="form-control">
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