<?php
function mayor(int $nums):int{
    $numMax=0;
    if(count(func_get_args())==0){
        return false;
    }else{
        $numMax = func_get_arg(0);
        foreach(func_get_args() as $arg){
            if($numMax<$arg){
                $numMax=$arg;
            }
        }
            return $numMax;
    }
   
}
$numeroMayor=mayor(1,15,2,30,6,8,7);
echo $numeroMayor ."<br>";
function concatenar(...$palabras):string{
    $palabraConcatenada="";
 
        foreach($palabras as $palabra){
            $palabraConcatenada .= $palabra ." ";
        }
    
    return $palabraConcatenada;
}
$palabraYaConcatenada=concatenar("Pon","Gato","Hola","Tortuga","Hielo","Perro");
echo $palabraYaConcatenada;
?>