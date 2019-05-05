<?php
$item = $_POST['item'];


session_start();

$database = "projetpiscine";
$db_handle  = mysqli_connect ('localhost', 'root', '');  
$db_found=mysqli_select_db ($db_handle ,$database ) ;
if ($db_found) {
	
	
	$sql = "UPDATE item SET idpanier= NULL WHERE iditem = '$item'  ";
	$result = mysqli_query($db_handle, $sql);

	HEADER('Location:page_panier.php');    
	

	
}


else {
	echo "Database NOT Found ";
}
mysqli_close($db_handle);

?>