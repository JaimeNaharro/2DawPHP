<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220paresAB</title>
</head>
<body>
<?php
$inicio=$_GET["inicio"];
$final=$_GET['final'];
/*
echo "<ul>";
if($inicio%2 != 0')
$inicio++;
for($i=$inicio;$i<=$final;$i+=2)
    echo "<li> $i </li>";
    echo "</ul>";
?>*/
for($i=$inicio;$i<=$final;$i++){
    if($i%2==0){
        echo $i."</br>";
    }
}
?>
</body>
</html>