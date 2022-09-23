<!doctype html>
<html lang="en">
<?php
        session_start();
		if(!isset($_SESSION['userLogin'])){
			header('location:index.php');
		}else{
			if((time() - $_SESSION['time']) > 1200){
				header('location: cerrar_session.php');
			}
		}

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="//biblioteca.emtelco.co/_plugins/jquery/1.11.1/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/31b8330cb0.js" crossorigin="anonymous"></script>
    <title>Enrrutadores</title>
</head>

<body style="height: 100vh;">

    <!-- Navigation -->

    <?php include "./View/header/header.php"; ?>

    <!-- modales -->
    <!-- modal orientacion a la factura -->
    <?php include "./View/modal/modal_orienacion.php"; ?>

    <?php include "./View/modal/epm_puerta.php"; ?>

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
    <?php include "./View/modal/modal_oficinas_user.php"; ?>

    <!-- Modal Linea empresarial -->
    <?php include "./View/modal/modal_linea_empresarial.php"; ?>

    <!-- Modal  Directorio -->
    <?php include "./View/modal/modal_directorio.php"; ?>

    <!-- Modal  Directorio -->
    <?php include "./View/modal/modal_teguio.php"; ?>


    <div class="container">
        <ul class="nav nav-pills  mb-3 justify-content-center pt-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
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
        </ul>
        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="container">
                    <?php include "./View/modal/transaccion.php"; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="container">
                    <?php include "./View/modal/preguntasFrecuentes.php"; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                <div class="container">
                    <?php include "./View/modal/preguntasFlitro.php"; ?>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                crossorigin="anonymous"></script>

            <script src="main.js"></script>


</body>

</html>
<?php 
mysqli_free_result($sql);
mysqli_close($conexion); 
?>