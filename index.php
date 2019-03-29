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
        <div id="Logo">
            <div id="titulo"></div>
            <div id="tituloPagina">
            <div id="contenido"></div>
        </div>
        <?php
            var_dump(session_id());
            $_SESSION["hm"]="Hola Mundo";
            ?>
        ?>
    </body>
</html>
