
<?php
    include_once("243biblioteca.php");
    $operacion=$_GET["operacion"];
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    echo $operacion($num1,$num2)."<br>";
?>