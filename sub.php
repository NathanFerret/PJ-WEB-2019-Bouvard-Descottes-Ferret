<?php 

	//recuperer les données venant de la page HTML  
	//le parametre de $_POST = "name" de <input> de votre page HTML  
if (isset ($_POST['butt'])){

	$nom = $_POST["Nom"];  
	$Prenom = $_POST["Prenom"]; 
    $Pseudo = $_POST["Pseudo"]; 
    $Mdp = $_POST["Motdepasse"]; 
    $aun = $_POST["Adresseligne1"]; 
    $adeux = $_POST["Adresseligne2"]; 
    $Ville= $_POST["Ville"]; 
    $postal = $_POST["Codepostal"]; 
    $phone = $_POST["Numérodetéléphone"];  
    $email = $_POST["email"]; 
    $pays = $_POST["pays"]; 
    ;


    $database = "projetpiscine";
    $db_handle  = mysqli_connect ('localhost', 'root', '');  
    $db_found=mysqli_select_db ($db_handle ,$database ) ;
    if ($db_found) {

        $sql="SELECT * FROM utilisateur WHERE pseudo LIKE '%$Pseudo%'";
        $result = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result) != 0) { 
           echo "pseudo déjà utilisé";
           echo" 
           <form name='x' action='page_acceuil_login.php' method='post'>
           <input type='submit' value='Retour'>
           </form>";
       }



       else {
        $sql= "INSERT INTO utilisateur (pseudo , email, mdp, nom, prenom,numeroTel,statut) VALUES('$Pseudo','$email','$Mdp','$nom','$Prenom','$phone','normal')";


        $result = mysqli_query($db_handle, $sql);

// var_dump($result); 

        $sqld = "INSERT INTO adresse (adresse1  , adresse2, ville ,codePostal,  pays) VALUES('$aun','$adeux','$Ville','$postal','$pays')"; 



        $result = mysqli_query($db_handle, $sqld); 

        $idrecup=mysqli_insert_id($db_handle);
        $sqlt = "UPDATE utilisateur SET idAdresse = '$idrecup' WHERE pseudo = '$Pseudo' ";
        $result = mysqli_query($db_handle, $sqlt); 
        session_start();
        $_SESSION['Login']=$Pseudo;
        HEADER('Location:page_acheteur.php');    
        mysqli_close($db_handle);

    /*"Records added to the database";
    $database = "projetpiscine";
    $db_handle  = mysqli_connect ('localhost', 'root', '');  
    $db_found=mysqli_select_db ($db_handle ,$database ) ;
    $SQLE = "SELECT * FROM utilisateur ";
    $resulte = mysqli_query($db_handle, $SQLE);
    while ($db_field = mysqli_fetch_assoc($resulte) ) {
       echo $db_field['pseudo'] . "<br>";
       echo $db_field['email'] . "<br>";
       echo $db_field['mdp'] . "<br>";
       echo $db_field['nom'] . "<br>";
       echo $db_field['prenom'] . "<br>";
       echo $db_field['numeroTel'] . "<br>";
       echo $db_field['statut'] . "<br>";

   }*/

}}
else {
    echo "Database NOT Found ";
}

}
?> 
