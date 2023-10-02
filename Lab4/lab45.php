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
        $n = $_POST['n'];
        
        if ($n % 2 == 0) { 
            echo "<h2>Matriz Identidad de Orden $n:</h2>";
            echo "<table border='1'>";
            
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>Por favor, ingrese un número par para N.</p>";
        }
    }
    ?>
</body>
</html>
