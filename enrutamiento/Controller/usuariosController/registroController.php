<?php
        if(!empty($_POST["btnRegistroUsuarios"])){
            $clave=$_POST["clave"];
            if($clave === "TG*2021e"){
        if(!empty($_POST["usuario"])){
    
        
            $usuario = $_POST["usuario"];
    
        $sql = $conexion->query("INSERT INTO usuario_e(user_login) VALUES('$usuario')");

        }if($sql==1){
            header("location:../../editor.php");        
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