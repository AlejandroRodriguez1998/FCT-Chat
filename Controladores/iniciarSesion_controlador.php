<?php
    require_once("Modelos/usuarios_modelo.php");
    $per = new usuarios_model();

    $nombre = $_POST['nombre'];

    if($per -> get_usuario($nombre)){
        $per -> modificarEstado(1,$per -> get_id($nombre));
        $_SESSION['usuario'] = $nombre;
        header('Location: index.php');
    }else{
        echo "<p>Introduce un usuario valido</p>";
    }
?>