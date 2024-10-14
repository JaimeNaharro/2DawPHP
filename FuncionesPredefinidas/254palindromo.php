<?php
$frase="ligar es ser ail";
function palindromo(string $frase): bool{
    $palabra="";
    $aux="";
    for($i=0;$i<strlen($frase);$i++){
        if($frase[$i]=' '){

        }else{
            $aux.=$frase[$i];
            
        }
        echo $aux;
    }
    for($i=strlen($frase)-1;$i>=0;$i--){
        if($frase[$i]=' '){

        }else{
            $palabra.=$frase[$i];
            
        }
    }
    return $aux===$palabra;
}
echo palindromo($frase);
?>