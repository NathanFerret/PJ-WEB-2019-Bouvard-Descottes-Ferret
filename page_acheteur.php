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
			$(".sousliv").hide();
			$(".sousmus").hide();
			$(".sousvet").hide();
			$(".sousspo").hide(); 
			$("#liv").click(function(){                  
				$(".sousliv").toggle();
			});
			$("#mus").click(function(){                  
				$(".sousmus").toggle();                   
			});
			$("#vet").click(function(){                  
				$(".sousvet").toggle();                   
			}); 
			$("#spo").click(function(){                  
				$(".sousspo").toggle();                   
			});
			$("#photo1").hover(function(){
				$("#photo1").fadeTo('fast',0.9);
				$("#photo1").css("color","#ff4500");
			}, function(){
				$("#photo1").fadeTo('fast',1);
				$("#photo1").css("color","white");
			});
			$("#photo2").hover(function(){
				$("#photo2").fadeTo('fast',0.9);
				$("#photo2").css("color","#ff4500");
			}, function(){
				$("#photo2").fadeTo('fast',1);
				$("#photo2").css("color","white");
			}); 
			$("#photo3").hover(function(){
				$("#photo3").fadeTo('fast',0.9);
				$("#photo3").css("color","#ff4500");
			}, function(){
				$("#photo3").fadeTo('fast',1);
				$("#photo3").css("color","white");
			});
			$("#photo4").hover(function(){
				$("#photo4").fadeTo('fast',0.9);
				$("#photo4").css("color","#ff4500");
			}, function(){
				$("#photo4").fadeTo('fast',1);
				$("#photo4").css("color","white");
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
						background: transparent;  color: #FFFFFF;">
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
							<input type='text' style='display: none;' name ='cat' value="Variete" readonly> 
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
							<input type='text' style='display: none;' name ='cat' value="Tshirt" readonly> 
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
							<input type='text' style='display: none;' name ='cat' value="Sport exterieur" readonly> 
							<input type="submit" class="body-link"  name="cate" value="Sport d'extérieur" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Sport interieur" readonly> 
							<input type="submit" class="body-link" name="cate" value="Sport d'interieur" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>
						<dd class="sousspo"> <form name="forme" action="page_produits.php" method="post">
							<input type='text' style='display: none;' name ='cat' value="Autre" readonly> 
							<input type="submit" class="body-link" name="cate" value="Autre" style="border: 0px solid #5c8940;
							background: transparent;">
						</form></dd>

					</dl> 
				</form>
			</div>           
			<div class="blocimages" id="tab2">         
				<table id="tableau">
					<tr>
						<td>
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="Livres" readonly> 
								<input type="submit" id="photo1" name="cate" value="Livres" style="border: 2px solid #ff4500;
								background: url('livres.png'); width: 500px;font-size: 1.5rem;font-weight: 700; cursor: pointer;  
								height: 250px;color:#fff;">
							</form>
							
						</td>
						
						<td>
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="Musique" readonly> 
								<input type="submit" id="photo2" name="cate" value="Musique" style="border: 2px solid #ff4500;
								background: url('Musiques.png');width: 500px;font-size: 1.5rem;font-weight: 700; cursor: pointer;
								height: 250px;color:#fff;margin-left: : 1em;">
							</form>
						</td>
					</tr>
					<tr>
						<td>
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="Vetements" readonly> 
								<input type="submit" id="photo3" name="cate" value="Vêtements" style="border: 2px solid #ff4500;
								background: url('Vêtements.png'); width: 500px;font-size: 1.5rem;font-weight: 700; cursor: pointer; height: 250px; color:#fff;">
							</form>
						</td>
						<td>
							<form name="forme" action="page_produits.php" method="post">
								<input type='text' style='display: none;' name ='cat' value="Sport et Loisirs" readonly> 
								<input type="submit" id="photo4" name="cate" value="Sport et Loisirs" style="border: 2px solid #ff4500; background: url('Sports.png'); width: 500px; font-size: 1.5rem; font-weight: 700; cursor: pointer; height: 250px; color:#fff; margin-left: 1em;">
							</form>
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