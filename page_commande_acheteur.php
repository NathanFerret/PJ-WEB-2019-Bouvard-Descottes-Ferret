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
	<script>             
	$(document).ready(function(){ 
		$(".hide").hide();
		$(".show").hide();
		
		$("#checkbo1").click(function(){                  
		$(".hide").toggle();
		$("#checkbo2").toggle();
		$("#bo").toggle();
		});

		$("#checkbo2").click(function(){                  
		$(".show").toggle(); 
		$("#checkbo1").toggle();
		$("#ba").toggle();                  
		});
	});

		
</script>    
</head>

<body>
	<nav class="navbar navbar-expand-md">      
		<a class="navbar-brand" href="#"><img src="logo mini tr.png"></a>         
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
			<span class="navbar-toggler-icon"></span>        
		</button>       
		<div class="collapse navbar-collapse" id="main-navigation">     	
			<ul class="navbar-nav">             
				<li class="nav-item">
					<a class="nav-link" href="page_panier.php">Vente Flash</a>
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
</body>
<div class="testa">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-12">
			<div class="colonne1">
				<tr>
					<br><br>
					<h5 class="ft_title">Coordonnées</h5>
					<br>
					<td>Nom</td>
					<td><input type="text" name="Nom" value=""/></td>
					<br><br>
					<td>Prenom</td>
					<td><input type="text" name="Prenom" value=""/></td>
					<br><br>
					<td>Adresse ligne 1</td>
					<td><input type="text" name="Adresse ligne 1" value=""/></td>
					<br><br>
					<td>Adresse ligne 2</td>
					<td><input type="text" name="Adresse ligne 2" value=""/></td>
					<br><br>
					<td>Ville</td>
					<td><input type="text" name="Ville" value=""/></td>
					<br><br>
					<td>Code postal</td>
					<td><input type="text" name="Code postal" value=""/></td>
					<br><br>
					<td>Numéro de téléphone</td>
					<td><input type="text" name="Numéro de téléphone" value=""/></td>
					<br><br>
				</tr>
			</div>
			<br>
		</div>

		<div class="col-lg-1 col-md-1 col-sm-12"></div>

		<div class="col-lg-5 col-md-5 col-sm-12">
			<div class="colonne">
				<form name="form" action="finaliser la commande.php" method="post">
					<tr>
						<br><br>
						<h6 class="ft_title">Moyen de paiement</h6>
						<td><input type="checkbox" id="checkbo1" class="checkbo" name="CarteBancaire"/><h8 id="ba">Carte bancaire</h8></td>
						<br><br>

						<td><input type="text" class="hide" name="TitulaireCarte"/><h8 class="hide">Titulaire de la carte</h8></td>
						<br><br>

						<td><input type="text" class="hide" name="NumeroCarte"/><h8 class="hide">Numéro de carte</h8></td>
						<br><br>

						<td class="mail"><input type="text" class="hide" name="Cryptogramme"/><h8 class="hide">Cryptogramme</h8></td>
						<br><br>

						<td class="mail2"><input type="text" class="hide" name="DateExpiration"/><h8 class="hide">Date d'expiration</h8></td>
						<br><br><br>

						<td><input type="checkbox" id="checkbo2" class="checkbo" name="ChequeCadeau"/><h8 id="bo">Chèque cadeau</h8></td>
						<br><br>

						<td><input type="text" class="show" name="CodeCheque"/><h8 class="show">Code du chèque</h8></td>
						<br><br><br>
					</tr>
					<tr>
						<td><input type="submit" class="button" value="Finaliser la commande"/></td>
					</tr>
				</form>
			</div>
			<br>
		</div>

		<div class="col-lg-1 col-md-1 col-sm-12"></div>
	</div>
</div>



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