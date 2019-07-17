<?php
    session_start();

    require_once("DB/db.php");

    if(!isset($_SESSION['usuario'])){
        require_once("Controladores/usuarios_controlador.php");
    }else{
        require_once("Controladores/mostrarUsuarios_controlador.php");
    }
    
?>

