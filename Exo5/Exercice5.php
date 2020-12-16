<?php

//Créer un formulaire sur la page index.php avec :  
//Une liste déroulante pour la civilité (Mr ou Mme)
//Un champ texte pour le nom
//Un champ texte pour le prénom 
//Ce formulaire doit rediriger vers la page index.php. 
//Vous avez le choix de la méthode.

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <form action="index.php" method="post">
        <div>
            <label for="firstname">Nom :</label>
            <input type="text" id="name" name="firstname">
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="name" name="lastname">
            <FORM>
                <SELECT name="genre" size="1">
                    <OPTION>M.
                    <OPTION>MME
                </SELECT>
            </FORM>
            <input type="submit" value="Clique">
</body>

</html>