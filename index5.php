<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>
    <h1>EJERCICIO 5</h1>

    <p>Dada la base y la altura de un rectangulo, calcule el perimetro y la superficie.</p>
    <p>Superficie = base * altura &nbsp;&nbsp;|&nbsp;&nbsp; Perimetro = 2 * (base + altura)</p>

    <form method="POST" action="index5.php">
        <label for="base">Base:</label>
        <input type="number" name="base" id="base" step="any" required>
        <br><br>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" step="any" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $superficie = $base * $altura;
        $perimetro = 2 * ($base + $altura);

        echo "<hr>";
        echo "<h3>Base: $base &nbsp;&nbsp; Altura: $altura</h3>";
        echo "<h3>La superficie del rectangulo es de " . number_format($superficie, 2) . "</h3>";
        echo "<h3>El perimetro del rectangulo es de " . number_format($perimetro, 2) . "</h3>";
    }

    ?>
</body>
</html>
