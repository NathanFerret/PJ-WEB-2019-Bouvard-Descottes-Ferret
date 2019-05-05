<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> ECE Amazon panier </title>  
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="Piscine.css"> 
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">            
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>  
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
	<div class="testa">
		<div class="row">           
			<div class="blocvendeur" id="tab2">   
				<table  class="bandeaubloc">
					<tr><td><h2 class="feature-title"> Résumé de votre panier</h2></td></tr>
					<tr class="corpsbloc">
						<td>
							<div class="caseitem">
								<table  class="tableauimage">
									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>
								</table>
							</div>
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>

							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>	
							<div class="caseitem">
								<table  class="tableauimage">

									<tr>
										<td>
											<img src="photo_profil.png">
										</td>
										<td>Prix</td>
									</tr>

								</table>
							</div>								
						</td>
					</tr>
				</table>


			</div>


			<div class="listpanier" id="tab" >
				<table>

					<tr>
						<td>Code de réduction</td>
						<td><input type="text" name="Réduction" value=""/></td>
					</tr>

					<tr>
						<td>Prix</td>
						<td><input type="text" name="Prix" value=""/></td>
					</tr>

					<td><input type="submit" class="button" value="Commander"/></td>
					<td></td>
				</tr>
			</table>

		</div>
	</div>
	<br>
</div>






</body>
<footer class="footer" >
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