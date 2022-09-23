<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <title>Editar</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    include "../../Model/conexion.php";
    include("../../Controller/usuariosController/registroController.php");
    ?>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="col-7">
                <form method="POST" class="bg-light rounded">

                    <h3 class="titulos text-center bg-success">Registrar</h3>
                    <div class="p-5">
                        <label for="Nombre Usuario" class="">Nombre Usuario</label>
                        <input name="usuario" cols="30" rows="3" class="form-control" value="">
                    </div>
                    <div class="d-flex justify-content-center">

                        <div class="col-6">
                            <label>Contraseña</label>
                            <input type="password" name="clave" class="form-control" id="" aria-describedby="Nombre Oficina">
                        </div>

                    </div>

                    <div class="row p-1">
                        <div class="col s6">
                            <button type="submit" class="btn buttonConfirmar w-100" name="btnRegistroUsuarios" value="oklisto">Guardar</button>
                        </div>
                        <div class="col s6">
                            <a href="../../editor.php"><button type="button" class="btn buttonCancelar w-100" name="btnEliminarReapuestas" value="oklisto">Cancelar</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>

</html>