<?php
    if(!empty($_POST["btnEditarFrecuentes"])){
        $clave=$_POST["clave"];
        if($clave === "TG*2021e"){


        $id_matriz=$_POST["id_matriz"];
        $pregunta_frecuente = $_POST["pregunta_frecuente"];
        $programa_transferir = $_POST["programa_transferir"];
        
        $sql = $conexion->query("UPDATE matriz_pqr SET 
        pregunta_frecuente='$pregunta_frecuente',programa_transferir='$programa_transferir'
            WHERE id_matriz=$id_matriz");

if($sql==1){
    header("location:../../editor.php");        
}else{
echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
Clave incorrecta
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
}
        }
}
?>