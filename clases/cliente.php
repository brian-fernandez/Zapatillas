<?php
    include_once 'persona.php';
    
    class cliente extends Persona{
        private int $celular;
        private string $direccion;
        private string $ocupacion= "ninguna";
        private string $fechaRegistro;



        function __construct()
        {
            
        }
        public function setCi($ci)
        {
            $this->ci=$ci;
        }
        public function getCi()
        {
            return $this->ci;
        }
        
    }



?>