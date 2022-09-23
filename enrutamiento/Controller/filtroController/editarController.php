<?php
    if(!empty($_POST["btnEditarRespuestas"])){
        $clave=$_POST["clave"];
        if($clave === "TG*2021e"){


        $id_matriz=$_POST["id_matriz"];
        $Inquietud = $_POST["Inquietud"];
        $pregunta_filtro = $_POST["pregunta_filtro"];
        $respue_filtro = $_POST["respue_filtro"];
        $programa_transferir = $_POST["programa_transferir"];
        
        $sql = $conexion->query("UPDATE matriz_respuestas SET 
        Inquietud='$Inquietud',pregunta_filtro='$pregunta_filtro',
        respue_filtro='$respue_filtro',programa_transferir='$programa_transferir'
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