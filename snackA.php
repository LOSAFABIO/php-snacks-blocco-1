<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<pre>
    
<?php

$squadreArr = [
    [
        "casa"        => "Olimpia Milano",
        "ospite"      => "Cantù",
        "puntiCasa"   => 55,
        "puntiOspite" => 60,
    ],
    [
        "casa"        => "Reyer Venezia",
        "ospite"      => "Vanoli Basket",
        "puntiCasa"   => 72,
        "puntiOspite" => 65,
    ],
    [
        "casa"        => "Germani Brescia",
        "ospite"      => "Treviso Basket",
        "puntiCasa"   => 67,
        "puntiOspite" => 68,
    ]
];

?>

</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-A</title>
</head>
<body>
        
    <?php

    for ($i=0; $i < count($squadreArr); $i++) { 
        echo $squadreArr[$i]["casa"]." - ".$squadreArr[$i]["ospite"]." | ".
        $squadreArr[$i]["puntiCasa"]."-".$squadreArr[$i]["puntiOspite"]."<br>";
    }       

    ?>

</body>
</html>