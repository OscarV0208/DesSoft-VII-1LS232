<?php
session_start();
?>
<HTMl LANG="es">
    <HEAD>
        <TITle>Laboratorio 12</TITle>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </HEAD>
    <BODY>
        <H1>Manejo de Sesiones.</H1>
        <h2>Paso 2: Se accede a l variable de sesion almacenada y se destruye</h2>
        <?php
        if(isset($_SESSION['var']))
        {
            $var=$_SESSION['var'];
            print("<P>Valor de la variable de session: $var</P>\n");
            unset($_SESSION['var']);
            print("<A HREF='lab12.3.php'>PASO 3 </A>");
        }
        else {
            print("Sesion no iniciada, ir al <A HREF='lab12.1.php'>Paso 1 </A> para iniciar la sesion");
        }
        ?>
    </BODY>
</HTMl>