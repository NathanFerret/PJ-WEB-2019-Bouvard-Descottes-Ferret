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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
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
</body>

<div class="texte_centre_gros">
	<br>
	Votre produit a bien été mis en vente !
	<br>
	<br>
</div>
<div class="image" >
	<tr>
		<td>
			<form action="page_produit.html">
				<input type="submit" value="Aller sur la page du produit"/></td>
				<br>
				<br>
				<br>
			</form>
	</tr>
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