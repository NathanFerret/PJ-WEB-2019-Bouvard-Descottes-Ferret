<?php
session_start();
$item = $_POST['item'];
echo "$item";
$database = "projetpiscine";
$db_handle  = mysqli_connect ('localhost', 'root', '');  
$db_found=mysqli_select_db ($db_handle ,$database ) ;
if ($db_found) {
	$sess=$_SESSION['Login'];

	

	$sql="SELECT idPanier FROM panier WHERE pseudo LIKE '$sess' ";
	$result = mysqli_query($db_handle, $sql);
	$db_field = mysqli_fetch_assoc($result);
	$Panier= $db_field['idPanier'];
	echo "<br>";
	echo "$Panier";
	
	
	$sql = "UPDATE item SET idpanier=$Panier WHERE iditem = '$item'  ";
	$result = mysqli_query($db_handle, $sql); 
	HEADER('Location:page_panier.php');    
	

	
}


else {
	echo "Database NOT Found ";
}
mysqli_close($db_handle);

?>