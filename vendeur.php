<?php 

	//recuperer les données venant de la page HTML  
	//le parametre de $_POST = "name" de <input> de votre page HTML  
if (isset ($_POST['button2'])){
  if(isset($_POST['checkbo'])){
   $nom = $_POST["Nomprod"];  
   $Prix = $_POST["Prix"] ;  
   $Description = $_POST["Description"]; 
   $url = $_POST["url"] ;  
   $urlv = $_POST["urlv"] ; 
   $taille = $_POST["taille"] ;  
   $couleur = $_POST["couleur"] ;
   $genre = $_POST["genre"] ;



   foreach($_POST['checkbo'] as $valeur){}
    if($valeur=='Livres'){foreach($_POST['cho1'] as $selectValue){}}
      if($valeur=='Sport et Loisirs'){foreach($_POST['cho2'] as $selectValue){}}
        if($valeur=='Musique'){foreach($_POST['cho3'] as $selectValue){}}
          if($valeur=='Vêtements'){foreach($_POST['cho4'] as $selectValue){}}





           $database = "projetpiscine";
         $db_handle  = mysqli_connect ('localhost', 'root', '');  
         $db_found=mysqli_select_db ($db_handle ,$database ) ;
         if ($db_found) {

          if($Prix>0 ){
           $sql = "INSERT INTO item (nomitem,description,prixunitaire,video,categorie,sscategorie,image,couleur,taille,genre,pseudo) VALUES('$nom','$Description','$Prix','$urlv','$valeur','$selectValue','$url','$couleur','$taille','$genre','moi')";

           $result = mysqli_query($db_handle, $sql); 
           //var_dump($result);
           mysqli_close($db_handle);
           HEADER('Location:page_produit_mis_en_vente.php');

         }
         else{


           echo "Entrez un prix valide";
           echo" <form name='x' action='page_vendeur.php' method='post'>
           <input type='submit' value='Retour'>
           </form>";
         }
           

         }
         else {
          echo "Database NOT Found ";
        }
}

        else{
          echo "Cochez une catégorie";
          echo" <form name='x' action='page_vendeur.php' method='post'>
          <input type='submit' value='Retour'>
          </form>";}
        }
        ?> 