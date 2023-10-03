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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = isset($_POST['n']) ? (int)$_POST['n'] : 0;
        $generator = new MatrizIdentidadGenerator($n);
        echo $generator->generarMatriz();
    }
    ?>
</body>
</html>
