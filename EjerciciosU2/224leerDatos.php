<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>224leerDatos</title>
</head>
<body>
    <form action="224sumarDatos.php" method="get">
        <?php
        $cantidad=$_GET["cantidad"];

        for($i=1;$i<$cantidad;$i++){
            printf("<p><input type=number name=caja%d></p>",$i);
        }
        printf("<p><input type=number name=caja%d></p>",$cantidad);

        ?>
        <input type="submit">
    </form>
</body>
</html>