<?php
    declare(strict_types=1);
    class Empleado{
        private string $nombre;
        private string $apellidos;
        private float $sueldo;
        public function __construct(string $nombre,string $apellidos,float $sueldo){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->sueldo = $sueldo;
        }
        public function getNombre() : string{
            return $this->nombre;
        }
        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function getApellidos() : string{
            return $this->nombre;
        }

        public function setApellidos(string $apellidos){
            $this->apellidos = $apellidos;
        }
        public function getSueldo() : float{
            return $this->sueldo;
        }
        public function setSueldo(float $sueldo){
            $this->sueldo = $sueldo;
        }
        public function getNombreCompleto() : string{
            return $this->nombre . " " . $this->apellidos;
        }
        public function debePagarImpuestos() : bool   {
            return $this->sueldo > 33333;
        }
    }
    $empl = new Empleado("Peppa","Pig",4444);
    echo $empl->getNombreCompleto()."<br>";
    echo $empl->debePagarImpuestos()?"Debe pagar impuestos":"No debe pagar impuestos";
?>