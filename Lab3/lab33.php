<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3.3</title>
</head>
<body>
    <?php

    if (array_key_exists ('enviar', $_POST)){
        if($_REQUEST['Apellido'] !="")
        {
            echo " El apellido Ingresado es: $_REQUEST[Apellido]";
        }
        else
        {
            echo "Favor coloque el apellido";
        }
        echo "<BR>";
        
    if($_REQUEST['Nombre'] != "")
    {
        echo "El nombre Ingresado es : $_REQUEST[Nombre]";
    }
    else
    {
        echo "Favor coloque el nombre";
    }
    }
    else{
    ?>
        <FORM ACTION = "lab33.php" METHOD = "POST">
            Nombre: <input type="text" NAME="Nombre"><br>
            Apellido: <input type="text" NAME="Apellido"><br>
            <input type ="submit" name="Enviar" value="Enviar Datos">
        </FORM>
        <?php
        ?>
</body>
</html>