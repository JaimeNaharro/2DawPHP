<?php
//include_once("247ko.php");
    $usuario=$_GET["usuario"];
    $contraseña=$_GET["contraseña"];
    $arrUsuario=["Hola"=>123456,"Jaime"=>124578];
    if($arrUsuario=$usuario && $contraseña==$arrUsuario[$usuario]){
        include("247ok.php");
    }else{
        /*if($arrUsuario!=$usuario&&$contraseña==$arrUsuario[$usuario]){
            losDos();
        }else if($arrUsuario!=$usuario){
            usuario();
        }else{
            contraseña();
        }*/
        include("247ko.php");
    }
?>