<?php
    session_start();

    require_once("db.php");
    $db = Conectar::conexion();

    require_once("../Modelos/usuarios_modelo.php");
    $per = new usuarios_model();

    $de = $_SESSION['usuario'];
    $a = $_SESSION['para'];
    $clave = ord($de) + ord($a);
    
    $consulta = $db -> query("DELETE FROM conversacion WHERE ClaveConversa = $clave");
    
    if($per -> esTrabajador($_SESSION['usuario'])){
        $per -> modificarDisponibilidad(1,$per -> get_id($_SESSION['usuario']));
    }else{
        $per -> modificarDisponibilidad(1,$per -> get_id($_SESSION['para']));
    }

?>