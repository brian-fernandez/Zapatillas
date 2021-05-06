
<?php
    include_once 'persona.php';
    include_once 'cliente.php';
    class reserva extends Cliente{

        private int $idReserva=0;

        function __construct()
        {
            
        }
        public function setid($ci)
        {
            $this->idReserva=$ci;
        }
        public function getCi()
        {
            return $this->idReserva;
        }
        public function atenderReserva(){
            $id=$this->idReserva;
            if($id!=0)
            {
                include '../php/conexion.php';
                $consulta = "UPDATE `reserva` SET `estado` = 'Entregado' WHERE `reserva`.`idReserva` = $id;";
                $ejecutar = $conexion->query($consulta);
                
                
               
            }
            else
            {
                echo "$id ERRRRORRRR";
            }
            
        
            


        }

        
    }



?>