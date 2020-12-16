
<?php

if (!empty($_GET['lastname']) && !empty($_GET['firstname'])){

     echo var_dump($_GET);

} else {

    echo 'il manque des paramètres d\'url';

}

?>
