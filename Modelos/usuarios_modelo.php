<?php
    class usuarios_model{
        private $db;
        private $usuarios;
    
        public function __construct(){
            $this -> db = Conectar::conexion();
            $this -> usuarios = array();
        }

        public function generarNombre() { 
            return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10); 
        }

        public function esTrabajador($nombre){
            $consulta = $this -> db -> query("SELECT departamento FROM personas WHERE Nombre = '" . $nombre . "'");
            $tipo = $consulta -> fetch_assoc();
            
            if(!empty($tipo)){
                return true;
            }else{
                return false;
            }
        }

        public function get_usuario($nombre){
            $consulta = $this -> db -> query("SELECT Nombre FROM personas WHERE Nombre = '" . $nombre . "'");
            $nombre = $consulta -> fetch_assoc();

            if(empty($nombre['Nombre'])){
                return false;
            }else{
                return true;
            }
        }

        public function get_id($nombre){
            $consulta = $this -> db -> query("SELECT ID FROM personas WHERE Nombre = '" . $nombre . "'");
            $ID = $consulta -> fetch_assoc();
            return $ID['ID'];
        }
        
        public function get_departamento($nombre){
            $consulta = $this -> db -> query("SELECT d.nombre FROM personas p, departamentos d WHERE p.nombre = '$nombre' AND p.Departamento = d.ID");
            $nombre = $consulta -> fetch_assoc();
            return $nombre['nombre'];
        }

        public function modificarEstado($estado,$id){
            $this -> db -> query("UPDATE personas SET Trabajando = $estado WHERE ID = $id");
        }

        public function modificarDisponibilidad($estado,$id){
            $this -> db -> query("UPDATE personas SET Disponible = $estado WHERE ID = $id");
        }

        public function asignarAgente($id){
            $consulta = $this -> db -> query("SELECT Nombre 
                                              FROM personas 
                                              WHERE Trabajando = 1 
                                              AND Disponible = 1 
                                              AND Departamento = $id");
            $nombre = $consulta -> fetch_assoc();
            
            return $nombre['Nombre'];
        }

        public function conseguirCliente($nombre){
            $consulta = $this -> db -> query("SELECT De FROM conversacion WHERE A = '$nombre'");
            $nombre = $consulta -> fetch_assoc();
            return $nombre['De'];
        }
    }
?>