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
            <div class="card-header">
                <button type="button" class="close" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="text-center"><?php echo "Chat de: " . $_SESSION['usuario'] . " a " . $_SESSION['para']; ?></h5>
            </div>
            
            <div class="card-body">
                <div class="">
                    <form id="formchat" class="ml-3" onsubmit="return registrarMensajes()" action="#" method="POST">
                        <div class="form-group">
                            <div id="conversacion" class="conversacion"></div>
                        </div>
                        <div class="form-group">
                            <input id="mensaje", name="mensaje", placeholder="Introduce un mensaje" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="enviar" value="Enviar" class="btn btn-color btn-block">
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¡Advertencia!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>¿Estas seguro de querer finalizar la conversación? Todos los datos de la conversación serán borrados.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="borrarConversacion()">Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Controladores/ajax.js"></script>
</body>
</html>