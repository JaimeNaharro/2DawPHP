<?php
$dinero=5888;
$monedas=["500"=>0,"200"=>0,"100"=>0,"50"=>0,"20"=>0,"10"=>0,"5"=>0,"2"=>0,"1"=>0];

foreach($monedas as $clave=>$valor){
    while($dinero>=$clave){
        $monedas[$clave]++;
        $dinero-=$clave;
    }
}
foreach($monedas as $clave=>$valor){
    if($valor>=1){
        echo "<ul><li>".$clave."=>".$valor."</li></ul>";
    }
}
?>