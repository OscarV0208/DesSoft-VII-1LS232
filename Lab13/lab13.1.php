<?php
if(isset($_COOKIE['contador']))
{
    setcookie('contador',$_COOKIE['contador']+1, time() + 365*24*60*60);
    $mensaje= ' Gracias por visitarnos. numero de visitas: '.$_COOKIE['contador'];
}
else
{
    //Caduca en un año
    setcookie('contador',1,time()+365*24*60*60);
    $mensaje='Bienvenido a nuestro sitio web';
}
?>
<HTML XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
    <HEAD>
        <TITLE>Laboratorio 13</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </HEAD>
    <BODY>
        <H1>Contador de visitas con cookies</H1><p>
            <H3><?php echo $mensaje; ?></H3>
        </p>

    </BODY>
</HTML>