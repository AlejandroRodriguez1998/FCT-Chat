<?php
    session_start();

    require_once("db.php");
    $db = Conectar::conexion();

    require_once("../Modelos/usuarios_modelo.php");
    $per = new usuarios_model();

    $de = $_SESSION['usuario'];
    $a = $_SESSION['para'];
    $clave = ord($de) + ord($a);
    
    $consulta = $db -> query("SELECT * FROM conversacion WHERE ClaveConversa = $clave ORDER BY ID asc");

    while($data = mysqli_fetch_assoc($consulta)){
        if($data['De'] == $de || $data['De'] == $a){
            if($data['De'] == $de){
                echo '<div>
                        <span class="divDE">' . $data['mensaje'] . '<p class="text-right m-0">' . substr($data['Fecha'],11,5) . '</p></span>
                      </div>';
            }else{
                echo '<div class="d-flex flex-row-reverse">
                        <span class="divA">' . $data['mensaje'] . '<p class="text-right m-0">' . substr($data['Fecha'],11,5) . '</p></span>
                      </div>';
            }
        } 
    }
?>