<?php
    require_once("Modelos/departamentos_modelo.php");
    require_once("Modelos/usuarios_modelo.php");
    $dep = new departamentos_model();
    $per = new usuarios_model();
    
    if($per -> esTrabajador($_SESSION['usuario'])){
        $datos = $per -> conseguirCliente($_SESSION['usuario']);
        require_once("Vistas/clientes_vista.php");
    }else{
        $datos = $dep -> get_departamentos();
        require_once("Vistas/departamentos_vista.php");
    }

?>