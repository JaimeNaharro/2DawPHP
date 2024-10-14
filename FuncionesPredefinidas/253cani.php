<?php
    $frase='Escribe uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI';
    function cani(string $frase):string{
        $fraseCani="";
        for($i=0;$i<strlen($frase);$i++){
            if($i%2==0){
                $fraseCani.=strtoupper($frase[$i]);
            }else{
                $fraseCani.=strtolower($frase[$i]);
            }
        }
        return $fraseCani;
    }
    echo cani($frase);
?>