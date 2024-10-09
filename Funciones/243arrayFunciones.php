<?php

    declare(strict_types=1);
    include_once("243biblioteca.php");

    $arrFunciones = ["sumar","restar","multiplicar","dividir"];
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];

        foreach($arrFunciones as $value){
            $funcion=$value;
            echo $funcion($num1,$num2)."<br>";
        }
    
?>