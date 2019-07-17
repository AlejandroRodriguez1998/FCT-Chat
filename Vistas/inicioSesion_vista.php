<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mi.css">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header text-center">Iniciar Conversación</h5>
            <div class="card-body text-center">
                <form class="m-3" action="#" method="POST">
                    <div class="form-group">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre de Usuario"  class="form-control w-25 d-inline">
                    </div>

                    <?php
                        if(isset($_POST['entrar'])){
                            require_once("Controladores/iniciarSesion_controlador.php");
                        }

                        if(isset($_POST['iniciar'])){
                            require_once("Controladores/iniciar_controlador.php");
                        }
                    ?>

                    <div class="form-group">
                        <input type="submit" name="iniciar" value="Iniciar" class="btn btn-success pl-4 pr-4">
                        <input type="submit" name="entrar" value="Iniciar Sesión" class="btn btn-color">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
