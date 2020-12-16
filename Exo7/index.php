<?php

//Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
//Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

if(empty($_GET['gender']) && empty($_GET['firstName']) && empty($_GET['lastName']) ){

    ?>
<form action="index.php" method="get">
        <select name="gender" id="gender">
            <option value=""> Votre sexe ?</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="autre">Autre</option>
        </select>
        <input type="text" placeholder="Prenom" name="firstName">
        <input type="text" placeholder="Nom" name="lastName">
        <input type="file" name="file">
        <input type="submit" value="valider">
</form>

<?php
 } else if(!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['gender'])) {
     $gender = $_GET['gender'];
     $firstName = $_GET['firstName'];
     $lastName = $_GET['lastName'];
     $file = $_GET['file'];

     if($gender == "Homme"){
         echo "Bonjour ". $firstName ." ". $lastName ." et vous etes un ".$gender ." et votre fichier est  ". $file ;
     } else if($gender == "Femme") {
        echo "Bonjour ". $firstName ." ". $lastName ." et vous etes une ".$gender ." et votre fichier est  ". $file ;
     } else if($gender == "autre") {
        echo "Bonjour ". $firstName ." ". $lastName ." vous etes de type ".$gender ." et votre fichier est  ". $file;
      } else {
            echo "vous n'avez pas mis de sexe ";
        }
     }

?>