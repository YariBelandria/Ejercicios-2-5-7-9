<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9</title>
</head>
<body>
    <?php

    print"<hr>";
    print"<h1> EJERCICIO 9 </h1>";

    print"<p>Los surtidores de la gasolinera registran lo que surten en galones, ";
    print"pero el precio de la gasolina esta fijado en litros. Calcule e imprima ";
    print"lo que hay que cobrarle al cliente. </p>";
    print"<p> 1 galon = 3.785 litros y el precio del litro es 4.50 Bs. </p>";
    print"<hr>";

    $galones = 4;
    $precio_litro = 4.50;

    $litros = $galones * 3.785;
    $total = $litros * $precio_litro;
    $total = round($total, 2);

    print"<h3> El cliente surte $galones galones </h3>";
    print"<h3> Esa cantidad equivale a $litros litros </h3>";
    print"<h3> El monto a cobrar es de $total Bs. </h3>";

    print"<hr>";

    ?>
</body>
</html>