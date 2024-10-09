<?php
$minutos=1000;

$horas=intdiv($minutos, 60);


$mins=$minutos%60; 
/*
$tm=$minutos%60;
$th=$tm/100;
*/
echo 'Total Horas: ' . $horas . '<br>';
echo 'Total Minutos: ' . $mins;
?>