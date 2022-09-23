<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="//biblioteca.emtelco.co/_plugins/jquery/1.11.1/jquery-1.11.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/31b8330cb0.js" crossorigin="anonymous"></script>
    <title>Enrrutadores</title>
</head>

<body>

    <!-- Navigation -->

    <?php include "./View/header/header.php"; ?>

    <!-- modales -->
    <!-- modal orientacion a la factura -->
    <?php include "./View/modal/modal_orienacion.php"; ?>


    <!--modal_daños_acueducto -->
    <?php include "./View/modal/modal_daños_acueducto.php"; ?>


    <!-- Modal daños energia -->
    <?php include "./View/modal/modal_daños_energia.php"; ?>


    <!-- Modal SOMOS -->
    <?php include "./View/modal/modal_SOMOS.php"; ?>

    <!-- Modal SOLGAS -->
    <?php include "./View/modal/modal_SOLGAS.php"; ?>

    <!-- Modal revisiones periodicas -->
    <?php include "./View/modal/modal_revisiones_periodicas.php"; ?>


    <!-- Modal quejas -->
    <?php include "./View/modal/modal_revisiones_quejas.php"; ?>

    <!-- Modal Oficinas -->
    <?php include "./View/oficinas/modal_oficinas.php"; ?>

    <!-- Modal Oficinas -->
    <?php include "./View/modal/epm_puerta.php"; ?>

    <!-- Modal Linea empresarial -->
    <?php include "./View/modal/modal_linea_empresarial.php"; ?>

    <!-- Modal  Directorio -->
    <?php include "./View/modal/modal_directorio.php"; ?>

    <!-- Modal  Directorio -->
    <?php include "./View/modal/modal_teguio.php"; ?>


    <div class="container">
        <?php
    include("Controller/oficinaController/eliminarController.php");


    ?>

        <ul class="nav nav-pills  mb-3 justify-content-center pt-4" id="pills-tab" role="tablist">
            <li class="nav-item  bg-warning" role="presentation">
                <button type="button" class="transacciones active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" style="" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Transacciones</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="transacciones" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Preguntas frecuentes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="transacciones" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">Preguntas Filtro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="transacciones" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-usuarios" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">Usuarios</button>
            </li>
        </ul>
        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">

                <a href="View/transacciones/registroEpm.php"><button type="button" class="btn btn-success">Registrar
                        Transaccion</button></a>
                <?php
        include("Controller/transaccionController/eliminarController.php");
        include "./View/transacciones/transaccion.php"; ?>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">

                <a href="View/frecuentes/registroFreceuntes.php"><button type="button" class="btn btn-success">Registrar
                        Pregunta frecuentes</button></a>
                <?php
        include("Controller/frecuentesController/eliminarController.php");
        include "./View/frecuentes/preguntasFrecuentes.php"; ?>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">

                <a href="View/filtro/registroFiltro.php"><button type="button" class="btn btn-success">Registrar
                        Pregunta Filtro</button></a>
                <?php
        include("Controller/filtroController/eliminarController.php");
        include "./View/filtro/preguntasFlitro.php";
        ?>

            </div>

            <div class="tab-pane fade" id="pills-usuarios" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="container">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Subir archivo Excel
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Subir Excel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="./Controller/usuariosController/subir_csv.php" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="file-input text-center">
                                            <input type="file" name="dataCliente" id="file-input"
                                                class="file-input__input" accept=".csv" />
                                            <label class="file-input__label" for="file-input">
                                                <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                                                <span>Elegir Archivo CSV</span></label>
                                        </div>
                                        <div class="text-center mt-5">
                                            <input type="submit" name="subir" class="btn btn-success mt-2b tn-enviar"
                                                value="Subir Archivo CSV" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="View/usuarios/registros_usuario.php"><button type="button"
                            class="btn btn-success">Registrar Usuario</button></a>
                    <a href="View/usuarios/excelUsuarios.php"><button type="button"
                            class="btn btn-success">Excel</button></a>
                    <?php
          include "./View/usuarios/index_usuarios.php";
          ?>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                crossorigin="anonymous"></script>

            <script src="public/js/app.js"></script>


</body>

</html>