<?php
    require_once("DB/db.php");

    if(isset($_POST['hablar'])){
        require_once("Controladores/chat_controlador.php");
    }

    if(isset($_POST['cerrar'])){
        session_start();

        require_once("Modelos/usuarios_modelo.php");
        $per = new usuarios_model();
        
        if($per -> esTrabajador($_SESSION['usuario'])){
            $per -> modificarEstado(0,$per -> get_id($_SESSION['usuario']));
        }
        
        session_destroy();
        header('Location: index.php');
    }
    
?>

