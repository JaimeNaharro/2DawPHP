<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>223tablaMultiplicar</title>
</head>
<body>
<?php echo"
<style>
table{
border: 1px solid black;
text-align: center;
}
</style>
<table>
<thead>
    <th>a<th>
    <th>*<th>
    <th>b<th>
    <th>=<th>
    <th>a*b<th>
    </tr>
</thead>";
$a=$_GET['a'];
$b=$_GET['b'];
for($i=0;$i<=$b;$i++){
    $res=$a*$i;
    echo "<tr>
    <th>$a<th>
    <th>*<th>
    <th>$i<th>
    <th>=<th>
    <th> $res <th>
    </tr>";
}
echo"
</table>
";
?>
</body>
</html>