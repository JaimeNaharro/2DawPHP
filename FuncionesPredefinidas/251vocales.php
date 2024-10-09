<?php
$cadena="Hola que tal, buenos dias.";
$arr=[];
$contA=0;
$contE=0;
$contI=0;
$contO=0;
$contU=0;
$i=0;

while($i<strlen($cadena)){
    switch($cadena[$i]){
        case "A":
        case "a":
            $contA++;
            break;
        case "E":
        case "e":
            $contE++;
            break;
        case "I":
        case "i":
            $contI++;
            break;
        case "O":
        case "o":
            $contO++;
            break;
        case "U":
        case "u":
            $contU++;
            break;
    }
    $i++;
}
echo "Cantidad de a: ".$contA."<br>";
echo "Cantidad de e: ".$contE."<br>";
echo "Cantidad de i: ".$contI."<br>";
echo "Cantidad de o: ".$contO."<br>";
echo "Cantidad de u: ".$contU."<br>";
echo "Total: ".$contA+$contE+$contI+$contO+$contU;
?>