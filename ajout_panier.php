<?php

session_start();


	


	$database = "projetpiscine";
	$db_handle  = mysqli_connect ('localhost', 'root', '');  
	$db_found=mysqli_select_db ($db_handle ,$database ) ;
	$iditem = $_POST["panier"];
	echo "$iditem";
	if ($db_found) {
		$sess=$_SESSION['Login'];
		
		$sql = " INSERT INTO panier (pseudo) VALUES ('$sess')";
		$result = mysqli_query($db_handle, $sql);
		

		$sql="SELECT idPanier FROM panier WHERE pseudo LIKE '$sess' ";
		$result = mysqli_query($db_handle, $sql);
		$db_field = mysqli_fetch_assoc($result);
		$Panier= $db_field['idPanier'];
		
		
		$sql = "UPDATE item SET idpanier=$Panier WHERE iditem = '$iditem'  ";
		$result = mysqli_query($db_handle, $sql); 
		var_dump($result);

		
	}

	
	else {
		echo "Database NOT Found ";
	}
	mysqli_close($db_handle);


?> 