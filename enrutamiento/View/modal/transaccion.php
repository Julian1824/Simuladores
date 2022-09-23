<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="d-flex justify-content-center row">
            <input type='search' class='form-control ' onkeyup="myFunction1(this)" name="keyword" id='my-search3'
                placeholder='¿Qué estás buscando?' style='width:30%;'>

            <div class="col-12 d-flex justify-content-center pt-2   ">
                <button class="btn btn-warning col-12" onclick="refreshPage()" style='width:30%;'>Limpiar la
                    busquedad</button>
            </div>
        </div>
        <center>
            <br>
            <style type="text/css">
            mark,
            .mark {
                padding: .2em;
                background-color: #e8d156 !important;
            }

            table.table table-bordered table-striped {
                font-size: 12px;
                border: 1px solid #CCC;
                font-family: Arial, Helvetica, sans-serif;
            }

            .table table-bordered table-striped td {
                padding: 4px;
                margin: 3px;
                border: 1px solid #CCC;
            }

            .table table-bordered table-striped th {
                background-color: #198754;
                color: #FFF;
                font-weight: bold;
            }
            </style>
            <script>
            function refreshPage() {
                window.location.reload();
            }
            </script>
            <table class="table table-bordered table-striped border border-4" border=0 cellpadding=0 cellspacing=0
                width=971 style='border-collapse:
                                collapse;table-layout:fixed;width:728pt'>
                <col width=152 style='mso-width-source:userset;mso-width-alt:5558;width:114pt'>
                <col width=215 style='width:161pt'>
                <col width=215 style='width:161pt'>
                <col width=260 style='mso-width-source:userset;mso-width-alt:9508;width:195pt'>
                <col width=129 style='mso-width-source:userset;mso-width-alt:4717;width:97pt'>
                <thead>
                    <tr height=40 style='height:30.0pt'>
                        <td height=40 class=xl75 width=152
                            style='height:30.0pt;width:114pt;background-color: #198754;color:#fff;'>
                            Transacción (motivo de la llamada)</td>
                        <td class=xl75 width=215
                            style='border-left:none;width:161pt;background-color: #198754;color:#fff;'>
                            Pregunta filtro
                        </td>
                        <td class=xl75 width=215
                            style='border-left:none;width:161pt;background-color: #198754;color:#fff;'>
                            Respuesta a la pregunta filtro</td>
                        <td class=xl75 width=260
                            style='border-left:none;width:195pt;background-color: #198754;color:#fff;'>
                            Pregunta frecuente
                        </td>
                        <td class=xl75 width=129
                            style='border-left:none;width:97pt;background-color: #198754;color:#fff;'>
                            Programa a transferir
                            <span style='mso-spacerun:yes'> </span>
                        </td>
                    </tr>
                </thead>


                <tbody id='example-table1'>
                    <?php 
                    
                    $sql = $conexion->query("SELECT * FROM matriz_epm");

                    while($datos = $sql->fetch_object()){?>
                    <tr>
                        <td><?= $datos->transaccion?></td>
                        <td><?= $datos->pregunta_filtro?></td>
                        <td><?= str_replace(".", ".<br>", $datos->respuestas_preguntas);?></td>
                        <td><?= str_replace(".", ".<br>", $datos->pregunta_frecuente);?></td>
                        <?php
                        if($datos->programa_transferir === 'orientacion factura'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_orientacion_factura">Orientación a la factura</button></td>';
                        }elseif($datos->programa_transferir === 'epm puerta'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_EPM_a_tu_puerta">EPM a tu Puerta</button></td>';
                        }elseif($datos->programa_transferir === 'daños acueducto'){
                            echo '<td> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_daños_acueducto">Daños acueducto</button></td>';
                        }elseif($datos->programa_transferir === 'quejas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_quejas">Quejas</button></td>';
                        }elseif($datos->programa_transferir === 'somos'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_SOMOS">SOMOS</button></td>';
                        }elseif($datos->programa_transferir === 'revisiones periodicas'){
                            echo '<td> <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_revisiones_periodicas">Revisiones Periódicas</button></td>';
                        }elseif($datos->programa_transferir === 'daños energia'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_daños_energia">Daños energía</button></td>';
                        }elseif($datos->programa_transferir === 'solgas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_SOLGAS">SOLGAS</button></td>';
                        }elseif($datos->programa_transferir === 'daños gas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_daños_gas">Daños gas</button></td>';
                        }else{
                         echo '<td>Error al encontrar</td>';
                        }
                    ?>
                    </tr>
                    <?php
                    } 
                    ?>



                </tbody>
            </table>
    </div>
    </center>
    <script>
    function createTagAndAppendTo1(tag, txt, elem) {
        let customTag = document.createElement(tag);
        customTag.textContent = txt;
        elem.append(customTag);
    }

    function myFunction1(evt) {
        // Declare variables
        let input, filter, table, tr, td, i, txtValue;
        let displayTr = [];
        filter = evt.value;
        table = document.getElementById("example-table1");
        tr = table.getElementsByTagName("tr");
        let regExp = new RegExp(filter);
        if (!filter) {
            for (let i = 0; i < tr.length; i++) {
                tr[i].style.display = '';
            }
            return;
        }

        // Loop through all table rows, and hide those who don't match the search query
        for (let i = 0; i < tr.length; i++) {
            let trStyle = tr[i].style.display;
            td = tr[i].getElementsByTagName("td");
            for (let j = 0; j < td.length; j++) {

                txtValue = td[j].textContent.toLowerCase();
                txtValue2 = td[j].textContent;

                let count = (txtValue.match(regExp) || []).length;
                displayTr[i] = displayTr[i] ? displayTr[i] : count;
                if (count !== 0) {

                    td[j].innerText = '';
                    let strArray = txtValue.split(filter);
                    let loopLength = strArray.length - 1;

                    for (let i = 0; i < loopLength; i++) {
                        createTagAndAppendTo1('span', strArray[i], td[j]);
                        createTagAndAppendTo1('mark', filter, td[j]);
                    }
                    createTagAndAppendTo1('span', strArray[loopLength], td[j]);

                } else {
                    let tdStr = td[j].textContent;
                    td[j].innerText = '';
                    td[j].textContent = tdStr;

                }
            }

            if (displayTr[i] !== 0) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
    </script>
</body>

</html>