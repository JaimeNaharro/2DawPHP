<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222potencia</title>
</head>
<body>
    <?php
    /*
    $res=1;
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $i=0;
    do{
        $res*=$base;
        $i++;
    
    }
    while($i!=$exponente);
    echo $res;*/
    $sum=1;
    $base=9;
    $exponente=-3;
    $expAbs=abs($exponente);
    if($exponente>0)
    do{
            $sum *= $base;
            $exponente--; 
    }
    while($exponente != 0);
    elseif($exponente<0)
        echo 1/$sum;
   ?>
</body>
</html>