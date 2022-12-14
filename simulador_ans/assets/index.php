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
        <!-- id="example-table"  -->

        <section class= "container" "header-border" >
            <header class="header">
                <div class="" style="text-align:center;border-bottom: 1px solid #1e2768;">
                    <image src="logotigo.png" style=" width:25%;" class="img-fluid"></image>
                </div>
            </header>
            <form>
                <div class="p-2 text-white bg-dark rounded-3" style="margin-top: 0px; border: 1px solid #00008C;background-color:#00008C!important;color:white!important;  font-family: 'Montserrat', sans-serif;">
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
                                    <FONT COLOR="FFFFFF">Dia corte</TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Mes</TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">a??o</TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">Fecha de ciclo</TH>
                                <TH class="text-center" BGCOLOR="#3352BC">
                                    <FONT COLOR="FFFFFF">ANS de 3 d??as H??biles</TH>
                            </TR>
                        </thead>

                        <TBODY>
                            <TR>
                                <TD class="text-center"><input onkeyup="crear_fecha(this.value)" type "num" name="dia" id="dia" class="form-control"></TD>
                                <TD>
                                    <select class="form-control" onchange="crear_fecha(this.value)" name="mes" id="mes">

                            <option value="Enero">Enero</option>

                            <option value="Febrero">Febrero</option>

                            <option value="Marzo">Marzo</option>

                            <option value="Abril">Abril</option>

                            <option value="Mayo">Mayo</option>

                            <option value="Junio">Junio</option>

                            <option value="Julio">Julio</option>

                            <option value="Agosto">Agosto</option>

                            <option value="Septiembre">Septiembre</option>

                            <option value="Octubre">Octubre</option>

                            <option value="Noviembre">Noviembre</option>

                            <option value="Diciembre">Diciembre</option>

                        </select>
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
                                    <FONT COLOR="FFFFFF">D??a de la llamada</TD>
                                <TD class="text-center" COLSPAN=3>17 de Febrero de 2022</TD>
                            </TR>
                        </TBODY>

                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <thead>
                            <TR>
                                <TH class="text-center" colspan="2" style="color: #FFFFFF; background: #000000"  id="descuento">Descuento</TH>
                            </TR>
                        </thead>

                        <TBODY>
                            <TR>
                                <TD class="text-center">El descuento comienza para la factura del ciclo de</TD>
                                <TD class="text-center">Febrero-Marzo</TD>
                            </TR>
                        </TBODY>

                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <thead>
                            <TR>
                                <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #000000">Cambio a prepago</TH>
                            </TR>
                        </thead>

                        <TBODY>
                            <TR>
                                <TD class="text-center">Aplica la cancelaci??n </TD>
                                <TD class="text-center"id="ciclo">en este ciclo</TD>
                                <TD class="text-center" id="factura1"></TD>
                            </TR>
                        </TBODY>

                        <TBODY>
                            <TR>
                                <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB" id="cambio1">
                                    
                                </TH>
                            </TR>
                            <TBODY>

                                <TBODY>
                                    <TR>
                                        <TD colspan="3" id="text1"></TD>
                                    </TR>
                                </TBODY>

                                <TBODY>
                                    <TR>
                                        <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB" id="cambio2"></TH>
                                    </TR>
                                </TBODY>

                                <TBODY>
                                    <TR>
                                        <TD colspan="3" id="text2"></TD>
                                    </TR>
                                </TBODY>


                    </TABLE>

                    <TABLE class="table align-middle" BORDER WIDTH="50%">
                        <CAPTION ALIGN=top></CAPTION>
                        <THEAD>
                            <TR>
                                <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #000000">Cancelaci??n total</TH>
                            </TR>
                        </THEAD>

                        <TBODY>
                            <TR>
                                <TD class="text-center">La cancelaci??n se programa para el </TD>
                                <TD class="text-center">25 de noviembre de 2022</TD>
                                <TD class="text-center" ROWSPAN=2 id="factura2"></TD>
                            </TR>
                            </TBODY>
                            <TBODY>
                            <TR>
                                <TD class="text-center">Aplica la cancelaci??n </TD>
                                <TD class="text-center">en este ciclo</TD>
                            </TR>
                            </TBODY>
                            <TR>
                                <TD class="text-center" colspan="3">Si es cancelaci??n programarlo en el apolo de cancelaci??n y suspensi??n </TD>
                            </TR>
                            <TBODY>
                                <TR>
                                    <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB" id="cambio3"></TH>
                                </TR>
                            </TBODY>
                            <br>

                            <TBODY>
                                <TR>
                                    <TD colspan="3" id="text3"></TD>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB"  id="cambio4"></TH>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TD colspan="3" id="text4"></TD>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB" id="cambio5"></TH>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TD colspan="3" id="text5"></TD>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TH class="text-center" colspan="3" style="color: #FFFFFF; background: #ABABAB"  id="cambio6"></TH>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TD colspan=3 id="text6"></TD>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TH class="text-center" colspan=3 style="color: #FFFFFF; background: #ABABAB"  id="cambio7"></TH>
                                </TR>
                            </TBODY>

                            <TBODY>
                                <TR>
                                    <TD colspan="3" id="text7"></TD>
                                </TR>
                            </TBODY>

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
<style>
    .table>thead>tr>th {
        vertical-align: bottom;
        border-bottom: 4px solid #5191cc;
        background-color: #28428d;
        color: white;
        padding: 15px;
        text-align: center;
    }

    .btn-primary {
        color: #fff;
        background-color: #14326b;
        border-color: #14326b;
        margin-left: 15px;
    }
</style>
<script> 
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



    var mes_select = document.getElementById('mes');
    var titulos = [
        {
            mes: 'Enero', 
            titulo: 'Gui??n cambio a prepago que no cumple con los 3 D??as', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, le confirmo que su solicitud quedar?? registrada, pero usted ver?? el cambio para el d??a 27 Febrero 2021 que es su siguiente ciclo, sus recursos los podr?? disfrutar hasta la fecha indicada, adicional a eso deber?? pagar la factura correspondiente a ese nuevo ciclo de facturaci??n.',
            titulo2: 'Si el cliente objeta indicarle',
            descripcion2:'le informo que el cambio a prepago e debe solicitar tres dias h??biles antes de su corte, de lo contrario queda radicada para el siguiente periodo de facturaci??n. Lo anterior seg??n Art??culo 2.1.8.3 de la Regulaci??n 5111 del 2017.',
            titulo3: 'Gui??n cambio a prepago que no cumple con los 3 D??as ',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, le confirmo que su solicitud quedar?? registrada, pero usted ver?? el cambio para el d??a que es su siguiente ciclo, sus recursos los podr?? disfrutar hasta la fecha indicada, adicional a eso deber?? pagar la factura correspondiente a ese nuevo ciclo de facturaci??n.',
            titulo4: 'Si el cliente objeta indicarle',
            descripcion4:'le informo que el cambio a prepago e debe solicitar tres dias h??biles antes de su corte, de lo contrario queda radicada para el siguiente periodo de facturaci??n. Lo anterior seg??n Art??culo 2.1.8.3 de la Regulaci??n 5111 del 2017.',
            titulo5: 'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6: 'Condiciones de cancelaci??n',
            descripcion6:'En atenci??n a su solicitud como titular de la linea por medio de la cual solicita la cancelaci??n de la misma asi como de los servicios que se encuentran instalados en ella, le informo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes terminos: acepta la desconexi??n Total de la l??nea 300xxxxxxx y no hacer uso de la Portabilidad Num??rica, con el fin de conservar el n??mero tiende y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos,por lo mismo, debe consumirlos antes de que se ejecute la desconexi??n',
            titulo7: 'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 Enero 2022 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada',
            factura: 'Se le genera una factura de m??s', 
            factura2: 'Se le genera una factura de m??s',
            ciclo: 'al otro ciclo',
         },
        {   
            mes: 'Febrero', 
            titulo: 'Gui??n cambio a prepago que no cumple con los 3 D??as', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, le confirmo que su solicitud quedar?? registrada, pero usted ver?? el cambio para el d??a 27 Marzo 2021 que es su siguiente ciclo, sus recursos los podr?? disfrutar hasta la fecha indicada, adicional a eso deber?? pagar la factura correspondiente a ese nuevo ciclo de facturaci??n.',
            titulo2:'Si el cliente objeta indicarle',
            descripcion2:'le informo que el cambio a prepago e debe solicitar tres dias h??biles antes de su corte, de lo contrario queda radicada para el siguiente periodo de facturaci??n. Lo anterior seg??n Art??culo 2.1.8.3 de la Regulaci??n 5111 del 2017.',
            titulo3:'Gui??n cambio a prepago que no cumple con los 3 D??as',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, le confirmo que su solicitud quedar?? registrada, pero usted ver?? el cambio para el d??a que es su siguiente ciclo, sus recursos los podr?? disfrutar hasta la fecha indicada, adicional a eso deber?? pagar la factura correspondiente a ese nuevo ciclo de facturaci??n.',
            titulo4:'Si el cliente objeta indicarle',
            descripcion4:'le informo que el cambio a prepago e debe solicitar tres dias h??biles antes de su corte, de lo contrario queda radicada para el siguiente periodo de facturaci??n. Lo anterior seg??n Art??culo 2.1.8.3 de la Regulaci??n 5111 del 2017.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'En atenci??n a su solicitud como titular de la linea por medio de la cual solicita la cancelaci??n de la misma asi como de los servicios que se encuentran instalados en ella, le informo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes terminos: acepta la desconexi??n Total de la l??nea 300xxxxxxx y no hacer uso de la Portabilidad Num??rica, con el fin de conservar el n??mero tiende y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos,por lo mismo, debe consumirlos antes de que se ejecute la desconexi??n',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 Febrero 2022 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada',
            factura: 'Se le genera una factura de m??s',
            factura2: 'Se le genera una factura de m??s',
            ciclo: 'al otro ciclo',
        },
        {
            mes: 'Marzo', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 Marzo 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, le confirmo que su solicitud quedar?? registrada, pero usted ver?? el cambio para el d??a 27 Marzo 2022 que es su siguiente ciclo, sus recursos los podr?? disfrutar hasta la fecha indicada, adicional a eso deber?? pagar la factura correspondiente a ese nuevo ciclo de facturaci??n.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 mayo 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Abril', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 abril 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 abril 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 mayo 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',   
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura', 
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Mayo', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 mayo 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 mayo 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 junio 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Junio', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 junio 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 junio 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 julio 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Julio', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 julio 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 julio 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 agosto 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Agosto', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'SSe??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 agosto 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 agosto 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 septiembre 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Septiembre', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 septiembre 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 septiembre 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 octubre 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Octubre', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 octubre 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 octubre 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 noviembre 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Noviembre', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 noviembre 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 noviembre 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'Cancelaci??n programada para el 27 diciembre 2021 Entiende y acepta que de existir saldos pendientes de pago deber??n ser cancelados por usted as?? la l??nea sea cancelada.',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },
        {
            mes: 'Diciembre', 
            titulo: 'Gui??n cambio a prepago con Factura generada', 
            descripcion: 'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 diciembre 2022  fecha en la que quedar?? efectuada su solicitud cambio a prepago. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico.',
            titulo2:'Gui??n cambio a prepago sin Factura generada',
            descripcion2:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el 27 diciembre 2022 fecha en la que quedar?? efectuada su solicitud  cambio a prepago En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo3:'Gui??n Cancelaci??n Total con Factura generada',
            descripcion3:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el   fecha en la que quedar?? efectuada su solicitud cancelaci??n total. En este momento le recordamos que tiene una facturaci??n pendiente con fecha de l??mite de pago el d??a XXXX al cancelarla no tendr?? m??s facturaciones por cargo b??sico	.',
            titulo4:'Gui??n Cancelaci??n total  sin Factura generada',
            descripcion4:'Se??or@ para nosotros es muy importante que la informaci??n quede siempre clara, sus recursos los podr?? disfrutar hasta el  fecha en la que quedar?? efectuada su solicitud  cancelaci??n total En este momento se encuentra totalmente al d??a con nosotros por tal motivo no debe pagar ninguna factura adicional.',
            titulo5:'Cambio a prepago',
            descripcion5:'Queremos que siga siendo Tigo y usando la mejor red m??vil de Colombia en velocidad, experiencia en video y voz, por eso lo invitamos a seguir usando su l??nea en prepago Tigo.  Por ser cliente Tigo, al pasar su l??nea a prepago, podra comprar paquetes con voz ilimitada nacional, datos y Redes Sociales. Adem??s, con Tigo sus recargas no se vencen.  Y para que tenga el control de su l??nea, ingresando a mi.tigo.com.co sin consumir sus datos, podr?? consultar saldo y consumos, recargar y comprar paquetes.',
            titulo6:'Condiciones de cancelaci??n',
            descripcion6:'"En atenci??n a su solicitud como titular de la l??nea  por medio de la cual solicita la cancelaci??n de la misma as?? como de los servicios que se encuentran instalados en ella,  le inf ormo que se programar?? la desconexi??n de la l??nea con la aceptaci??n de los siguientes t??rminos: Acepta la desconexi??n Total de la l??nea  300xxxxxxx y no hacer uso de la Portabilidad Num??rica,  con el fin de conservar el n??mero Entiende  y acepta que la desconexi??n eliminar?? el saldo de la l??nea en dinero y minutos, por lo mismo,  debe consumirlos antes de que se ejecute la desconexi??n.',
            titulo7:'Detalles de la cancelaci??n',
            descripcion7:'#N/A',
            factura: 'No se le genera m??s factura', 
            factura2: 'No se le genera m??s factura',
            ciclo: 'en este ciclo',
        },        
    ];
    mes_select.addEventListener('change', function (event) {
        var cambio_mes = event.target.value;
        var ele = titulos.find((obj) => obj.mes === cambio_mes);
        if (ele) {
            document.getElementById('cambio1').innerText = ele.titulo;
            document.getElementById('cambio2').innerText = ele.titulo2;
            document.getElementById('cambio3').innerText = ele.titulo3;
            document.getElementById('cambio4').innerText = ele.titulo4;
            document.getElementById('cambio5').innerText = ele.titulo5;
            document.getElementById('cambio6').innerText = ele.titulo6;
            document.getElementById('cambio7').innerText = ele.titulo7;
            document.getElementById('text1').innerText = ele.descripcion;
            document.getElementById('text2').innerText = ele.descripcion2;
            document.getElementById('text3').innerText = ele.descripcion3;
            document.getElementById('text4').innerText = ele.descripcion4;
            document.getElementById('text5').innerText = ele.descripcion5;
            document.getElementById('text6').innerText = ele.descripcion6;
            document.getElementById('text7').innerText = ele.descripcion7;
            document.getElementById('factura1').innerText = ele.factura;
            document.getElementById('factura2').innerText = ele.factura2;
            document.getElementById('ciclo').innerText = ele.ciclo;
            

        }

        year = <?php echo date("Y") ?>;
        mes = "05"; 
        dia = document.getElementById("dia").value;    
    var d= new Date(year + "-" + mes + "-" + dia); 
    d= new Date("Sat May 14, 2022 00:00:00");
    var dial = d.getDay;  alert(dial);       
        if ((d.getDay==5) || (d.getDay==6)) alert("Hoy es feriado");
        else alert("Hoy es dia habil");
        alert(d);

    var fiestas=new Array(new Array(25,4),new Array(25,11),new Array(12,11));
        for (var i=0;i<fiestas.length; i++) {
        if ((d.getMonth()==fiestas[1]) && (d.getDate()==fiestas[0])) alert('Hoy es fiesta!');

        
    }
    });
    
    document.getElementById('cambio1').innerText = titulos[0].titulo;
    document.getElementById('cambio2').innerText = titulos[0].titulo2;
    document.getElementById('cambio3').innerText = titulos[0].titulo3;
    document.getElementById('cambio4').innerText = titulos[0].titulo4;
    document.getElementById('cambio5').innerText = titulos[0].titulo5;
    document.getElementById('cambio6').innerText = titulos[0].titulo6;
    document.getElementById('cambio7').innerText = titulos[0].titulo7;
    document.getElementById('text1').innerText = titulos[0].descripcion;
    document.getElementById('text2').innerText = titulos[0].descripcion2;
    document.getElementById('text3').innerText = titulos[0].descripcion3;
    document.getElementById('text4').innerText = titulos[0].descripcion4;
    document.getElementById('text5').innerText = titulos[0].descripcion5;
    document.getElementById('text6').innerText = titulos[0].descripcion6;
    document.getElementById('text7').innerText = titulos[0].descripcion7;
    document.getElementById('factura1').innerText = titulos[0].factura;
    document.getElementById('factura2').innerText = titulos[0].factura;
    document.getElementById('ciclo').innerText = titulos[0].ciclo;



    function crear_fecha() {
        
        var dia = document.getElementById("dia").value;
        mes = document.getElementById("mes").value;
        year = <?php echo date("Y") ?>;
        document.getElementById("ans_de_3_dias_habiles").innerHTML = parseInt(dia) -3  + " " + mes + " " + year;
    }


function createTagAndAppendTo(tag, txt, elem){
  let customTag = document.createElement(tag);
  customTag.textContent = txt;
  elem.append(customTag);
}

function myFunction(evt) {
  // Declare variables
  let input, filter, table, tr, td, i, txtValue;
  let displayTr = [];
  filter = evt.value;
  table = document.getElementById("myTable");
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
            createTagAndAppendTo('span', strArray[i], td[j]);
            createTagAndAppendTo('mark', filter, td[j]);
          }
          createTagAndAppendTo('span', strArray[loopLength], td[j]);
          
        } else {
          let tdStr = td[j].textContent;
          td[j].innerText = '';
          td[j].textContent = tdStr;
          
        }
      }
    
    if(displayTr[i] !== 0) {
      tr[i].style.display = '';
    } else {
       tr[i].style.display = 'none';
    }
  }
}
</script>