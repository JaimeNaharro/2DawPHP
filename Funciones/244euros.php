<?php
    declare(strict_types=1);
    function pesetas2euros(float $cantidad, float $cotizacion=166.386): float{
        return $cantidad/$cotizacion;
    }
    function euros2pesetas(float $cantidad, float $cotizacion=166.386): float{
        return $cantidad*$cotizacion;
    }
    echo pesetas2euros(34500)."<br>";
    echo euros2pesetas(150,180.65);
?>