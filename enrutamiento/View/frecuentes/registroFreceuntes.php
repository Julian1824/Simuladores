<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../../public/css/estilos.css">
    <title>Editar</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
                <div class="col-7">
                <form method="POST" class="bg-light rounded">
                    
                    <h3 class="titulos text-center bg-success" >Editar</h3>
                        <?php
                            include "../../Model/conexion.php";
                            include ("../../Controller/frecuentesController/registroController.php");
                        ?>
                    <div class="p-1">
                         <label for="Pregunta frecuente" class="">Pregunta frecuente</label>
                         <textarea name="pregunta_frecuente"  cols="30" rows="3" class="form-control" value=""></textarea>
                        </div>
                                          
                   <div class="col s12 p-1">
                        <label for="" class="Programa a transferir">Programa a transferir</label>
                        <select name="programa_transferir" class="form-select" aria-label="Default select example">

                            <option disabled selected>Seleccione una Opcion</option>
                            <option value="daños acueducto">Daños Acueducto</option>
                            <option value="quejas">Quejas</option>
                            <option value="daños energia">Daños Energia</option>
                            <option value="daños gas">Daños Gas</option>
                            <option value="solgas">Solgas</option>
                            <option value="orientacion factura">Orientacion Factura</option>
                            <option value="somos">Somos</option>
                            <option value="revisiones periodicas">revisiones periodicas</option>
                            <option value="epm puerta">Epm Puerta</option>

                        </select>
                    </div>

                    <div class="d-flex justify-content-center">
                            
                            <div class="col-6">
                                <label >Contraseña</label>
                                 <input type="password" name="clave" class="form-control" id="" aria-describedby="Nombre Oficina">
                            </div>
                        
                            </div>                    
    
                    <div class="row p-1">
                    <div class="col s6">
                        <button type="submit" class="btn buttonConfirmar w-100" name="btnGuardarFreceuncia" value="oklisto">Guardar</button>
                    </div>
                    <div class="col s6"> 
                    <a href="../../editor.php"><button type="button" class="btn buttonCancelar w-100" name="btnEditarFreceuncia" value="oklisto">Cancelar</button></a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

                        
  </body>
</html>
