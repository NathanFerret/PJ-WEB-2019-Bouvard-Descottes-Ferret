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
	<div class="testa">
		<div class="image">
			<img src="logo.png">
		</div>

		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="colonne1">
					<form name="form" action="sub.php" method="post">
						<tr>
							<p><h5 class="ft_title">Inscription</h5></p>
							<td>Nom</td>
							<td><input type="text"  name="Nom" value="Default"/></td>
							<br><br>
							<td>Prenom</td>
							<td><input type="text"  name="Prenom" value="Default"/></td>
							<br><br>
							<td>Pseudo</td>
							<td><input type="text"  name="Pseudo" value="Default"/></td>
							<br><br>
							<td>Email</td>
							<td><input type="text"  name="email" value="Default"/></td>
							<br><br>
							<td>Mot de passe</td>
							<td><input type="password"  name="Motdepasse" value="Default"/></td>
							<br><br>
							<td>Pays</td>
							<td><input type="text"  name="pays" value="France"/></td>
							<br><br>
							<td>Adresse ligne 1</td>
							<td><input type="text"  name="Adresseligne1" value="Default"/></td>
							<br><br>
							<td>Adresse ligne 2</td>
							<td><input type="text"  name="Adresseligne2" value="None"/></td>
							<br><br>
							<td>Ville</td>
							<td><input type="text"  name="Ville" value="Default"/></td>
							<br><br>
							<td>Code postal</td>
							<td><input type="text"  name="Codepostal" value="00000"/></td>
							<br><br>
							<td>Numéro de téléphone</td>
							<td><input type="text"  name="Numérodetéléphone" value="0000000000"/></td>
							<br><br>
						</tr>
						<tr>
							<td><input type="submit" class="button" name="butt" value="Inscription"/></td>
						</tr>
					</form>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-12"></div>


			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="colonne2">
					<form name="form" action="login.php" method="post">
						<tr>
							<p><h6 class="ft_title">Connexion</h6></p>
							<td><input type="text" name="PseudoCo" value=""/>
							</td><td>Pseudo</td>
							<br><br>
							<td><input type="password" name="MotdePasseCo" value=""/></td>
							<td>Mot de passe</td>
							<br><br>
						</tr>
						<tr>
							<td><input name="butt" type="submit" class="button" value="Connexion"/></td>
						</tr>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>