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
<br>

<div class="row">
	<?php
	$iditem=$_POST['iditem'];
	$prixunitaire=$_POST['prixunitaire'];
	$database = "projetpiscine";
  	$db_handle  = mysqli_connect ('localhost', 'root', '');  
  	$db_found=mysqli_select_db ($db_handle ,$database ) ;
	$sql='SELECT * FROM item WHERE iditem = "'.$iditem.'" ';
	$result = mysqli_query($db_handle, $sql);
	$db_field = mysqli_fetch_assoc($result);
	echo '<div class="col-lg-5 col-md-5 col-sm-12">';
		echo '<img src='.$db_field['image'].' height="500" width="500"/>';
	echo '</div>';
	
		echo '<div class="col-lg-7 col-md-7 col-sm-12">';
		echo '<p class="bloc"><div class="image"> Description: '.$db_field['description']."<br>Catégorie: ".$db_field['categorie']."<br>Sous Catégorie: ".$db_field['sscategorie']."<br>Couleur: ".$db_field['couleur']."<br>taille: ".$db_field['taille']."<br>Genre: ".$db_field['genre'].' </div></p>';
		echo '<div class="row">';
			echo '<div class="col-lg-6 col-md-6 col-sm-12">';
				echo '<form name="form" action="page_profil_vendeur.php" method="post">';
					echo '<div class="image">';
						echo "<input type='text' style='display: none;' name ='pseudo' value=".$db_field['pseudo']." readonly>";
						echo '<input type="submit" class="button" value="Aller sur le profil du vendeur"/>';
					echo '</div>';
				echo '</form>';
			echo '</div>';
			echo '<div class="col-lg-6 col-md-6 col-sm-12">';
				echo '<form name="form" action="ajout_panier.php" method="post">';
					echo '<div class="image">';
						echo "<input type='text' style='display: none;' name ='item' value=".$db_field['iditem']." readonly>";
						echo '<input type="submit" class="button" value="Ajouter au panier"/>';
						echo '<br>';
						echo $prixunitaire;
						echo ' €';
					echo '</div>';
				echo '</form>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	?>
</div>


<br>
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