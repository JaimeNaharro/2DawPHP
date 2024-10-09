<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222potenciaWhile</title>
</head>
<body>
    <?php
    $res=1;
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    
    $expAbs=abs($exponente);
    
    while($expAbs > 0){
        $res *= $base;
        $expAbs--;
    }
    if($exponente<0)
        echo 1/$res;
    else
        echo $res;
    //$i=0;
    /*while($i!=$exponente){
        $res*=$base;
        $i--;
    }*/
    ?>
</body>
</html>