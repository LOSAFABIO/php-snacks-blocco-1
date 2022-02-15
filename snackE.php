<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<pre>
    
<?php

    $scolari = [
        [
            "Nome"     => "Fabio",
            "Cognome"  => "Losa",
            "Voti"     => [
                "Matematica"  => 8,
                "Italiano"    => 7,
                "Geografia"   => 5,
            ]
        ],
        [
        "Nome"      => "Luca",
            "Cognome"  => "Locatelli",
            "Voti"     => [
                "Matematica"  => 5,
                "Italiano"    => 7,
                "Geografia"   => 10,
            ]
        ],
        [
        "Nome"      => "Marco",
            "Cognome"  => "Rota",
            "Voti"     => [
                "Matematica"  => 5,
                "Italiano"    => 6,
                "Geografia"   => 4,
            ]
        ]
    ];

    // var_dump($scolari[$i]["Voti"]);
    // var_dump($mediaVoti);

    for ($i=0; $i < count($scolari); $i++) { 

        $mediaVoti = array_sum($scolari[$i]["Voti"])/ count($scolari[$i]["Voti"]);

        $mediaVotiDefinitiva = round($mediaVoti, 2);

        echo $scolari[$i]["Nome"]." ".$scolari[$i]["Cognome"]." | ".
        $mediaVotiDefinitiva."<br>";

    }       

    ?>

</pre>


