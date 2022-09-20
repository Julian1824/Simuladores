<?php ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulador ANS | TIGO Emtelco</title>
    <link href="assets/dist/themes/Flaty/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="//biblioteca.emtelco.co/_plugins/jquery/1.11.1/jquery-1.11.1.min.js"></script>
    <script src="//biblioteca.emtelco.co/_plugins/inputmask/js/inputmask.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="//biblioteca.emtelco.co/_plugins/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//biblioteca.emtelco.co/_plugins/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>
    <center>
        <section class="container">
            <header class="header">
                <div class="" style="text-align:center;border-bottom: 1px solid #1e2768;">
                    <image src="logotigo.png" style=" width:25%;" class="img-fluid"></image>
                </div>
            </header>
            <form>
                <div class="p-2 text-white bg-dark rounded-3"
                    style="margin-top: 0px; border: 1px solid #00008C;background-color:#00008C!important;color:white!important;  font-family: 'Montserrat', sans-serif;">
                    <h2> Simulador ANS</h2>
                    <section class="header-border">
                </div>

                <br>
                <br>
                <div>
                    <TABLE class="table table-bordered table-striped text-center" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <thead>
                            <TR>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Dia corte
                                </TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Mes
                                </TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">año
                                </TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Fecha de ciclo
                                </TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">ANS de 3 días Hábiles
                                </TH>
                            </TR>
                        </thead>

                        <TBODY>
                            <TR>
                                <TD class="text-center">
                                    <select class="form-control" FONT COLOR="FFFFFF" name="dia" id="dia">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                    </select>
                                </TD>
                                <TD>
                                    <select class="form-control" name="mes" id="mes"></select>
                                </TD>
                                <TD class="text-center" id="year">
                                    <?php echo date("Y") ?>
                                </TD>
                                <TD class="text-center" id="fecha_ciclo"></TD>
                                <TD class="text-center">
                                    <FONT COLOR="ff0000" id="ans_de_3_dias_habiles">
                                </TD>
                            </TR>
                        </TBODY>

                        <TBODY>
                            <TR>
                                <TD class="text-center" COLSPAN=2 BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Día de la llamada
                                </TD>
                                <TD class="text-center" id="dia_llamada" COLSPAN=3></TD>
                            </TR>
                        </TBODY>

                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <thead>
                            <TR>
                                <TH class="text-center" colspan="2" style="color: #FFFFFF; background: #000000"
                                    id="descuento">Descuento</TH>
                            </TR>
                        </thead>

                        <TBODY>

                            <TR>
                                <TD class="text-center">El descuento comienza para la factura del ciclo de</TD>
                                <TD class="text-center" id="cambiomes"></TD>
                            </TR>
                        </TBODY>

                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <thead>
                            <TR>
                                <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #000000">Cambio a
                                    prepago</TH>
                            </TR>
                        </thead>

                        <TBODY>
                            <TR>
                                <TD class="text-center">Aplica la cancelación </TD>
                                <TD class="text-center" id="ciclo">en este ciclo</TD>
                                <TD class="text-center" id="factura1"></TD>
                            </TR>
                        </TBODY>

                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <THEAD>
                            <TR>
                                <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #000000">
                                    Cancelación
                                    total</TH>
                            </TR>
                        </THEAD>

                        <TBODY>
                            <TR>
                                <TD class="text-center">La cancelación se programa para el </TD>
                                <TD class="text-center" id="cancelacion"></TD>
                                <TD class="text-center" rowspan="2" id="factura2"></TD>
                            </TR>
                        </TBODY>
                        <TBODY>
                            <TR>
                                <TD class="text-center">Aplica la cancelación </TD>
                                <TD class="text-center" id="ciclo2"></TD>
                            </TR>
                        </TBODY>
                        <TR>
                            <TD class="text-center" colspan="3">Si es cancelación programarlo en el apolo de cancelación
                                y
                                suspensión </TD>
                        </TR>



                    </TABLE>

                    <br>
                    <br>
                    <br>

                </div>
            </form>

        </section>
    </center>
    <footer class="footer" style="background-color:#00008C!important">
        <div class="footer-copyright text-center py-3">Emtelco | TIGO</div>
    </footer>
</body>
<?php 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp); 

$contador=$contador+1; 

$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp); 
?>
<script type="text/javascript" src="assets/js/main.js"></script>