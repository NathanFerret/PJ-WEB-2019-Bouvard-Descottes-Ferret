<?php 
session_start();
$IDPANIER=$_SESSION['IDPANIER'];
$database = "projetpiscine";
$db_handle  = mysqli_connect ('localhost', 'root', '');  
$db_found=mysqli_select_db ($db_handle ,$database ) ;
$sql = "DELETE FROM item WHERE idpanier = $IDPANIER";
$result = mysqli_query($db_handle, $sql);
HEADER('Location:page_acheteur.php');
?>