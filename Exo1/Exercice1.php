<?php

// Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
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
            <input type="text" id="name" name="first_name">
        </div>
        <div>
            <label for="lastname">Prénom :</label>
            <input type="text" id="name" name="last_name">
            <input type="submit" value="Clique">
        </div>
       
    </form>
</body>

</html>