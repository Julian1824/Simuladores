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
            function eliminar() {
                const respuesta = confirm("¿Estas Seguro que quieres eliminar?")
                return respuesta;

            }
            </script>
            <table id='' class="table table-bordered table-striped border border-4" border=0 cellpadding=0 cellspacing=0
                width=971 style='border-collapse:
                            collapse;table-layout:fixed;width:728pt'>

                <thead>
                    <tr height=40 style='height:30.0pt'>
                        <td height=40 class=xl75 width=86% style='background-color: #198754;color:#fff;'>
                            Usuarios</td>
                        <td class=xl75 width=14% style='background-color: #198754;color:#fff;'>
                            Acciones
                        </td>
                    </tr>
                </thead>


                <tbody id="table3">

                    <?php
        include "Model/conexion.php";
        $sql = $conexion->query("SELECT DISTINCT(user_login) FROM usuario_e");

        while ($datos = $sql->fetch_object()) { ?>
                    <tr>


                        <td><?= ucfirst($datos->user_login); ?></td>
                        <td style="">
                            <a href="View/usuarios/numero_ingresos.php?usuario=<?= $datos->user_login ?>"
                                class="btn btn-small btn-warning"><i class="fa-solid fa-eye"
                                    style="color:#FFFFFF; "></i></a>
                            <a href="View/usuarios/eliminarUsuarios.php?usuario=<?= $datos->user_login ?>"
                                class="btn btn-small btn-danger"><i class="fa-solid fa-user-slash"
                                    style="color:#FFFFFF; "></i></a>
                        </td>
                    </tr>
                    <?php
        }
        ?>



                </tbody>
            </table>

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
            table = document.getElementById("table3");
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