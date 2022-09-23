<?php
    if(!empty($_POST["btnGuardarEpm"])){
        $clave=$_POST["clave"];
        if($clave === "TG*2021e"){


        $transaccion = $_POST["transaccion"];
        $pregunta_filtro = $_POST["pregunta_filtro"];
        $respuestas_preguntas = $_POST["respuestas_preguntas"];
        $pregunta_frecuente = $_POST["pregunta_frecuente"];
        $programa_transferir = $_POST["programa_transferir"];
      
        $sql = $conexion->query("INSERT INTO matriz_epm (transaccion,pregunta_filtro,respuestas_preguntas,
        pregunta_frecuente,programa_transferir)
        VALUES('$transaccion','$pregunta_filtro','$respuestas_preguntas',
        '$pregunta_frecuente','$programa_transferir')");

if($sql==1){
    header("location:../../editor.php");        
}else{
echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
    Algún campo esta vacio
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
}
    }else{
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Clave incorrecta
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
        }
    }
