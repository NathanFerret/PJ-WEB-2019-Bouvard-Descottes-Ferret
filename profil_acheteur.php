<?php

session_start();

if (isset ($_POST['Validation'])){

	$Nom = $_POST["nom"];  
	$Prenom = $_POST["prenom"] ;  
	$email = $_POST["e-mail"];
	$adresse1 = $_POST["adresse1"];  
	$adresse2 = $_POST["adresse2"] ;  
	$Ville = $_POST["Ville"];
	$CodePostale = $_POST["CP"];  
	$Pays = $_POST["Pays"] ;  
	$Tel = $_POST["numtel"];
	$Photo_profil = $_POST["photo_profil"];
	$Photo_couverture = $_POST["photo_couverture"];

	
	$database = "projetpiscine";
	$db_handle  = mysqli_connect ('localhost', 'root', '');  
	$db_found=mysqli_select_db ($db_handle ,$database ) ;
	if ($db_found) {
		$sess=$_SESSION['Login'];
		echo "$sess";
		$sql = "UPDATE utilisateur SET nom='$Nom', prenom='$Prenom', email='$email', numeroTel='$Tel', photo='$Photo_profil', imageDeFond='$Photo_couverture' WHERE pseudo LIKE '$sess'";
		$result = mysqli_query($db_handle, $sql);
		
		
		$sql="SELECT idAdresse FROM utilisateur WHERE pseudo LIKE '$sess' ";
		$result = mysqli_query($db_handle, $sql);
		$db_field = mysqli_fetch_assoc($result);
		$adre= $db_field['idAdresse'];
		echo "$adre";
		$sql = "UPDATE adresse SET adresse1='$adresse1', adresse2='$adresse2', ville='$Ville', codePostal='$CodePostale', pays='$Pays' WHERE idAdresse LIKE '$adre'"; 
		$result = mysqli_query($db_handle, $sql);
		HEADER('Location:page_profil_acheteur.php');
	}

	
	else {
		echo "Database NOT Found ";
	}
	mysqli_close($db_handle);
}
?> 