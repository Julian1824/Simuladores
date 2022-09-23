<?php
if(!empty($_POST["Guardar"])){
    $clave=$_POST["clave"];
    if($clave === "TG*2021e"){
    if(!empty($_POST["nombre_oficina"]) and !empty($_POST["region"] and !empty($_POST["direccion"])) and !empty($_POST["municipio"]) and
    !empty($_POST["entrega_somos"]) and !empty($_POST["puntos_referencia"]) and !empty($_POST["horario"])){


        $nombre_oficina = $_POST["nombre_oficina"];
        $region = $_POST["region"];
        $direccion = $_POST["direccion"];
        $municipio = $_POST["municipio"];
        $entrega_somos = $_POST["entrega_somos"];
        $puntos_referencia = $_POST["puntos_referencia"];
        $horario = $_POST["horario"];

        $sql = $conexion->query("INSERT INTO matriz_oficina (oficina,region,direccion,
        municipio,entrega_somos,puntos_referencia,horario) VALUES(
        '$nombre_oficina','$region','$direccion',
        '$municipio','$entrega_somos','$puntos_referencia','$horario')");


if($sql==1){
    header("location:../../editor.php");   
}else{
    echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
    Error al Registrar
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
}
//echo "Todo ok";
}else{
echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
Algun campo esta vacio
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
}
}else{
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Clave incorrecta
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
    }
}

?>