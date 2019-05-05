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
				
				<h2>Catégories</h2><br>
				
				<h3>						
					<form name="forme" action="page_produits.php" method="post"> 
						<input type='text' style='display: none;' name ='cat' value="Vente Flash" readonly>
						<input type="submit" class="feature-title" name="cate" value="Vente Flash" style="border: 0px solid #5c8940; cursor: pointer;
						background: transparent;">
					</form></h3> 
					<br>

					<dl>         
						<dt id="liv"> Livres </dt>            
						<dd  class="sousliv">
							<form name="forme" action="page_produits.php" method="post"> 
								<input type='text' style='display: none;' name ='cat' value="Roman" readonly>
								<input type="submit"  class="body-link" name="cate" value="Roman" style="border: 0px solid #5c8940;
								background: transparent;">
							</form>
						</dd>
						<dd class="sousliv"> 
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="Fantastique" readonly> 
								<input type="submit" class="body-link" name="cate" value="Fantastique" style="border: 0px solid #5c8940;
								background: transparent;">
							</form>
						</dd>
						<dd class="sousliv"> 
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="BD" readonly> 
								<input type="submit" class="body-link" name="cate" value="BD" style="border: 0px solid #5c8940;
								background: transparent;">
							</form>
						</dd>
						<br>
						<dt id="mus"> Musiques </dt>    

						<dd class="sousmus"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Classique" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Classique" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>        
						<dd class="sousmus"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Variété" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Variété" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousmus"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Rock" readonly> 
							<input type="submit"  class="body-link" name="cate" value="Rock" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousmus"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Rap" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Rap" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<br>
						<dt id="vet"> Vêtements </dt>             
						<dd class="sousvet"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Chaussures" readonly> 
							<input type="submit"  class="body-link" name="cate" value="Chaussures" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousvet"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Chemise" readonly> 
							<input type="submit" class="body-link" name="cate" value="Chemise" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousvet"><form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="T-shirt" readonly> 
							<input type="submit" class="body-link" name="cate" value="T-shirt" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousvet"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Pantalons" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Pantalons" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<br>
						<dt id="spo"> Sport </dt>             
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Running" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Running" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Sport extérieur" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Sport extérieur" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Sport intérieur" readonly> 
							<input type="submit" class="body-link" name="cate" value="Sport intérieur" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Autre" readonly> 
							<input type="submit" class="body-link" name="cate" value="Autre" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>

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
  							$cat = $_POST["cat"];
  							echo "$cat";
  							$sql="SELECT * FROM item WHERE sscategorie LIKE '$cat'";

						    $result = mysqli_query($db_handle, $sql);
						    while ($db_field = mysqli_fetch_assoc($result) ){
						    	echo '<form name="form" action="page_produit_détaillé.php" method="post">';
						    	echo '<div class="caseitem">';
								echo '<table  class="tableauimage">';
								echo "<tr>";
						    	echo "<td>";
						    	echo "<img src=".$db_field['image']." height='142' width='142'/>";
								echo "<br>";
						    	echo $db_field['nomitem'];
						    	echo "<br>";
						    	echo "Prix : ";
						    	echo $db_field['prixunitaire'];
						    	echo "<input type='text' style='display: none;' name ='prixunitaire' value=".$db_field['prixunitaire']." readonly>";
						    	echo " €";
						    	echo "<br>";
						    	echo "Vendeur : ";
						    	echo $db_field['pseudo'];
						    	echo "<br>";
						    	echo '<input type="submit" class="button" value ="Voir le produit"/>';
						    	echo '<br>';
						    	echo "<input type='text' style='display: none;' name ='iditem' value=".$db_field['iditem']." readonly>"; 
						    	echo "</td>";
						    	echo"</tr>";
						    	echo "</table>";
						    	echo "</div>";
						    	echo '</form>';
						    }
						    $sql="SELECT * FROM item WHERE categorie LIKE '$cat'";
						    $result = mysqli_query($db_handle, $sql);
						    while ($db_field = mysqli_fetch_assoc($result) ){
						    	echo '<form name="form" action="page_produit_détaillé.php" method="post">';
						    	echo '<div class="caseitem">';
								echo '<table  class="tableauimage">';
								echo "<tr>";
						    	echo "<td>";
						    	echo "<img src=".$db_field['image']." height='142' width='142'/>";
								echo "<br>";
						    	echo $db_field['nomitem'];
						    	echo "<br>";
						    	echo "Prix : ";
						    	echo $db_field['prixunitaire'];
						    	echo "<input type='text' style='display: none;' name ='prixunitaire' value=".$db_field['prixunitaire']." readonly>";
						    	echo " €";
						    	echo "<br>";
						    	echo "Vendeur : ";
						    	echo $db_field['pseudo'];
						    	echo "<br>";
						    	echo '<input type="submit" class="button" value ="Voir le produit"/>';
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