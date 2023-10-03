<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Matriz Identidad</title>
</head>
<body>
    <h1>Generar Matriz Identidad</h1>
    <form method="post">
        Ingrese el valor de N (número par):
        <input type="number" name="n" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    class MatrizIdentidadGenerator {
        private $n;

        public function __construct($n) {
            $this->n = $n;
        }

        public function generarMatriz() {
            $matriz = '';

            if ($this->n % 2 == 0) {
                $matriz .= "<h2>Matriz Identidad de Orden {$this->n}:</h2>";
                $matriz .= "<table border='1'>";

                for ($i = 0; $i < $this->n; $i++) {
                    $matriz .= "<tr>";
                    for ($j = 0; $j < $this->n; $j++) {
                        if ($i == $j) {
                            $matriz .= "<td>1</td>";
                        } else {
                            $matriz .= "<td>0</td>";
                        }
                    }
                    $matriz .= "</tr>";
                }

                $matriz .= "</table>";
            } else {
                $matriz .= "<p>Por favor, ingrese un número par para N.</p>";
            }

            return $matriz;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = isset($_POST['n']) ? (int)$_POST['n'] : 0;
        $generator = new MatrizIdentidadGenerator($n);
        echo $generator->generarMatriz();
    }
    ?>
</body>
</html>
