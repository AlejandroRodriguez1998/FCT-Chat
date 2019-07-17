<?php
    session_start();

    require_once("db.php");
    $db = Conectar::conexion();

    $de = $_SESSION['usuario'];
    $a = $_SESSION['para'];
    $clave = ord($de) + ord($a);
    $mensaje = $_POST['mensaje'];

    if(trim($mensaje) != ""){
        $consulta = $db -> query("INSERT INTO conversacion VALUES(null, null, $clave, '$de', '$a', '$mensaje')");

        if($consulta){
            echo "Mensaje registrado";
        }
    }
?>