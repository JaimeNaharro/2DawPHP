<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ticket de la compra: </h1>
<table>
<tr>
<th>Producto</th>
<th>Euros</th>
<th>Pesetas</th>
</body>
</html>

<?php
$tot=0;
$cant=$_GET['cant'];
for($i=0;$i<$cant;$i++){
    echo "<tr>
            <td>".'$prod'+$i."<td>
            <td>".$num+$i."<td><tr>";
            $tot+=$num+$i;
}
echo "</table>";
?>