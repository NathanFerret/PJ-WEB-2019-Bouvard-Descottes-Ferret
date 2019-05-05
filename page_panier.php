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
			<div class="blocvendeur" id="tab2">   
				<table  class="bandeaubloc">
					<tr class="corpsbloc">
						<td>
							<?php
							

							$database = "projetpiscine";
							$db_handle  = mysqli_connect ('localhost', 'root', '');  
							$db_found=mysqli_select_db ($db_handle ,$database ) ;
							$pseudo = $_SESSION['Login'];
							

							$sql="SELECT idPanier FROM panier WHERE pseudo LIKE '$pseudo'";

							$result = mysqli_query($db_handle, $sql);
							$db_field = mysqli_fetch_assoc($result);
							$panier=$db_field['idPanier'];


							$sql="SELECT * From item WHERE idPanier LIKE '$panier'";
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
								echo "<br>";
								echo "</form>";
								echo '<form name="form" action="retirer_panier.php" method="post">';
								echo "<input type='text' style='display: none;' name ='item' value=".$db_field['iditem']." readonly>";
								echo '<input type="submit" class="button" value="Retirer du panier"/>';
								
								echo '</form>';					    	
								echo "</td>";
								echo"</tr>";
								echo "</table>";
								echo "</div>";
							}
							$sum="SELECT SUM(prixunitaire) AS prix
							FROM item WHERE idpanier= '$panier' ";  
							$result = mysqli_query($db_handle, $sum);
							$db_field = mysqli_fetch_assoc($result);

							?>							
						</td>
					</tr>
				</table>


			</div>

			<div class="listpanier" id="tab" >
				<table>
					<?php
					$tot=0;
					
					echo "<tr>";
					echo "<td>Prix</td>";
					$tot=$db_field['prix'];
					echo "<td><input type='text' name='Prix' value='$tot €'' style='border: 0px solid #5c8940;
					background: transparent;'readonly/>";
					echo "</td>";
					echo "</tr>";
					echo"<form name='form' action='page_commande_acheteur.php' method='post'>";
					echo "<td><input type='submit' class='button' value='Commander'/></td>";
					echo "<td></td>";
					echo "</tr>";
					?>
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