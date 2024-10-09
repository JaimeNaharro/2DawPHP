<?php
declare (strict_types=1);
function esPar(int $num) : bool{
    return $num%2 == 0;
}
echo esPar(22)? "Es par" : "Es impar";
echo "<br>";
function arrayAleatorio(int $tam, int $min, int $max) : array{
    $numAlea=array();
    for($i=0;$i<$tam;$i++){
        $numAlea[$i]=rand($min,$max);
    }
    return $numAlea;
}
function mostrarArray(array $arr){
    foreach($arr as $value){
        echo $value." ";
    }
}
//mostrarArray(arrayAleatorio(7,2,20));
function arrayPares(array &$array):int{
    $cuentaPares=0;
foreach($array as $value){
    if(esPar($value)){
        $cuentaPares++;
    }
}
return $cuentaPares;
}
$arrResultado=arrayAleatorio(10,1,5);
mostrarArray(($arrResultado));
echo "<br>".arrayPares($arrResultado);
?>