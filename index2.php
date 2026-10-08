<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
</head>
<body>
    <h1>EJERCICIO 2</h1>

    <p>Escriba el resultado de la siguiente expresion: (A + B)<sup>2</sup> / 3</p>

    <form method="POST" action="index2.php">
        <label for="a">A:</label>
        <input type="number" name="a" id="a" step="1" required>
        <br><br>

        <label for="b">B:</label>
        <input type="number" name="b" id="b" step="1" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        $result = ($a + $b) ** 2 / 3;

        echo "<hr>";
        echo "<h3>A = $a &nbsp;&nbsp; B = $b</h3>";
        echo "<h3>Su resultado es " . number_format($result, 2) . "</h3>";
    }

    ?>
</body>
</html>
