<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
  <header>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height:150px ">
        <div class="carousel-item active" style="height:150px;">
            <img src="../../public/assets/banner_1.png" alt="">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="carousel-item" style="height:150px;">
            <img src="../../public/assets/banner_2.png">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="carousel-item" style="height:150px;">
            <img src="../../public/assets/banner_3.png" alt="">
            <div class="carousel-caption">

            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="visually-hidden">Next</span>
</button>
</div>
</header>

<div style="margin-top:15px">
             
  <center>

                                                  <table id='example-table1' class="table table-bordered table-striped border border-4"
                                                      border=0 cellpadding=0 cellspacing=0 width=827 style='border-collapse:
                                                          collapse;table-layout:fixed;width:620pt'>
                                                      <col class=xl65 width=644 style='mso-width-source:userset;mso-width-alt:23552;
                                                          width:483pt'>
                                                      <col width=183 style='mso-width-source:userset;mso-width-alt:6692;width:137pt'>
                                                      <thead class="text-white">
                      
                                                      <tr height=20 style='height:15.0pt'>
                                                              <td height=20 class=xl72 width=644
                                                                  style='height:15.0pt;width:483pt;background-color: #198754'>Nombre de Usuarios
                                                              </td>
                                                              <td class=xl72 width=183
                                                                  style='border-left:none;width:137pt;background-color: #198754'>Acciones
                                                              </td>
                                                          </tr>
                                                      </thead>
                        <tbody>
                          <?php 
                          $usuario=$_GET["usuario"];
                                                       
                                  include "../../Model/conexion.php";

                              $sql = $conexion->query("SELECT * FROM registro_ingresos where registro_de_ingreso='$usuario'");
                              $rowcount=mysqli_num_rows($sql);
                              echo "Total de ingresos: ".$rowcount;
                              if($rowcount == 0){
                              
                              echo '<td>No existen Registros</td>';
                              echo '<td></td>';
                              }else
                              {while($datos = $sql->fetch_object()){?>
                              <tr>
                      
                      
                              <td><?= str_replace(".", ".<br>", $datos->registro_de_ingreso);?></td>
                              <td><?= str_replace(".", ".<br>", $datos->fecha);?></td>

                      </tr>
                      <?php
                              }
                      } 
                      ?>
                      </tbody>
                      
                      </table>
                      <a href="../../editor.php"><button class="btn btn-danger">Volver</button></a>
                      
                      </center>
                      
                      <script>
                                         jQuery(function () {
                                              jQuery('#my-search1').on('keyup', function () {
                                                  var value = jQuery(this).val().toLowerCase();
                                                  jQuery('#example-table1 > tbody > tr').filter(function () {
                                                      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                                  });
                                              });
                                          });
                  </script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>