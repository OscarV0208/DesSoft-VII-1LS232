<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indicador de Desempeño en Ventas</title>
</head>
<body>
    <h1>Indicador de Desempeño en Ventas</h1>
    <form method="POST" action="">
        <label for="sales-performance">Porcentaje de Ventas:</label>
        <input type="number" id="sales-performance" name="sales_performance" min="0" max="100" step="1" required>
        <input type="submit" name="submit" value="Mostrar Imagen">
    </form>

    <?php
    if(isset($_POST["submit"])) {
        $salesPerformance = intval($_POST["sales_performance"]);
        $imagePath = "";
        $message = "";

        if ($salesPerformance > 80) {
            $imagePath = "exitosas.jpg";
            $message = "El desempeño de ventas es excelente: " . $salesPerformance . "%";
        } elseif ($salesPerformance >= 50 && $salesPerformance <= 79) {
            $imagePath = "intermedias.jpg";
            $message = "El desempeño de ventas es bueno: " . $salesPerformance . "%";
        } else {
            $imagePath = "deficientes.jpg";
            $message = "El desempeño de ventas es bajo: " . $salesPerformance . "%";
        }
        
        // Mostrar el mensaje y la imagen en la misma página
        echo "<p>$message</p>";
        echo "<img src=\"$imagePath\" alt=\"Imagen\">";
    }
    ?>

    <a href="javascript:history.back()">Volver al formulario</a>
</body>
</html>
