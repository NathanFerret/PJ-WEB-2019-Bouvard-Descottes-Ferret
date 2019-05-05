<?php

$code = $_POST["NumeroCarte"]; 
$nomtitulaire = $_POST["TitulaireCarte"];
$numeroSecu = $_POST["Cryptogramme"];
$dateExpiration = $_POST["DateExpiration"];

$database = "projetpiscine";
$db_handle  = mysqli_connect ('localhost', 'root', '');  
$db_found=mysqli_select_db ($db_handle ,$database ) ;
$sql="SELECT * FROM codebanque WHERE code LIKE '%$code%'";
$result = mysqli_query($db_handle, $sql);
$db_field = mysqli_fetch_assoc($result);
    
if ($db_field['code'] != $code) { 
     echo "carte bancaire non trouvée";
     echo" 
     <form name='x' action='page_commande_acheteur.php'>
     <input type='submit' value='Retour'>
     </form>";
   }

else {
	HEADER('Location:page_commande_finalisée.php');
}

?>