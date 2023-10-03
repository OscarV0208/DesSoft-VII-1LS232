<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>
<body>
    <h1>Calculo del factorial mediante un valor de entrada</h1>
    <p>Introduzca el numero:</p>
    <form id="Formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" id="i" name="i" value="<?php echo isset($_POST['i']) ? $_POST['i'] : ''; ?>" />
        <input type="submit" id="calcular" name="calcular" value="Factorial">
    </form>

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

    if (isset($_POST['calcular'])) {
        $inputNumero = isset($_POST['i']) ? (int)$_POST['i'] : 0;
        $calculator = new FactorialCalculator();
        $resultadoFactorial = $calculator->calcularFactorial($inputNumero);
        echo "El factorial del número es: " . $resultadoFactorial;
    }
    ?>
</body>
</html>