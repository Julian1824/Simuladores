<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>

    <?php
header('Content-Type: text/html; charset=UTF-8');  
require('../../Model/conexion.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

 
 $sql = ("DELETE FROM usuario_e");
 $Resultado = mysqli_query($conexion, $sql);

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

    $datos = explode(";", $linea);
       
    $usuario= utf8_encode(trim($datos[0]));
       
    $sqlInsertPersona = ("INSERT INTO usuario_e(user_login) VALUES('$usuario')");
    
    $queryResultado = mysqli_query($conexion, $sqlInsertPersona);

  } 

    //  echo '<center><div>'. $i. "). " .utf8_encode($linea).'</div></center>';
    $i++;
}


//  echo '<center><p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p></center>';
  echo '<script language="javascript">alert("'. $cantidad_regist_agregados .'  Registro guardados con exito");</script>';
  header('Location: ../../Editor.php');
    ?>

</body>

</html>