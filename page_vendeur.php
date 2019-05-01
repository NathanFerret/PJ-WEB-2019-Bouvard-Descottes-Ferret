<!DOCTYPE html>
<html>
<head>
	<title> ECE Amazon vendeur </title>  
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
		<a class="navbar-brand" href="#"><img src="logo_mini_tr.png"></a>         
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
			<span class="navbar-toggler-icon"></span>        
		</button>       
		<div class="collapse navbar-collapse" id="main-navigation">     	
			<ul class="navbar-nav">             
				<li class="nav-item">
					<a class="nav-link" href="#">Vente Flash</a>
				</li>            
				<li class="nav-item">
					<a class="nav-link" href="#">Votre compte</a>
				</li>          
				<li class="nav-item">
					<a class="nav-link" href="#">Vendre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Panier</a>
				</li>         
			</ul>       
		</div> 
	</nav> 
	<div class="testa">
		<div class="row">           
			<div class="list" id="tab">
				<form  method="post" action="vendeur.php">
				<table>
					<p><b>Ajouter un article à vendre</b></p>
					<tr>
						<td>Nom du produit</td>
						<td><input type="text" name="Nomprod" value=""/></td>
					</tr>
					<tr>
						<td>Prix</td>
						<td><input type="text" name="Prix" value=""/></td>
					</tr>
					<tr>
						<td><a>Catégorie:</a></td>
						<td></td>
					</tr>
					<tr>
						<td><input type="checkbox"  class="checkbo"/>Livres</td>
						<td><select> <option>Livres</option> <option>Sport et loisir</option><option>Musique</option><option>Vêtements</option> </select> </td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbo" />Sport et Loisirs</td>
						<td><select> <option>Livres</option> <option>Sport et loisir</option><option>Musique</option><option>Vêtements</option> </select> </td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbo"/>Musique</td>
						<td><select> <option>Livres</option> <option>Sport et loisir</option><option>Musique</option><option>Vêtements</option> </select> </td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbo"/>Vêtements</td>
						<td><select> <option>Livres</option> <option>Sport et loisir</option><option>Musique</option><option>Vêtements</option> </select> </td>
					</tr>												
					<tr>
						<td>Description</td>
						<td><textarea type="text" name="Description" value=""/></textarea></td>
					</tr>
					<tr>
						
						<td><input type="submit" value="Mettre en vente" id="button2" name="button2"/></td>

					</tr>
				</table>
			</form>
			<form>
						<td><input type="submit" value="Charger une image" name="button1"/></td></form>

			</div>         
			<div class="blocvendeur" id="tab2">   
				<table  class="bandeaubloc">
					<tr><td>Vos articles en vente</td></tr>
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
