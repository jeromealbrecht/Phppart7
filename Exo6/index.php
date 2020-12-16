<?php

// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
//le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  
// N'utiliser qu'une seule page.



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['genre'])){
    
    var_dump($_GET);
    

} else {
?>
   <form action="index.php" method="get">
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
<?php
}
?>
    

    
</body>

</html>