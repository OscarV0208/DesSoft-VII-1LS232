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
?>