<?php


$id_matriz = $_POST["id_matriz"];
$transaccion = $_POST["transaccion"];
$pregunta_filtro = $_POST["pregunta_filtro"];
$respuestas_preguntas = $_POST["respuestas_preguntas"];
$pregunta_frecuente = $_POST["pregunta_frecuente"];
$programa_transferir = $_POST["programa_transferir"];
$clave=$_POST['clave'];

if($clave=="TG*2021e")
{
$query="UPDATE `matriz_epm` SET `transaccion`='$transaccion',
 `pregunta_filtro`='$pregunta_filtro', 
 `respuestas_preguntas`='$respuestas_preguntas',
  `programa_transferir`='$programa_transferir',
    where id_matriz='$id_matriz';";

$resultadoc=$conexion->query($query);

//echo $query;
header("Location:editor.php");  
}
else
{
header("Location:editor.php");    
 
}