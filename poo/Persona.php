<?php
    class Persona{
        public function __construct(private string $nombre, protected int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
        private function saludar(){
            echo "Hola, mi nombre es" . $this->nombre;
        }

    }













?>