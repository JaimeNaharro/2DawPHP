<?php
declare(strict_types=1);
/*$valor1=$_GET["valor1"];
$valor2=$_GET["valor2"];*/
    function suma(...$numeros){
        //$arrArgEntrada=func_get_args();
        $resultado=0;
        //foreach($arrArgEntrada as $valor){
        foreach($numeros as $valor){
            $resultado+=$valor;
        }
        return $resultado;
    }
echo suma(0,9,8);