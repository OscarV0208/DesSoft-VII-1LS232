<?php
class FactorialCalculator {
    public function calcularFactorial($numero) {
        $resultado = 1;
        while ($numero > 1) {
            $resultado *= $numero;
            $numero--;
        }
        return $resultado;
    }
}
?>