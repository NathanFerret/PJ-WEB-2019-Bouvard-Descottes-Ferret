<?php 

	//recuperer les données venant de la page HTML  
	//le parametre de $_POST = "name" de <input> de votre page HTML  
if (isset ($_POST['button2'])){

	$nom = $_POST["Nomprod"];  
	$Prix = $_POST["Prix"] ;  
	$Description = $_POST["Description"];  

	$database = "projetpiscine";
	$db_handle  = mysqli_connect ('localhost', 'root', '');  
	$db_found=mysqli_select_db ($db_handle ,$database ) ;
if ($db_found) {


	$sql = "INSERT INTO item (nomitem,description,prixunitaire,video,idcategorie,idmodele,idpanier) VALUES('$nom','$Description','$Prix','2','3','4','5')"; 

$result = mysqli_query($db_handle, $sql); 
	mysqli_close($db_handle);
 
    echo "Records added to the database";
    $database = "projetpiscine";
	$db_handle  = mysqli_connect ('localhost', 'root', '');  
	$db_found=mysqli_select_db ($db_handle ,$database ) ;
    $SQLE = "SELECT * FROM item";
    $resulte = mysqli_query($db_handle, $SQLE);
    while ($db_field = mysqli_fetch_assoc($resulte) ) {
             echo $db_field['iditem'] . "<br>";
             echo $db_field['nomitem'] . "<br>";
             echo $db_field['description'] . "<br>";
             echo $db_field['prixunitaire'] . "<br>";
             echo $db_field['video'] . "<br>";
             echo $db_field['idcategorie'] . "<br>";
             echo $db_field['idmodele'] . "<br>";
             echo $db_field['idpanier'] . "<br>";
      }

}
else {
    echo "Database NOT Found ";
}
mysqli_close($db_handle);
}
?> 