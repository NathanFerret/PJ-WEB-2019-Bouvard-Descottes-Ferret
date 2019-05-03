<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title> ECE Amazon </title>  
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="Piscine.css"> 
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">            
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>  
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
</head>

<body>

	<div class="image">
		<img src="logo.png">
	</div>

	<div class="row">
	<div class="col-lg-5 col-md-5 col-sm-12">
		<div class="colonne1">
			<form name="form" action="sub.php" method="post">
				<tr>
				<p><b>Inscription</b></p>
				<td>Nom</td>
				<td><input type="text" name="Nom" value=""/></td>
				<br><br>
				<td>Prenom</td>
				<td><input type="text" name="Prenom" value=""/></td>
				<br><br>
				<td>Pseudo</td>
				<td><input type="text" name="Pseudo" value=""/></td>
				<br><br>
				<td>Email</td>
				<td><input type="text" name="email" value=""/></td>
				<br><br>
				<td>Mot de passe</td>
				<td><input type="text" name="Motdepasse" value=""/></td>
				<br><br>
				<td>Pays</td>
				<td><input type="text" name="pays" value=""/></td>
				<br><br>
				<td>Adresse ligne 1</td>
				<td><input type="text" name="Adresseligne1" value=""/></td>
				<br><br>
				<td>Adresse ligne 2</td>
				<td><input type="text" name="Adresseligne2" value=""/></td>
				<br><br>
				<td>Ville</td>
				<td><input type="text" name="Ville" value=""/></td>
				<br><br>
				<td>Code postal</td>
				<td><input type="text" name="Codepostal" value=""/></td>
				<br><br>
				<td>Numéro de téléphone</td>
				<td><input type="text" name="Numérodetéléphone" value=""/></td>
				<br><br>
				</tr>
				<tr>
					<td><input type="submit" name="butt" value="Inscription"/></td>
				</tr>
			</form>
		</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-12"></div>
	

	<div class="col-lg-5 col-md-5 col-sm-12">
		<div class="colonne2">
			<form name="form" action="login.php" method="post">
				<tr>
				<p><b>Connexion</b></p>
				<td><input type="text" name="PseudoCo" value=""/>
				</td><td>Pseudo</td>
				<br><br>
				<td><input type="text" name="MotdePasseCo" value=""/></td>
				<td>Mot de passe</td>
				<br><br>
				</tr>
				<tr>
					<td><input name="butt" type="submit" value="Connexion"/></td>
				</tr>
			</form>
		</div>
	</div>
	</div>
</body>