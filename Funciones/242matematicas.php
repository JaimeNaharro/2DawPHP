<?php

/*function digitos(int $num): int{
    $numCifras=0;
    while($num!=0){
        $num=intdiv($num,10);
        $numCifras++;
    }
    return $numCifras;
}*/
function digitos(int $num): int{
    $numCifras=0;
    do{
        $numCifras++;
        $num=intdiv($num,10);
    }
    while($num!=0);
    return $numCifras;
}
$res=digitos(1041778);
echo $res."<br>";

function digitosN(int $num, int $pos): int{
    $posicionNum=0;
    for($i=digitos($num);$i>=$pos;$i--){
            $posicionNum=$num%10;
            $num=intdiv($num,10);
        }
       
    return $posicionNum;
}
$numPos=digitosN(123456789,4);
echo $numPos."<br>";
/*
function quitaPorDetras(int $num, int $cant): int{
    $numsRest=0;
    for($i=1;$i<=$cant;$i++){
        if($i!=$cant){
            $num=intdiv($num,10);
        }
        else{
            $numsRest=intdiv($num,10);
            $num=intdiv($num,10);
        }
    }
    return $numsRest;
}*/
function quitaPorDetras(int $num, int $cant): int{
    $numsRest=0;
    for($i=1;$i<=$cant;$i++){
        if($i!=$cant){
            $num=intdiv($num,10);
        }
        else{
            $numsRest=intdiv($num,10);
            $num=intdiv($num,10);
        }
    }
    return $numsRest;
}
$numsPorDetras=quitaPorDetras(235878,2);
echo $numsPorDetras."<br>";

function quitaPorDelante(int $num, int $cant): int{
    //Para hallar los digitos
    $dig=digitos($num)-$cant;
    //Para saber por cuanto dividir
    $resto=10**$dig;
    //Para saber el resto
    $numResta=intdiv($num,$resto);
    //Para saber por que restar
    $res=$numResta*$resto;
    //Res
    return $num-$res;
}
$numsPorDelante=quitaPorDelante(23527879,4);
echo $numsPorDelante;
?>