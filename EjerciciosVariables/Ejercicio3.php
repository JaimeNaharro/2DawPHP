<?php
$a=32;
echo $a . '<br>';
$primerNum=intdiv  ($a,10);
$numParaResta=$primerNum*10;
$segundoNum=$a-$numParaResta;
echo $segundoNum . $primerNum;
/*
$resto=$a%10;
$num2=intdiv  ($a,10);
echo $resto*10+$num2;
*/
?>