<?php

//Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="user.php" method="get">
        <div>
            <label for="firstname">Nom :</label>
            <input type="text" id="name" name="firstname">
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="name" name="lastname">
            <input type="submit" value="Clique">
        </div>
       
        
    </form>
</body>

</html>