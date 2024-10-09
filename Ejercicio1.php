<?php
    /*$a=21; 
    $b='22';
    echo ' Resultado1: ' ;
    echo $a <= $b;
    echo ' Resultado2: ';
    echo $a !== $b;*/

    //---------------------------
   
    if(isset($_GET['a'])&& isset($_GET['b'])){
        $a= $_GET['a'];
        $b= $_GET['b'];
    }else{
        echo 'faltan datos';
    }
    
    $usuario='Jaime';
    $resultado = $usuario == ''?'invitado':$usuario;
    echo $resultado;

    
?>