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

    
    <div class="container-fluid row">
        <div class="d-flex justify-content-center">
                <div class="col-7 content">
                <?php
                 include "../../Model/conexion.php";
                include ("../../Controller/oficinaController/registrarController.php"); ?>
                <form method="POST" class="bg-light rounded">
                    <h3 class="titulos text-center bg-success" >Registrar</h3>
                    
                    <div class="row">
                    <div class="col s6">
                        <label for="Nombre" class="">Nombre Oficina</label>
                         <input type="text" name="nombre_oficina" class="form-control" id=""   aria-describedby="Nombre Oficina">
                    </div>
                    <div class="col s6"> 
                        <label for="Nombre" class="">Region</label>
                         <input type="text" name="region" class="form-control" id=""  aria-describedby="Region">
                    </div>
                    </div>
                    <div class="">
                    <div class="col s6">
                    <label for="Nombre" class="">Dirección</label>
                         <input type="text" name="direccion" class="form-control" id=""  aria-describedby="Dirección">
                    </div>
                    <div class="col s6">
                        <label for="Municipio" class="">Municipio</label>
                         <input type="text" name="municipio" class="form-control" id=""  aria-describedby="Municipio">
                    </div>
                    </div>
                    <div class="col s12">
                        <label for="Tarjeta Somos" class="">Tarjeta Somos</label>
                         <input type="text" name="entrega_somos" class="form-control" id=""  aria-describedby="Tarjeta Somos">
                    </div>
                    <div class="p-1">
                        <label for="Puntos de referencia" class="">Puntos de referencia</label>
                         <textarea name="puntos_referencia" id="" cols="20" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="p-1">
                        <label for="Horario" class="">Horarios de Atención</label>
                         <textarea name="horario"  cols="20" rows="2" class="form-control" value=""></textarea>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-6">
                        <label >Contraseña</label>
                         <input type="password" name="clave" class="form-control" id="" aria-describedby="Nombre Oficina">
                    </div>
                </div>
                    <div class="p-1">
                    <div class="col s6">
                        <button type="submit" class="btn buttonConfirmar w-100" name="Guardar" value="oklisto">Guardar</button>
                    </div>
                    <div class="col s6"> 
                    <a href="../../editor.php"><button type="button" class="btn buttonCancelar w-100" name="btnEditar" value="oklisto">Cancelar</button></a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


                        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>
