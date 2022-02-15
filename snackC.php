<!-- Snack C
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<pre>

    <?php

    $numeriArray = [];

    
    
    for ($i=0; $i < 15; $i++) { 
        $numeriRandom = rand(1, 100);
        if (!in_array($numeriRandom, $numeriArray)){
            echo $numeriArray[] = $numeriRandom;
            echo " ";
        } else {
            echo $i--;
        }
    }
    var_dump($numeriArray);

    ?>

</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-C</title>
</head>
<body>
    
</body>
</html>