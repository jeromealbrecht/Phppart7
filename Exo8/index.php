<?php

//Sur le formulaire de l'exercice 6, 
//en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.

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

 } else if(!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['gender'])){

     $gender = $_GET['gender'];
     $firstName = $_GET['firstName'];
     $lastName = $_GET['lastName'];
     $file = $_GET['file'];
     $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
     $file = pathinfo($file , PATHINFO_FILENAME);

    if ($fileType != 'pdf'){
        echo "<br/> Veuillez mettre un pdf <br/>";
    ?>
    <a href="http://partie7.localhost/Exo8/index.php">Revenir au formulaire</a>
    <?php

} else if ($gender == "Homme"){

         echo "Bonjour ". $firstName ." ". $lastName ." et vous etes un ".$gender ." et votre fichier" .$file. " est un pdf !"; 

     } else if($gender == "Femme") {

        echo "Bonjour ". $firstName ." ". $lastName ." et vous etes une ".$gender ." et votre fichier" .$file. " est un pdf !";

     } else if($gender == "autre") {

        echo "Bonjour ". $firstName ." ". $lastName ." vous etes de type ".$gender ." et votre fichier" .$file. " est un pdf !";

      } else {

            echo "vous n'avez pas mis de sexe ";
        }
    }

     
      
    
 ?>