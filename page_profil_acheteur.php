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
	<div class="testa">
		<div class="row">          
			<div class="list"id="tab"> 
				<h4 class="title">Photos de profil et couverture</h4>
				<form method="post" action="profil_acheteur.php">
				<br>
				<?php

					$database = "projetpiscine";
  					$db_handle  = mysqli_connect ('localhost', 'root', '');  
  					$db_found=mysqli_select_db ($db_handle ,$database ) ;
  					$sess=$_SESSION['Login'];

  					$sql="SELECT * FROM utilisateur WHERE pseudo = '$sess'";
  					$result = mysqli_query($db_handle, $sql);
  					$db_field = mysqli_fetch_assoc($result);
  					echo "<img src=".$db_field['imageDeFond']." height='176' width='501'/>";
  					echo '<br>';
  					echo '<td><input type="text" name="photo_couverture" value='.$db_field["imageDeFond"].' ></td>';
  					echo '<br><br>';
  					echo "<img src=".$db_field['photo']." height='142' width='142'/>";
  					echo '<br>';
  					echo '<td><input type="text" name="photo_profil" value='.$db_field["photo"].' ></td>';
  					echo '<br><br>';

  				?>


				<h4 class="title">Coordonnées</h4>
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

					echo '<table>';
						echo '<tr>';
							echo '<td>Nom</td>';
							echo '<td><input type="text" name="nom" value='.$db_field["nom"].' ></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Prénom</td>';
							echo '<td><input type="text" name="prenom" value='.$db_field["prenom"].'></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Adresse mail</td>';
							echo '<td><input type="text" name="e-mail" value='.$db_field["email"].'></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Adresse (ligne1)</td>';
							echo '<td><input type="text" name="adresse1" value="'.$db_fielde["adresse1"].'""></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Adresse (ligne2)</td>';
							echo '<td><input type="text" name="adresse2" value="'.$db_fielde["adresse2"].'""></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Ville</td>';
							echo '<td><input type="text" name="Ville" value="'.$db_fielde["ville"].'""></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Code Postale</td>';
							echo '<td><input type="text" name="CP" value='.$db_fielde["codePostal"].'></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Pays</td>';
							echo '<td><input type="text" name="Pays" value="'.$db_fielde["pays"].'""></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Numéro de téléphone</td>';
							echo '<td><input type="text" name="numtel" value="'.$db_field["numeroTel"].'""></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td><input type="submit" class="button" name="Validation" value="Valider"></td>';
						echo '</tr>';
					echo '</table>';
					?>
				</form>
			         
			
				
				<?php
				$sess=$_SESSION['Login'];
				echo "<br>";
				echo "<form name='form' action='page_profil_vendeur.php' method='post'>";
				echo "<input type='text' style='display: none;' name ='pseudo' value=".$sess." readonly>";
				echo "<input type='submit' class='button' value='Aller sur le profil du vendeur' /> ";
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