
    <div class="modal fade bd-example-modal-lg" id="modal_oficinas" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Directorio EPM</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                <a href="View/oficinas/registrarOficina.php"><button type="button" class="btn btn-success">Registrar</button></a>
                    <center>
                        <div class="epm" id="Cambio" style=""><br />
                            <input class="form-control" id="my-search" placeholder="¿Qué estás buscando en esta tabla?"
                                style="width:30%;" type="search" />
                                
                            <p>&nbsp;</p>
                                <script>
                                    function eliminar(){
                                     const respuesta = confirm("¿Estas Seguro que quieres eliminar?")
                                     return respuesta;
                                    
                                     }
                                </script>
                            <center>
                        
                                <table class="table table-bordered table-striped" id="example-table">
                                    <thead>
                                        <tr class="tableizer-firstrow">
                                            <th>Oficina</th>
                                            <th>Región</th>
                                            <th>Dirección</th>
                                            <th>Horarios de Atención</th>
                                            <th>Municipio</th>
                                            <th>Puntos de referencia</th>
                                            <th>¿Hay punto de entrega para tarjeta Somos en esta oficina?</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody style="width:100%;">
                                    <?php
                                        $sql = $conexion->query("SELECT * from matriz_oficina");

                                         while($datos = $sql->fetch_object()){?>
                                    <tr>

                                        <td style="width:20%;"><?= $datos->oficina?></td>
                                        <td style="width:10%;"><?= $datos->region?></td>
                                        <td style="width:10%;"><?= $datos->direccion?></td>
                                        <td style="width:10%;"><?= $datos->horario?></td>
                                        <td style="width:10%;"><?= $datos->Municipio?></td>
                                        <td style="width:10%;"><?= $datos->puntos_referencia?></td>
                                        <td style="width:20%;"><?= $datos->entrega_somos?></td>  
                                        <td style="width:10%;">
                                        <a href="View/oficinas/editarOficina.php?id_oficina=<?= $datos->id_oficina ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-user-pen" style="color:#FFFFFF; "></i></a>
                                         <a href="View/oficinas/eliminarOficina.php?id_oficina=<?= $datos->id_oficina ?>" class="btn btn-small  btn-danger"><i class="fa-solid fa-user-slash"></i></a>
                                        </td>                                 
                                    </tr>
                                        <?php
                                                } 
                                            ?>
                                </tbody>
                            </table>
                            </center>
                        </div>
                    </center>
                    <script>
                        jQuery(function () {
                            jQuery('#my-search').on('keyup', function () {
                                var value = jQuery(this).val().toLowerCase();
                                jQuery('#example-table > tbody > tr').filter(function () {
                                    jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                    </script>
                    <style type="text/css">
                        .epm thead {
                            background-image: linear-gradient(to bottom, #b8cc00, #00853e);
                            color: white;
                            text-align: center;
                        }

                        .epm table {
                            border: 1px solid #00853e;
                        }
                    </style>

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