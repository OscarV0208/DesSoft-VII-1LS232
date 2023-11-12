<?php
session_start();

if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave']) )
{
    $usuario=$_REQUEST['usuario'];
    $clave=$_REQUEST['clave'];

    $salt= substr($usuario,0,2);
    $clave_crypt=crypt($clave,$salt);

    require_once "class/usuarios.php";

    $obj_usuarios = new usuarios();
    $usuario_valido = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

    foreach($usuario_valido as $array_resp)
    {
        foreach($array_resp as $value)
        {
            $nfilas=$value;
        }
    }
    if($nfilas>0)
    {
        $usuario_valido=$usuario;
        $_SESSION['usuario_valido']=$usuario_valido;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<HTML LANG="es">
    <HEAD>
        <TITLE>Laboratorio 14 - Login al sitio de noticias</TITLE>

    </HEAD>
    <BODY>
        <?php
        //sesion iniciada
        if(isset($_SESSION['usuario_valido']))
        {
            ?>
            <H1>Gestion de noticias</H1>
    <HR>
                <UL>
                    <LI><A HREF="lab14.2.php">Listar todas las noticias</A></LI>
                    <LI><A HREF="lab14.3.php">Listar las noticias por partes</A></LI>
                    <LI><A HREF="lab14.3.php">Buscar noticias</A></LI>
                </UL>
    </HR>
    <P>[<A HREF='logout.php'>Desconectar </A>]</P>
    <?php
        }
        
        //INTENDO DE ENTRADA FALLIDO
        else if (isset ($usuario))
        {
            print("<BR><BR>\n");
            print("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
            print("<P ALIGN='CENTER'>[<A HREF='login.php'>Conectar</A>]</P>\n");
        }
        //Sesion no iniciada
        else
        {
            print("<BR><BR>\n");
            print("<P CLASS='parrafocentrado'>Esta zona tiene el acceso restringido.<BR>"."Para entrar debe identificarse</P>\n");
            print("<FORM CLASS='entrada' NAME='login' ACTION='login.php' METHOD='POST'>\n");

            print("<P><LABEL CLASS='etiqueta-entrada'>Usuario:</LABEL>\n");
            print("<INPUT TYPE'TEXT' NAME='usuario' SIZE='15'></P>\n");
            print("<P><LABEL CLASS='etiqueta-entrada'>Clave:</LABEL>\n");
            print("<INPUT TYPE'PASSWORD' NAME='clave' SIZE='15'></P>\n");
            print("<P><INPUT TYPE='SUBMIT' VALUE='entrar'></P>\n");
            print("</FORM>\n");

            print("<P CLASS='parrafocentrado'>NOTA: Si no dispone de identificacion o tinee problemas "."para entrar<BR> pongase en contacto con el "."<A HREF='MAILTO:webmaster@localhost'>Administrador</A> del sitio</P>\n");
        }
        ?>
    </BODY>
</HTML>
