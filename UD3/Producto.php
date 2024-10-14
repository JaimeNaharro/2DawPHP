<?php
    class Producto{
        const IVA = 0.23;
        private static $numProductos = 0;
        private $codigo;

        public function __construct(string $cod){
            self::$numProductos++;
            $this->codigo = $cod;
        }

        public function mostrarResumen()  {
            echo "El producto " . $this->codigo . " es el numero " . self::$numProductos;
        }
    }
    $prod1 = new Producto("PS5");
    $prod2 = new Producto("XBOX Series X");
    $prod3 = new Producto("Nintendo Switch");
    $prod3->mostrarResumen();
?>