<?php
session_start();
?>
<HTML XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
    <HEAD>
        <TITLE> Laboratorio 12 </TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1> Manejo de Sesiones.</H1>
    <H2> Paso 1: se crea la variable de sesion y se almacena </H2>
    <?php
    $var="Ejemplo Sesiones";
    $_SESSION['var']=$var;
    print("<P>Valor de la variable de sesion: $var</P>\n");
    ?>
    <a href="lab12.2.php">PASO 2</a>
</BODY>
</HTML>