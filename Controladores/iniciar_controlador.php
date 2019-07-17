<?php
    session_start();

    require_once("DB/db.php");
    require_once("Modelos/usuarios_modelo.php");

    $per = new usuarios_model();
    $_SESSION['usuario'] = $per -> generarNombre();

    header('Location: index.php');
?>