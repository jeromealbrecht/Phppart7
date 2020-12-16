<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
<?php

if (!empty($_GET['lastname']) && !empty($_GET['firstname'])){

     echo "Bonjour " . $_GET['lastname'] ." ". $_GET['firstname']." ça va ou quoi ?"; 

} else {

    echo 'il manque des paramètres d\'url';

}

?>
</body>

</html>