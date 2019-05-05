<?php
session_start();
?>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
	<script>
		$(document).ready(function(){ 
			$("#select1").hide();
			$("#select2").hide();
			$("#select3").hide();
			$("#select4").hide();

			$("#checkbo1").click(function(){               
				$("#select1").toggle();
				$("#case2").toggle();
				$("#case3").toggle();
				$("#case4").toggle();
			});

			$("#checkbo2").click(function(){               
				$("#select2").toggle();
				$("#case1").toggle();
				$("#case3").toggle();
				$("#case4").toggle();
			});
			$("#checkbo3").click(function(){
				$("#case1").toggle();
				$("#case2").toggle();
				$("#case4").toggle();               
				$("#select3").toggle();
			});

			$("#checkbo4").click(function(){                 
				$("#select4").toggle();
				$("#case1").toggle();
				$("#case2").toggle();
				$("#case3").toggle(); 			
			});
		});
		
		
	</script> 

	<script>
		$(document).ready(function(){

			$("divimage").click(function(){
				var id = $(this).attr("id");
				alert(id);
			});
		});
	</script>


</head>
<body>
	<nav class="navbar navbar-expand-md">      
		<a class="navbar-brand" href="page_acheteur"><img src="logo_mini_tr.png"></a>         
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
						<td id="case1"><input type="checkbox" name="checkbo[]" value="Livres" id="checkbo1" class="checkbo"/>Livres</td>
						<td id="select1">
							<select name="cho1[]"> 
								<option value="Roman">Roman</option> 
								<option value="Fantastique">Fantastique</option>
								<option value="BD">BD</option> 
							</select> 
						</td>
					</tr>
					<tr>
						<td id="case2"><input type="checkbox" name="checkbo[]" value="Sport et Loisirs" id="checkbo2" class="checkbo"/>Sport et Loisirs</td>
						<td id="select2">
							<select name="cho2[]"> 
								<option value="Running">Running</option> 
								<option value="Sport extétieur">Sport extétieur</option>
								<option value="Sport intérieur">Sport intérieur</option>
								<option value="Autre">Autre</option> 
							</select> 
						</td>
					</tr>
					<tr>
						<td id="case3"><input type="checkbox" name="checkbo[]" value="Musique" id="checkbo3" class="checkbo"/>Musique</td>
						<td id="select3">
							<select name="cho3[]"> 
								<option value="Classique">Classique</option> 
								<option value="Rap">Rap</option>
								<option value="Rock">Rock</option>
								<option value="Variété">Variété</option> 
							</select> 
						</td>
					</tr>
					<tr>
						<td id="case4"><input type="checkbox" name="checkbo[]" value="Vêtements" id="checkbo4" class="checkbo"/>Vêtements</td>
						<td id="select4">
							<select name="cho4[]"> 
								
								<option value="Chemise">Chemise</option>
								<option value="Chaussures">Chaussures</option>
								<option value="T-shirt">T-shirt</option>
								<option value="Pantalons">Pantalons</option> 
							</select> 
						</td>
					</tr>												
					<tr>
						<td>Description</td>
						<td><textarea type="text" name="Description" value=""/></textarea></td>
					</tr>
					<tr>
						<td>taille*</td>
						<td><input type="text" name="taille" value=""/></td>
					</tr>
					<tr>
						<td>couleur*</td>
						<td><input type="text" name="couleur" value=""/></td>
					</tr>
					<tr>
						<td>genre*</td>
						<td><input type="text" name="genre" value=""/></td>
					</tr>
					
					<tr>
						<td>Url image</td>
						<td><input type="text" name="url" value=""/></td>
					</tr>
					<tr>
						<td>Url vidéo*</td>
						<td><input type="text" name="urlv" value=""/></td>
					</tr>
					<tr>
						<td>(* optionnel)</td>
						<td><input type="submit" value="Mettre en vente" id="button2" name="button2"/></td>
					</tr>
				</table>
			</form>		
		</div>         
		<div class="blocvendeur">   
			<table  class="bandeaubloc">
				<tr><td>Vos articles en vente</td></tr>
				<tr class="corpsbloc">
					<td>
						<?php
						$database = "projetpiscine";
						$db_handle  = mysqli_connect ('localhost', 'root', '');  
						$db_found=mysqli_select_db ($db_handle ,$database ) ;
						$sql="SELECT * FROM item";
						$result = mysqli_query($db_handle, $sql);
						while ($db_field = mysqli_fetch_assoc($result) ){
							echo '<div class="caseitem">';
							echo '<table  class="tableauimage">';
							echo "<tr>";
							echo "<td>";
							echo "<divimage id=".$db_field['iditem']."><img src=".$db_field['image']." height='142' width='142'/></divimage>";
							/*<a href='page_produit_détaillé.php'></a>*/
							echo "<br>";
							echo $db_field['nomitem'];
							echo "<br>";
							echo $db_field['prixunitaire'];
							echo "€";
							
							echo "<br>";
							echo "</td>";
							echo"</tr>";
							echo "</table>";
							echo "</div>";
						}
						?>									
					</td>
				</tr>
			</table>


		</div>

						
						   
	</div>
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