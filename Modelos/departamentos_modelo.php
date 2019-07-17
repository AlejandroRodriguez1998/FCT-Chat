<?php
    class departamentos_model{
        private $db;
        private $departamentos;
    
        public function __construct(){
            $this -> db = Conectar::conexion();
            $this -> departamentos = array();
        }

        public function get_departamentos(){
            $consulta = $this -> db -> query("SELECT * FROM departamentos;");
            while($filas = $consulta -> fetch_assoc()){
                $this -> departamentos[] = $filas;
            }
            return $this -> departamentos;
        }

        public function get_id($nombre){
            $consulta = $this -> db -> query("SELECT ID FROM departamentos WHERE Nombre = '" . $nombre . "'");
            $ID = $consulta -> fetch_assoc();
            return $ID['ID'];
        }
    }
?>