<div class="modal fade" id="modal_daños_acueducto" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Daños acueducto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <nav>
                        <div class="nav justify-content-center" id="nav-tab" role="tablist">
                            <button class="transacciones active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Transacciones</button>
                            <button class="transacciones" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Preguntas frecuentes</button>
                            <button class="transacciones" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Preguntas filtro</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="" style="padding: 1em;">
                        <h1 class="titulos text-center" >Transacciones</h1>
                            
                            <?php 

                            $sql = $conexion->query("SELECT DISTINCT(transaccion) from matriz_epm WHERE programa_transferir = 'daños acueducto'");

                        while($datos = $sql->fetch_object()){?> 
                        
                                    <ul class="list">
                                        <li class="filas_one"><?= $datos->transaccion ?></li>
                                    </ul>
                            <?php
                                } 
                            ?>
                            </div>
                    
                        </div>
                        <div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="">
  <h1 class="titulos text-center" >Preguntas frecuentes</h1>
                        <?php 

                        $sql = $conexion->query("SELECT DISTINCT(pregunta_frecuente) from matriz_pqr WHERE programa_transferir = 'daños acueducto'");

                        while($datos = $sql->fetch_object()){?> 

                      <ul class="">                  
                        <li><?= str_replace(".", ".<br>•", $datos->pregunta_frecuente);?></li>     
                    </ul>
<?php
    } 
?>
                        </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
        $sql = $conexion->query("SELECT * from matriz_respuestas WHERE programa_transferir = 'daños acueducto'");

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
                <div class="modal-footer">
                    <span style="width: 90%;">
                        <img src="./public/assets/logo_medio-epm.png" style="width:300px;">
                    </span>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>