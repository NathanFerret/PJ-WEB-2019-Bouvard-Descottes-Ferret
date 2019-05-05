<?php 
session_start();
$database = "projetpiscine";
$db_handle  = mysqli_connect ('localhost', 'root', '');  
$db_found=mysqli_select_db ($db_handle ,$database ) ;
$item = $_POST["iditem"];
$sql="DELETE FROM item WHERE idItem LIKE '$item' ";
$result = mysqli_query($db_handle, $sql); 
HEADER('Location:page_vendeur.php');
?>