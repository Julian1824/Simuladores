<?php

if(!empty($_POST["btnFrecuenciaEliminar"])){
    $clave=$_POST["clave"];
    if($clave === "TG*2021e"){
        if(!empty($_GET["id_matriz"])){
    
    $id_matriz=$_GET["id_matriz"];



    $sql=$conexion->query("DELETE FROM matriz_pqr WHERE id_matriz=$id_matriz");
 
    if($sql==1){
        header("location:../../editor.php");
    }else{
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        Error al Eliminar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
        }
        }
    }else{
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        Error en la contraseña
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
        }
}

?>