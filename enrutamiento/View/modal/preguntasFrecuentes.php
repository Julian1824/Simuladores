<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <div class="container">
            <br>
            <div class="d-flex justify-content-center row">
                <input type='search' class='form-control ' onkeyup="myFunction2(this)" name="keyword" id='my-search3'
                    placeholder='¿Qué estás buscando?' style='width:30%;'>

                <div class="col-12 d-flex justify-content-center pt-2   ">
                    <button class="btn btn-warning col-12" onclick="refreshPage()" style='width:30%;'>Limpiar la
                        busquedad</button>
                </div>
            </div>

            <table class="table table-bordered table-striped border border-4" border=0 cellpadding=0 cellspacing=0
                width=827 style='border-collapse:
                                                          collapse;table-layout:fixed;width:620pt'>
                <col class=xl65 width=644 style='mso-width-source:userset;mso-width-alt:23552;
                                                          width:483pt'>
                <col width=183 style='mso-width-source:userset;mso-width-alt:6692;width:137pt'>
                <thead class="text-white">

                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl72 width=644 style='height:15.0pt;width:483pt;background-color: #198754'>
                            Pregunta
                            frecuente
                        </td>
                        <td class=xl72 width=183 style='border-left:none;width:137pt;background-color: #198754'>Programa
                            a
                            transferir
                            <span style='mso-spacerun:yes'> </span>
                        </td>
                    </tr>
                </thead>
                <tbody id="example-table2">
                    <?php 
                              
                              $sql = $conexion->query("SELECT * FROM matriz_pqr");
                      
                              while($datos = $sql->fetch_object()){?>
                    <tr>


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

    function myFunction2(evt) {
        // Declare variables
        let input, filter, table, tr, td, i, txtValue;
        let displayTr = [];
        filter = evt.value;
        table = document.getElementById("example-table2");
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