<!-- Snack B
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<pre>

<?php

    $accessoName = $_GET["name"];

    $accessoMail = $_GET["mail"];

    $accessoAge = $_GET["age"];

    if(
        strlen($accessoName) > 3 && 
        strpos($accessoMail, ".") !== false && 
        strpos($accessoMail, "@") !== false && 
        is_numeric($accessoAge)){
            echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

?>

</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-B</title>
</head>
<body>
    
    <h1>

        <?php

            echo $accessoName.$accessoMail.$accessoAge

        ?>

    </h1>

</body>
</html>