<?php

    class Persona {
        public $nombre = "";
        public $apellidos = "";
        public $edad = "";
        public $carrera = "";
    
        function __construct($n, $a, $e, $c) {
            $this->nombre = $n;
            $this->apellidos = $a;
            $this->edad = $e;
            $this->carrera = $c;
        }
     
        function getNombre() {
            return $this->nombre;
        }
        function getApellidos() {
            return $this->apellidos;
        }
        function getEdad() {
            return $this->edad;
        }
        
        function getCarrera() {
            return $this->carrera;
        }
    }