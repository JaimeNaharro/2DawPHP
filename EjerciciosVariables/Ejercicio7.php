<?php
/*$base=$_GET['base'];
$exponente=$_GET['exponente'];*/
$base=5;
$exp=3;
$resultado=1;
while($exp>0){
    $resultado*=$base;
    $exp--;
}
/*for($i =$exp;$i>0;$i--){
    $resultado*=$base;
}*/

echo $resultado;
?>