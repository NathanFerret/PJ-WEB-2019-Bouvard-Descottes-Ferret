<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> ECE Amazon produit </title>  
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="Piscine.css"> 
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">            
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script>             
		$(document).ready(function(){ 
			$(".sousliv").hide();
			$(".sousmus").hide();
			$(".sousvet").hide();
			$(".sousspo").hide(); 
			$("#liv").click(function(){                  
				$(".sousliv").show();
			});
			$("#mus").click(function(){                  
				$(".sousmus").show();                   
			});
			$("#vet").click(function(){                  
				$(".sousvet").show();                   
			}); 
			$("#spo").click(function(){                  
				$(".sousspo").show();                   
			});                
		}); 
	</script>  

 	<divstock id="vide"></divstock>

	

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
			<div class="list"id="tab"> 
				<h2>Catégories</h2><br>
				<h3><a class="feature-title" href="#">Vente Flash</a></h3> 
				<br>
				<dl>         
					<dt id="liv"> Livres </dt>            
						<dd class="sousliv"> <a class="body-link" href="#">Roman</a></dd>
						<dd class="sousliv"> <a class="body-link" href="#">Fantastique</a></dd>
						<br>
					<dt id="mus"> Musiques </dt>             
						<dd class="sousmus"> <a class="body-link" href="#">Variété</a></dd>
						<dd class="sousmus"> <a class="body-link" href="#">Rock</a></dd>
						<dd class="sousmus"> <a class="body-link" href="#">Rap</a></dd>
						<br>
					<dt id="vet"> Vêtements </dt>             
						<dd class="sousvet"> <a class="body-link" href="#">Chaussure</a></dd>
						<dd class="sousvet"> <a class="body-link" href="#">Chemise</a></dd>
						<dd class="sousvet"> <a class="body-link" href="#">T-shirt</a></dd>
						<dd class="sousvet"> <a class="body-link" href="#">Pantalons</a></dd>
						<br>
					<dt id="spo"> Sport </dt>             
						<dd class="sousspo"> <a class="body-link" href="#">Running</a></dd>
						<dd class="sousspo"> <a class="body-link" href="#">Sport d'extérieur</a></dd>
						<dd class="sousspo"> <a class="body-link" href="#">Sport d'intérieur</a></dd>
						<dd class="sousspo"> <a class="body-link" href="#">Autre</a></dd>

				</dl> 
			</div>                  
		<div class="blocvendeur" id="tab2">   
			<table  class="bandeaubloc">
				<tr class="corpsbloc">
					<td>
						<?php
   							$database = "projetpiscine";
  							$db_handle  = mysqli_connect ('localhost', 'root', '');  
  							$db_found=mysqli_select_db ($db_handle ,$database ) ;
							$sql="SELECT * FROM item";
						    $result = mysqli_query($db_handle, $sql);
						    while ($db_field = mysqli_fetch_assoc($result) ){
						    	echo '<form name="form" action="page_produit_détaillé.php" method="post">';
						    	echo '<div class="caseitem">';
								echo '<table  class="tableauimage">';
								echo "<tr>";
						    	echo "<td>";
						    	echo "<divimage id=".$db_field['iditem']."><img src=".$db_field['image']." height='142' width='142'/></divimage>";
								echo "<br>";
						    	echo $db_field['nomitem'];
						    	echo "<br>";
						    	echo "Prix : ";
						    	echo $db_field['prixunitaire'];
						    	echo " €";
						    	echo "<br>";
						    	echo "Vendeur : ";
						    	echo $db_field['pseudo'];
						    	echo "<br>";
						    	echo '<input type="submit" value ="Voir le produit"/>';
						    	echo '<br>';
						    	echo "<input type='text' style='display: none;' name ='iditem' value=".$db_field['iditem']." readonly>"; 
						    	echo "</td>";
						    	echo"</tr>";
						    	echo "</table>";
						    	echo "</div>";
						    	echo '</form>';
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