<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>
    <?php

    print"<hr>";
    print"<h1> EJERCICIO 5 </h1>";

    print"<p>Construya un programa tal que dado como datos la base y la altura ";
    print"de un rectangulo, calcule el perimetro y la superficie del mismo. </p>";
    print"<hr>";

    $base = 10;
    $altura = 5;

    $superficie = $base * $altura;
    $perimetro = 2 * ($base + $altura);

    print"<h3> La base del rectangulo es $base y la altura es $altura </h3>";
    print"<h3> La superficie de su rectangulo es de $superficie </h3>";
    print"<h3> El perimetro de su rectangulo es de $perimetro </h3>";

    print"<hr>";

    ?>
</body>
</html>