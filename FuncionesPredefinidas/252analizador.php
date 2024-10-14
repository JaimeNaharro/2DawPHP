<?php
    $frase="Hay un gato en el tejado";
    $numLetras=0;
    $numPalabras=1;
    for($i=0;$i<strlen($frase);$i++){
        if($frase[$i]==' '){
            $numPalabras++;
        }else{
            $frase[$i];
            $numLetras++;
        }
    }
    echo "Numero de letras: ".$numLetras."<br>";
    echo "Numero de palabras: ".$numPalabras;
?>