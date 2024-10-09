<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220pares050</title>
</head>
<body>
    <ul>
<?php

/*
<?php
echo "<ul>";
for($i=0;$i<=50;$i++){
    if($i%2==0){
        echo $i."</br>";
    }
}
echo "</ul>";
?>
*/

for($i=0;$i<=50;$i+=2)
    echo "<li> $i </li>";
?>
    </ul>
</body>
</html>
