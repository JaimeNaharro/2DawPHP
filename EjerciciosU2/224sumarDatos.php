<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>224sumarDatos</title>
</head>
<body>

    <?php
        $cantidad=$_GET['cantidad'];
        $res=0;
        for($i=0;$i<$cantidad;$i++){
        $res+=$_GET['caja$i'];
        }
        echo $res;
    ?>

</body>
</html>