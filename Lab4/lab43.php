<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <h1>Manejo de Arreglos P1</h1>
</body>
</html>

<?php

$arreglo = array(25,73,48,29,97,28,65,9,14,3,4,82,59,79,17,42,35,11,57,1);

$n=0;
for($n = 0; $n < 20; $n++) 
{
    echo $arreglo[$n];
    echo '<br>';
    
}
echo '<br>';

$mayor=0;
$vec=0;
for($n = 0; $n < 20; $n++) 
{
    if($arreglo[$n] > $mayor){
        $mayor = $arreglo[$n];
        $vec = $n;
    }
}
echo  "El valor mas grande es:".$mayor; 
echo '<br>';
echo "y esta ubicado en el vector:" .$vec;
?>