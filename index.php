<?php include('lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="titulo">
            <div id="Logo"> Logo </div>
            <div id="tituloPagina"> Titulo De La Página </div>
        </div>
        <div id="MenuPrincipal"> Menu Principal 
            <div id="contenido">
            Contenido
            <?php
            var_dump(session_id());
            $_SESSION["hm"]="Hola Mundo";
            ?>
            ?>
            </div>
        </div>
    </body>
</html>
