<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
    if($a==$b && $a==$c){
        echo "Triangulo Equilátero.<br>";
    }else if ( (($a==$b)&&$a!=$c) || (($a==$c)&&$a!=$b) || (($b==$c)&&$b!=$a) ){
            echo "Triangulo Isósceles.<br>";
        }else{
            echo "Triangulo Escaleno.<br>";
        }
    if(($b**2+$c**2==$a**2)||($a**2+$c**2==$c**2)||($b**2+$a**2==$c**2)){
        echo "Triangulo Rectángulo.";
    }
?>