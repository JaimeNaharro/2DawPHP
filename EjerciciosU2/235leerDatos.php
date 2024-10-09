<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="235alturas.php" method="get">
<?php
        $cantidad=0;

        while($cantidad!=5){
            printf("Nombre: ");
            printf("<p><input type=text name=nombre%d></p>",$cantidad);
            printf("Altura: ");
            printf("<p><input type=text name=altura%d></p>",$cantidad);
            printf("<input type=submit value=Siguiente><br>");
            $cantidad++;
        
        }
?>
       <input type=submit value=Enviar>;
    </form>
</body>
</html>