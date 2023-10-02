<!DOCTYPE html>
<html>
<head>
    <title>Programa de Números Pares</title>
</head>
<body>
    <h1>Programa de Números Pares</h1>

    <form method="post" action="">
        <label>Introduce un número:</label>
        <input type="number" name="numero" required>
        <input type="submit" name="agregar" value="Agregar">
    </form>

    <?php
    session_start();
    $numeros_pares = isset($_SESSION['numeros_pares']) ? $_SESSION['numeros_pares'] : array();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
        $numero = $_POST["numero"];
        
        if ($numero % 2 == 0) {
            $numeros_pares[] = $numero;
            $_SESSION['numeros_pares'] = $numeros_pares;
        } else {
            echo "<p>Por favor, introduce un número par.</p>";
        }
    }
    ?>

    <h2>Números Pares:</h2>
    <ul>
        <?php
        foreach ($numeros_pares as $par) {
            echo "<li>$par</li>";
        }
        ?>
    </ul>

</body>
</html>

