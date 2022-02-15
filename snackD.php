<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<pre>

    <?php

        $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dignissimos magni, aspernatur necessitatibus a molestiae. voluptatibus nam dolorum sapiente doloribus maxime obcaecati debitis asperiores laudantium rerum veritatis? Illum est cumque, ea. Expedita at voluptates quidem neque cupiditate delectus aperiam vitae?";

        $nuovoPragrafo = explode(".", $paragrafo);

        var_dump($nuovoPragrafo);
    ?>

</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-D</title>
</head>
<body>
    
<p>
    <?php
        echo $paragrafo
    ?>
</p>

</body>
</html>