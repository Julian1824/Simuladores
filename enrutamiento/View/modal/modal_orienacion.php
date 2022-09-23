<div class="modal fade" id="modal_orientacion_factura" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Orientación a la factura</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <ul class="nav justify-content-center" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="transacciones active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Transacciones</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="transacciones" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Preguntas frecuentes</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="transacciones" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Preguntas filtro</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
  <style>
         .list {
            float: left;
            position: relative;
            margin-right: 5px;
    }.titulos {
            background-color: #198754;
            color: #FFF;
            border: 2px solid;
            border-radius: 8px;
            padding: 5px;
        }
    </style>

                        <div class="" style="padding: 1em;">
                        <h1 class="titulos text-center" >Transacciones</h1>
                            <div>
                            <?php 

                            $sql = $conexion->query("SELECT DISTINCT(transaccion) from matriz_epm WHERE programa_transferir = 'orientacion factura'");

                        while($datos = $sql->fetch_object()){?> 
                        
                                    <ul class="list">
                                        <li class="filas_one"><?= $datos->transaccion ?></li>
                                    </ul>
                            <?php
                                } 
                            ?>
                            </div>
                        </div>

  </div>
  <div class="tab-pane fade pt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="">
  <h1 class="titulos text-center" >Preguntas frecuentes</h1>
                        <?php 

                        $sql = $conexion->query("SELECT DISTINCT(pregunta_frecuente) from matriz_pqr WHERE programa_transferir = 'orientacion factura'");

                        while($datos = $sql->fetch_object()){?> 

                      <ul class="">                  
                        <li><?= str_replace(".", ".<br>•", $datos->pregunta_frecuente);?></li>     
                    </ul>
<?php
    } 
?>
                        </div>
  </div>
  <div class="tab-pane fade pt-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="tgl-panel" style="padding: 1em;">
 



    <style type="text/css">
        table.tableizer-table {
            font-size: 16px;
            border: 1px solid #CCC;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tableizer-table td {
            padding: 4px;
            margin: 3px;
            border: 1px solid #CCC;
        }

        .tableizer-table th {
            background-color: #198754;
            color: #FFF;
            font-weight: bold;
        }
    </style>
    <h1 class="titulos text-center" >Preguntas filtro</h1>
    <table class="tableizer-table">                                
        <thead>
            <tr class="tableizer-firstrow">
                <th>Inquietud</th>
                <th>Pregunta filtro</th>
                <th>Respuesta a la pregunta filtro</th>
            </tr>
        </thead>
        <tbody>
     <?php
        $sql = $conexion->query("SELECT * from matriz_respuestas WHERE programa_transferir = 'orientacion factura'");

        while($datos = $sql->fetch_object()){?>
            <tr>

            <td><?= $datos->Inquietud?></td>
            <td><?= $datos->pregunta_filtro?></td>
            <td><?= str_replace(".", ".<br>", $datos->respue_filtro);?></td>
        </tr>
<?php
} 
?>
            </tbody>
        </table>
</div>
  </div>
</div>

                </div>



                <div class="modal-footer">
                    <span style="width: 90%;">
                        <img src="./public/assets/logo_medio-epm.png" style="width:300px;">
                    </span>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>