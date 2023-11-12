<?php
session_start();
?>
<HTML>
    <HEAD>
        <TITLE>Laboratorio 12</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </HEAD>
    <BODY>
        <H1>Manejo de Sesiones.</H1>
        <H2>Paso 3: La variable ya ha sido destruida y su valor se ha perdido</H2>
        <?php
        if(isset($_SESSION['var']))
        {
            $var=$_SESSION['var'];
        }else {
            $var="";
        }
        print("<P>Valor de la variable de sesion: $var</P>\n");
        session_destroy();
        ?>
        <A HREF="lab12.1.php">Volver al Paso 1</A>
    </BODY>
</HTML>