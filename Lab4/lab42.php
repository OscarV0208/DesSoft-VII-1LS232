<?php
$i=0;
$n=1;
?>

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
  <input type="text" id="i" name="i" value="<?php echo $i; ?>" />
  <input type="submit" id="calcular" name="calcular" value="Factorial">
  </form>
</body>
</html>

<?php

do{
    $n =$n * $_REQUEST['i'];
    $_REQUEST['i'] -=1;
}

while($_REQUEST['i'] > 1);
echo "El factorial del numero es:" . $n;
?> 