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
		<a class="navbar-brand" href="page_acheteur.php"><img src="logo_mini_tr.png"></a>         
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
			<span class="navbar-toggler-icon"></span>        
		</button>       
		<div class="collapse navbar-collapse" id="main-navigation">     	
			<ul class="navbar-nav">             
				<li class="nav-item">
					<form name="forme" action="page_produits.php" method="post"> 
						<input type='text' style='display: none;' class="nav-link"  name ='cat' value="Vente Flash" readonly>
						<input type="submit" class="nav-link"  name="cate" value="Vente Flash" style="border: 0px solid #5c8940;
						background: transparent; cursor: pointer;  color: #FFFFFF;">
					</form>
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
					<?php

					$database = "projetpiscine";
					$db_handle  = mysqli_connect ('localhost', 'root', '');  
					$db_found=mysqli_select_db ($db_handle ,$database ) ;
					$sess=$_SESSION['Login'];

					$sql="SELECT * FROM utilisateur WHERE pseudo = '$sess'";
					$result = mysqli_query($db_handle, $sql);
					$db_field = mysqli_fetch_assoc($result);

					$sqle="SELECT * FROM adresse INNER JOIN utilisateur ON adresse.idAdresse = utilisateur.idAdresse WHERE utilisateur.pseudo = '$sess'";
					$resulte = mysqli_query($db_handle, $sqle);
					$db_fielde = mysqli_fetch_assoc($resulte);

					echo '<td>Nom</td>';
					echo '<td><input type="text" name="nom" value='.$db_field["nom"].' ></td>';
					echo '<br><br>';
					echo '<td>Prénom</td>';
					echo '<td><input type="text" name="prenom" value='.$db_field["prenom"].'></td>';
					echo '<br><br>';
					echo '<td>Adresse (ligne1)</td>';
					echo '<td><input type="text" name="adresse1" value="'.$db_fielde["adresse1"].'""></td>';
					echo '<br><br>';
					echo '<td>Adresse (ligne2)</td>';
					echo '<td><input type="text" name="adresse2" value="'.$db_fielde["adresse2"].'""></td>';
					echo '<br><br>';
					echo '<td>Ville</td>';
					echo '<td><input type="text" name="Ville" value="'.$db_fielde["ville"].'""></td>';
					echo '<br><br>';
					echo '<td>Code Postale</td>';
					echo '<td><input type="text" name="CP" value='.$db_fielde["codePostal"].'></td>';
					echo '<br><br>';
					echo '<td>Numéro de téléphone</td>';
					echo '<td><input type="text" name="numtel" value="'.$db_field["numeroTel"].'""></td>';
					echo '<br><br>';
					?>
				</tr>
			</div>
			<br>
		</div>

		<div class="col-lg-1 col-md-1 col-sm-12"></div>

		<div class="col-lg-5 col-md-5 col-sm-12">
			<div class="colonne">

				<tr>
					<br><br>
					<h6 class="ft_title">Moyen de paiement</h6>
					<td><input type="checkbox" id="checkbo1" class="checkbo" name="CarteBancaire"/><h8 id="ba">Carte bancaire</h8></td>
					<br><br>

					<form name="form" method="post" action =commande_acheteur.php>

						<td><input type="text" class="hide" name="TitulaireCarte"/><h8 class="hide">Titulaire de la carte (Mr/Mme Prénom NOM)</h8></td>
						<br><br>

						<td><input type="text" class="hide" name="NumeroCarte"/><h8 class="hide">Numéro de carte (0000000000000000 sans espaces ni tirets !)</h8></td>
						<br><br>

						<td class="mail"><input type="text" class="hide" name="Cryptogramme"/><h8 class="hide">Cryptogramme</h8></td>
						<br><br>

						<td class="mail2"><input type="text" class="hide" name="DateExpiration"/><h8 class="hide">Date d'expiration (année/mois/jour)</h8></td>
						<br><br>

						<tr>
							<td><input type="submit" class="hide" class="button" value="Finaliser la commande par CB"/></td>
						</tr>

						<br><br><br>

					</form>

					<td><input type="checkbox" id="checkbo2" class="checkbo" name="ChequeCadeau"/><h8 id="bo">Chèque cadeau</h8></td>
					<br><br>

					<td><input type="text" class="show" name="CodeCheque"/><h8 class="show">Code du chèque</h8></td>
					<br><br>

					<tr>
						<td><input type="submit" class="show" class="button" value="Finaliser la commande par chèque cadeau"/></td>
					</tr>
				</tr>

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