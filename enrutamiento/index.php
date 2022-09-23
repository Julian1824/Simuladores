<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/login.css">
    <script src="https://kit.fontawesome.com/31b8330cb0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <img src="./public/assets/banner_1.png" alt="">
    </div>
    <div class="cajafuera" align="center">

        <div class="formulariocaja">
            <form method="post" action="./View/usuarios/validarLogin.php">
                <div class="formtitulo" align="left"><i class="fa-solid"> Login</i></div>
                <input type="text" name="userLogin" placeholder="&#128273; Ingresar usuario" class="cajaentradatexto">
                <input type="submit" value="Iniciar sesión" class="botonenviar">

            </form>
        </div>
</body>

</html>