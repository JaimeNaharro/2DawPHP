<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221sumaAB</title>
</head>
<body>
    <?php
    $inicio=$_GET["inicio"];
    $final=$_GET["final"];
    $suma=0;
    for($i=$inicio;$i<=$final;$i++){
        $suma+=$i;
    }
    echo $suma;
    ?>
</body>
</html>