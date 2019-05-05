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
					<a class="nav-link" href="#"><img src="panier tr.png"></a>
				</li>         
			</ul>       
		</div> 
	</nav> 
</body>

<br>

<div class="row">
	<div class="col-lg-5 col-md-5 col-sm-12">
		<img class="bloc" src="photo_profil.png" height=500 width=500/>
	</div>
	<?php
		echo '<div class="col-lg-7 col-md-7 col-sm-12">';
		echo '<p class="bloc">Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. Ceci est une description. </p>';
		echo '<div class="row">';
			echo '<div class="col-lg-6 col-md-6 col-sm-12">';
				echo '<form name="form" action="page_profil_vendeur.html">';
					echo '<div class="image">';
						echo '<input type="submit" value="Aller sur le profil du vendeur"/>';
					echo '</div>';
				echo '</form>';
			echo '</div>';
			echo '<div class="col-lg-6 col-md-6 col-sm-12">';
				echo '<form name="form" action="ajout_panier.php">';
					echo '<div class="image">';
						echo '<input type="submit" value="Ajouter au panier"/>';
					echo '</div>';
				echo '</form>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	?>
</div>

<br>

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