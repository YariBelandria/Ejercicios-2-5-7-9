<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9</title>
</head>
<body>
    <h1>EJERCICIO 9</h1>

    <p>Los surtidores registran lo que surten en galones, pero el precio de la gasolina
       esta fijado en litros. Calcule lo que hay que cobrarle al cliente.</p>
    <p>1 galon = 3.785 litros &nbsp;&nbsp;|&nbsp;&nbsp; precio del litro = 4.50 Bs.</p>

    <form method="POST" action="index9.php">
        <label for="galones">Galones surtidos:</label>
        <input type="number" name="galones" id="galones" step="any" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $galones = $_POST["galones"];

        $litros = $galones * 3.785;
        $total = $litros * 4.50;

        echo "<hr>";
        echo "<h3>Galones surtidos: " . number_format($galones, 2) . "</h3>";
        echo "<h3>Equivale a " . number_format($litros, 3) . " litros</h3>";
        echo "<h3>El monto a cobrar es de " . number_format($total, 2) . " Bs.</h3>";
    }

    ?>

    <h1> hOLA </h1>
</body>
</html>
