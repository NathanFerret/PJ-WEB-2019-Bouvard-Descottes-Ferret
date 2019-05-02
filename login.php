<?php 

	//recuperer les données venant de la page HTML  
	//le parametre de $_POST = "name" de <input> de votre page HTML  
if (isset ($_POST['butt'])){


    $Pseudo = $_POST["PseudoCo"]; 
    $Mdp = $_POST["MotdePasseCo"]; 

    


    $database = "projetpiscine";
    $db_handle  = mysqli_connect ('localhost', 'root', '');  
    $db_found=mysqli_select_db ($db_handle ,$database ) ;
    if ($db_found) {

        $sql="SELECT * FROM utilisateur WHERE pseudo LIKE '$Pseudo' AND mdp LIKE '$Mdp'";
        $result = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result) == 0) { 
         echo "Saisie incorrecte";
         echo" 
         <form name='x' action='page_acceuil_login.php' method='post'>
         <input type='submit' value='Retour'>
         </form>";
     }
     else{
        echo "Faire les header et la session";
     }


}
else {
    echo "Database NOT Found ";
}
}

?> 
