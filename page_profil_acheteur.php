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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md">      
		<a class="navbar-brand" href="page_acheteur.php"><img src="logo_mini_tr.png"></a>        
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
			<span class="navbar-toggler-icon"></span>        
		</button>       
		<div class="collapse navbar-collapse" id="main-navigation">     	
			<ul class="navbar-nav">             
				<li class="nav-item">
					<a class="nav-link" href="page_produit.php">Vente Flash</a>
				</li>            
				<li class="nav-item">
					<a class="nav-link" href="page_profil_acheteur.php">Votre compte</a>
				</li>          
				<li class="nav-item">
					<a class="nav-link" href="page_vendeur.php">Vendre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="page_panier.php">Panier</a>
				</li>         
			</ul>       
		</div> 
	</nav> 
	<div class="testa">
		<div class="row">          
			<div class="list"id="tab"> 
				<h2 class="ft_title">Coordonnées</h2>
				<form method="post" action="profil_acheteur.php">
					<table>

						<tr>
							<td>Nom</td>
							<td><input type="text" name="nom" ></td>
						</tr>
						<tr>
							<td>Prénom</td>
							<td><input type="text" name="prenom"></td>
						</tr>
						<tr>
							<td>Adresse mail</td>
							<td><input type="text" name="e-mail"></td>
						</tr>
						<tr>
							<td>Adresse (ligne1)</td>
							<td><input type="text" name="adresse1"></td>
						</tr>
						<tr>
							<td>Adresse (ligne2)</td>
							<td><input type="text" name="adresse2"></td>
						</tr>
						<tr>
							<td>Ville</td>
							<td><input type="text" name="Ville"></td>
						</tr>
						<tr>
							<td>Code Postale</td>
							<td><input type="text" name="CP" value=""></td>
						</tr>
						<tr>
							<td>Pays</td>
							<td><input type="text" name="Pays"></td>
						</tr>
						<tr>
							<td>Numéro de téléphone</td>
							<td><input type="text" name="numtel"></td>
						</tr>
						<tr>
							<td><input type="submit" class="button" name="Validation" value="Valider"></td>
						</tr>

					</table>
				</form>
			</div>           
			<div class="blocimages" id="historique">
				<h2 class="ft_title">Historique des Achats</h2>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
				</ul>
				<br>
				<br>
				<?php
				$sess=$_SESSION['Login'];
				echo "<form name='form' action='page_profil_vendeur.php' method='post'>";
				echo "<input type='text' style='display: none;' name ='pseudo' value=".$sess." readonly>";
				echo "<input type='submit' class= 'button' value='Aller sur le profil du vendeur' /> ";
				echo "</form>";
				?>
			</div>
		</div>
		<br>
	</div>





</body>

<footer class="footer">
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-12">
			<div class="image">
				Mail :<br>
				<img src="logo_mail.png">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12">
			<div class="mail">
				nathan.ferret@edu.ece.fr<br>
				guillaume.bouvard@edu.ece.fr<br>
				martin.descottes@edu.ece.fr<br>
			</div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12"></div>
		<div class="col-lg-1 col-md-1 col-sm-12">
			<div class="copyright">
				&copy ECE PARIS 2019
			</div>
		</div>
	</div>
</footer>
</html>