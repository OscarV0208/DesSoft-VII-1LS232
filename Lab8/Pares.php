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

    class NumerosPares {
        private $numerosPares = array();

        public function agregarNumero($numero) {
            if ($numero % 2 == 0) {
                $this->numerosPares[] = $numero;
                $_SESSION['numeros_pares'] = $this->numerosPares;
            } else {
                echo "<p>Por favor, introduce un número par.</p>";
            }
        }

        public function obtenerNumerosPares() {
            return isset($_SESSION['numeros_pares']) ? $_SESSION['numeros_pares'] : array();
        }
    }

    $numerosParesHandler = new NumerosPares();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
        $numero = $_POST["numero"];
        $numerosParesHandler->agregarNumero($numero);
    }

    ?>

    <h2>Números Pares:</h2>
    <ul>
        <?php
        $numerosPares = $numerosParesHandler->obtenerNumerosPares();
        foreach ($numerosPares as $par) {
            echo "<li>$par</li>";
        }
        ?>
    </ul>

</body>
</html>