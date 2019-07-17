<?php
    session_start();

    require_once("Modelos/usuarios_modelo.php");
    require_once("Modelos/departamentos_modelo.php");
    require_once("DB/db.php");
    $db = Conectar::conexion();
    $per = new usuarios_model();
    $dep = new departamentos_model();

    if($per -> esTrabajador($_SESSION['usuario'])){
        $agente = $_POST['cliente'];
    }else{
        $departamento = $_POST['departamento'];
        $agente = $per -> asignarAgente($dep -> get_id($departamento));
        $per -> modificarDisponibilidad(0,$per -> get_id($agente));

        $de = $_SESSION['usuario'];
        $clave = ord($agente) + ord($de);
        $mensaje = "Espere a ser atendido";

        $db -> query("INSERT INTO conversacion VALUES(null, null, $clave, '$de', '$agente', '$mensaje')");
    }
    
    if(empty($agente)){
        require_once("Vistas/noAgentes_vista.php");
    }else{
        $_SESSION['para'] = $agente;

        require_once("Vistas/chat_vista.php");
    }
?>