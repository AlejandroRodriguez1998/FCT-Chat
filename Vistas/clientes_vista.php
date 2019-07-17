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
            <div class="card-header d-flex">
                <h5 class="mr-auto mt-2">Conversaciones pendientes</h5>
                <p class="m-0 mt-2 mr-2"><?php echo "Bienvenido " . $_SESSION['usuario']; ?></p>
                <form action="chat.php" method="POST">
                    <input type="submit" name="cerrar" value="Cerrar Sesión" class="btn btn-danger">
                </form>
            </div>
            <div class="card-body">
                <form class="" action="chat.php" method="POST">
                    <?php
                        if(!empty($datos)){
                            echo '<input type="radio" name="cliente" value="' . $datos . '" required> ' . $datos .'<br>';
                            echo '<input type="submit" name="hablar" value="Hablar con cliente" class="btn btn-color mt-2">';
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>