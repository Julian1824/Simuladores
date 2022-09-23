<?php

if(!empty($_POST["btnEliminar"])){
    $clave=$_POST["clave"];
    if($clave === "TG*2021e"){
        if(!empty($_GET["id_oficina"])){
    
    $id_oficina=$_GET["id_oficina"];



    $sql=$conexion->query("DELETE FROM matriz_oficina WHERE id_oficina=$id_oficina");
 
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