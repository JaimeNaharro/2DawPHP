<?php

$cant=$_GET['cant'];
echo "<form action=/2daw/Funciones/245imprimeTiquetCompra.php>";
for($i=0;$i<$cant;$i++){
    echo "<input type=text id=prod".$i.">
    <input type=number id=num".$i."><br>";
}
echo "<input type=submit id=Enviar></form>";
?>
