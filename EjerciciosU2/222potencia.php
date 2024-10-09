<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222potencia</title>
</head>
<body>
    <?php
    $res=1;
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    for($i=1;$i<=$exponente;$i++){
        $res*=$base;
    }
    echo $res;
    ?>
</body>
</html>