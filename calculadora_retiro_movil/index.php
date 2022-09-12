<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Retiro - TigoUne</title>
    <link href="assets/dist/themes/Flaty/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="//biblioteca.emtelco.co/_plugins/jquery/1.11.1/jquery-1.11.1.min.js"></script>
    <script src="//biblioteca.emtelco.co/_plugins/inputmask/js/inputmask.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="//biblioteca.emtelco.co/_plugins/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" />
    <script src="//biblioteca.emtelco.co/_plugins/jquery/3.3.1/jquery-3.3.1.min.js"></script>
    <script src="//biblioteca.emtelco.co/_plugins/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <section class="header-border">
        <header class="header">
            <div class="">
                <image src="assets/images/banner.png" style=" width:100%;" class="img-fluid"></image>
            </div>
        </header>

    </section>

<body>
    <form>

        <div class="row" style="width: 90%; margin: auto;margin-top:10px;margin-bottom: 40px;">


            <div class="col-md-2">
                <br>


            </div>

            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-4" style="margin-top:10px">
                        <label><span style="font-size:16px;color: #00469c;">Fecha de</span><br> <span
                                style="font-size:32px;color: #00469c;">Solicitud</span></label>
                        <input type="date" class="form-control number1" placeholder="" id="fechasolicitud"
                            name="fechasolicitud" style="font-size: 16px; font-weight: 500; text-align: left;"
                            onchange="calcular_todo()">
                    </div>
                    <div class="col-md-4" style="margin-top:10px">
                        <label><span style="font-size:16px;color: #00469c;">Ciclo de</span><br> <span
                                style="font-size:32px;color: #00469c;">Consumo</span></label>
                        <select class="form-control" id="ciclo" name="ciclo"
                            style="font-size: 16px; font-weight: 500; text-align: left;" onchange="calcular_todo()">
                            <option value="0">Sel.</option>
                            <optgroup label="Facturador">
                                <option value="90">90</option>
                                <!-- <option value="91">91</option>
                                <option value="92">92</option> -->
                            </optgroup>
                            <optgroup label="Facturador Edatel">
                                <option value="90">90</option>
                                <option value="7">8</option>
                                <option value="14">15</option>
                                <!-- <option value="91">91</option>
                                <option value="92">92</option> -->
                            </optgroup>
                            <optgroup label="Facturador movilidad">
                                <option value="30">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="4">5</option>
                                <option value="5">6</option>
                                <option value="6">7</option>
                                <option value="7">8</option>
                                <option value="8">9</option>
                                <option value="9">10</option>
                                <option value="10">11</option>
                                <option value="11">12</option>
                                <option value="12">13</option>
                                <option value="13">14</option>
                                <option value="14">15</option>
                                <option value="15">16</option>
                                <option value="16">17</option>
                                <option value="17">18</option>
                                <option value="18">19</option>
                                <option value="19">20</option>
                                <option value="20">21</option>
                                <option value="21">22</option>
                                <option value="22">23</option>
                                <option value="23">24</option>
                                <option value="24">25</option>
                                <option value="25">26</option>
                                <option value="26">27</option>
                                <option value="27">28</option>
                                <option value="28">29</option>
                                <option value="29">30</option>
                                <option value="30">31</option>
                            </optgroup>
                        </select>
                    </div>


                    <div class="col-md-4"
                        style="margin-top:10px;background-color: #7cb736;color:white; font-size:45px;text-align:center;    padding: 3%;">
                        <a href="" onclick="" style="text-decoration:none;color:white">Reset</a>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;
    padding: 1%;
    font-size: 32px;
    color: #00469c;
    border: 1px solid #8080807d;">
                        <label>Fecha de Retiro</label>

                    </div>
                    <div class="col-md-6" style="margin-top: 10px;
    padding: 1%;
    font-size: 42px;
    color: orange;
    border: 1px solid #8080807d; text-align:center" id="fechafinal">
                        <label></label>
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;
    padding: 1%;
    font-size: 32px;
    color: #00469c;
    border: 1px solid #8080807d;">
                        <label>Fecha de Factura</label>

                    </div>
                    <div class="col-md-6" style="margin-top: 10px;
    padding: 1%;
    font-size: 42px;
    color: orange;
    border: 1px solid #8080807d; text-align:center" id="fechafinalfactura">
                        <label></label>
                    </div>


                    <div class="col-md-12" style="margin-top: 10px;
    padding: 1%;
    font-size: 15px;
    color: red; text-align:center" id="mensaje">

                    </div>


                </div>


            </div>

            <div class="col-md-2">
                <br>


            </div>
        </div>

    </form>

    <div>
        <div>
            <footer class="footer">
                <div class="footer-copyright text-center py-3">Emtelco | Tigo</div>
            </footer>



</body>

<script>
const number1 = document.querySelector('.number1');
const number2 = document.querySelector('.number2');
const number4 = document.querySelector('.number4');
const number8 = document.querySelector('.number8');
const number12 = document.querySelector('.number12');


function formatNumber(n) {

    n = String(n).replace(/\D/g, "");
    return n === '' ? n : formato(n);


}

function formato(num) {
    num = String(num).replace(/\D/g, "");
    num = String(num).replace(",00", "");
    num = String(num).replace(".", "");
    num = String(num).replace(".", "");
    num = String(num).replace(".", "");
    num = String(num).replace(".", "");
    num = String(num).replace(".", "");
    if (!num || num == 'NaN') return '';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
    return (((sign) ? '' : '-') + num);
}


/*
number1.addEventListener('keyup', (e) => {
const element = e.target;
const value = element.value;
element.value = formatNumber(value);
});

number2.addEventListener('keyup', (e) => {
const element = e.target;
const value = element.value;
element.value = formatNumber(value);
});
number4.addEventListener('keyup', (e) => {
  const element = e.target;
  const value = element.value;
  element.value = formatNumber(value);
});
number8.addEventListener('keyup', (e) => {
  const element = e.target;
  const value = element.value;
  element.value = formatNumber(value);
});




number12.addEventListener('keyup', (e) => {
  const element = e.target;
  const value = element.value;
  element.value = formatNumber(value);
});


*/







function calcular_todo() {
    diastotales = 0;
    fecha = document.getElementById("fechasolicitud").value;
    ciclo = document.getElementById("ciclo").value;
    var today = new Date();
    var year = today.getFullYear();

    document.getElementById("fechafinal").innerHTML = "";
    document.getElementById("fechafinalfactura").innerHTML = "";

    document.getElementById("mensaje").innerHTML = "";

    const words = fecha.split('-');
    //alert("mes retiro1 " +words);
    mesfinal = words[1];
    diafinal = words[2];
    console.log(words[1]);
    console.log(words[2]);

    const validarmes540 = words[1] + words[2]
    console.log(validarmes540);

    var fiestas = new Array(new Array(1, 1), new Array(10, 1), new Array(21, 3), new Array(14, 4), new Array(15, 4),
        new Array(1, 5), new Array(30, 5), new Array(20, 6), new Array(27, 6), new Array(4, 7), new Array(20, 7),
        new Array(7, 8), new Array(15, 8), new Array(17, 10), new Array(7, 11), new Array(14, 11), new Array(8, 12),
        new Array(21, 12));




    if (ciclo == 90) {


        ///////nuevo metodo***********************************************************************
        diastotales = 0;
        diacorte = 30;

        ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
        console.log("Fecha inicio " + fechaInicio);
        //var fechaFin    = new Date('2017-12-28');
        //alert("Día Inicio " + fechaInicio);
        //alert("Día Final " + fechafindefinitiva);
        while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
            //alert("Día Final " + fechafindefinitiva);
            if (fechafindefinitiva.getDay() == 0 || fechafindefinitiva.getDay() == 6) {
                console.log("Sabado o domingo " + fechafindefinitiva.getDay());
            } else {
                diastotales = diastotales + 1;
                console.log(diastotales);
            }
            console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                fechafindefinitiva.getDate());
            fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
        }
        ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles

        ///Ciclo para evaluar si es feriado y descontar los días
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
        while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
            for (var i = 0; i < fiestas.length; i++) {
                fechabuscar = fiestas[i];
                fechacomparar = parseInt(fechafindefinitiva.getDate()) + "," + parseInt(fechafindefinitiva.getMonth() +
                    1);
                //alert(fechabuscar);
                //alert(fechacomparar);
                console.log("Fecha Comparar " + fechacomparar);
                if (fechabuscar == fechacomparar) {
                    diastotales = diastotales - 1;
                    console.log("Feriado");
                }
            }
            console.log(diastotales);
            console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                fechafindefinitiva.getDate());
            console.log("Fecha " + fechafindefinitiva);
            fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
        }
        ///Ciclo para evaluar si es feriado y descontar los días

        //Ciclo para validar si es fecha de corte es feriado
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        for (var i = 0; i < fiestas.length; i++) {
            fechabuscar = fiestas[i];
            fechacomparar = parseInt(diacorte) + "," + parseInt(mesfinal);
            //alert(fechabuscar);
            //alert(fechacomparar);
            console.log("Fecha Comparar Corte " + fechacomparar);
            if (fechabuscar == fechacomparar) {
                //diastotales=diastotales-1;
                console.log("Feriado");
            }
        }
        console.log(diastotales);
        console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
            fechafindefinitiva.getDate());
        console.log("Fecha de corte " + fechafindefinitiva);


        ////

        ////nuevo metodo***********************************************************************

        if (diastotales >= 3) {
            //fecha real de retiro un mes despues
            //mesretiro=parseInt(mesfinal)+1;
            mesretiro = parseInt(mesfinal);
            //alert(mesretiro);
            if (mesretiro == 12) {
                mesretiroreal = 1;
                mesfactura = parseInt(mesretiroreal);
                //  alert(mesretiroreal);
                year = parseInt(year);
                yearf = parseInt(year) + 1;
            } else {
                //mesretiroreal=mesretiro+1; 
                mesretiroreal = mesretiro;
                mesfactura = parseInt(mesretiroreal) + 1;
                yearf = parseInt(year);
            }

            document.getElementById("fechafinal").innerHTML = "30-" + mesretiro + "-" + year;
            document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + yearf;
        } else {
            mesretiro = parseInt(mesfinal) + 1;

            if (mesretiro == 12) {
                mesretiroreal = 1;
                mesfactura = parseInt(mesretiroreal);
                //  alert(mesretiroreal);
                year = parseInt(year);
                yearf = parseInt(year) + 1;
            } else {
                //mesretiroreal=mesretiro+1; 
                mesretiroreal = mesretiro;
                mesfactura = parseInt(mesretiroreal) + 1;
                yearf = parseInt(year);
            }



            document.getElementById("fechafinal").innerHTML = "30-" + mesretiro + "-" + year;
            document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + yearf;


            document.getElementById("mensaje").innerHTML =
                "Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo 90	*Consumo del 1 al 30*";
        }
        //Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.		
    }

    if (ciclo == 91 || ciclo == 92) {


        ///////nuevo metodo***********************************************************************
        diastotales = 0;
        diacorte = 16;

        ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
        console.log("Fecha inicio " + fechaInicio);
        //var fechaFin    = new Date('2017-12-28');
        //alert("Día Inicio " + fechaInicio);
        //alert("Día Final " + fechafindefinitiva);
        while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
            //alert("Día Final " + fechafindefinitiva);
            if (fechafindefinitiva.getDay() == 0 || fechafindefinitiva.getDay() == 6) {
                console.log("Sabado o domingo " + fechafindefinitiva.getDay());
            } else {
                diastotales = diastotales + 1;
                console.log(diastotales);
            }
            console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                fechafindefinitiva.getDate());
            fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
        }
        ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles

        ///Ciclo para evaluar si es feriado y descontar los días
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
        while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
            for (var i = 0; i < fiestas.length; i++) {
                fechabuscar = fiestas[i];
                fechacomparar = parseInt(fechafindefinitiva.getDate()) + "," + parseInt(fechafindefinitiva.getMonth() +
                    1);
                //alert(fechabuscar);
                //alert(fechacomparar);
                console.log("Fecha Comparar " + fechacomparar);
                if (fechabuscar == fechacomparar) {
                    diastotales = diastotales - 1;
                    console.log("Feriado");
                }
            }
            console.log(diastotales);
            console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                fechafindefinitiva.getDate());
            console.log("Fecha " + fechafindefinitiva);
            fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
        }
        ///Ciclo para evaluar si es feriado y descontar los días

        //Ciclo para validar si es fecha de corte es feriado
        var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
        for (var i = 0; i < fiestas.length; i++) {
            fechabuscar = fiestas[i];
            fechacomparar = parseInt(diacorte) + "," + parseInt(mesfinal);
            //alert(fechabuscar);
            //alert(fechacomparar);
            console.log("Fecha Comparar Corte " + fechacomparar);
            if (fechabuscar == fechacomparar) {
                //diastotales=diastotales-1;
                console.log("Feriado");
            }
        }
        console.log(diastotales);
        console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
            fechafindefinitiva.getDate());
        console.log("Fecha de corte " + fechafindefinitiva);


        ////

        ////nuevo metodo***********************************************************************

        if (diastotales >= 3) {
            //fecha real de retiro un mes despues
            //alert(mesfinal);
            //alert(parseInt(diafinal));
            mesretiro = parseInt(mesfinal);
            if ((mesretiro == 12) && (parseInt(diafinal) <= 16 - 3)) {
                mesretiroreal = 12;
                year = parseInt(year) + 1;
                diareal = 16;
            } else {

                if ((mesretiro == 12) && (parseInt(diafinal) > (16 - 3))) {
                    mesretiroreal = 1;
                    year = parseInt(year) + 1;
                    diareal = 30;
                } else {
                    mesretiroreal = mesretiro + 1;


                    if ((parseInt(diafinal) > (16 - 3))) {
                        diareal = 30;
                    } else {
                        diareal = 16;
                    }

                }
            }
            mesfactura = parseInt(mesretiroreal);
            document.getElementById("fechafinal").innerHTML = diareal + "-" + mesretiro + "-" + year;
            document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;

        } else {


            mesretiro = parseInt(mesfinal) + 1;
            if ((mesretiro == 12) && (parseInt(diafinal) <= 16 - 3)) {
                mesretiroreal = 12;
                year = parseInt(year) + 1;
                diareal = 16;
            } else {

                if ((mesretiro == 12) && (parseInt(diafinal) > (16 - 3))) {
                    mesretiroreal = 1;
                    year = parseInt(year) + 1;
                    diareal = 16;
                } else {
                    mesretiroreal = mesretiro + 1;


                    if ((parseInt(diafinal) > (16 - 3))) {
                        diareal = 16;
                    } else {
                        diareal = 16;
                    }

                }
            }
            mesfactura = parseInt(mesretiroreal);
            document.getElementById("fechafinal").innerHTML = diareal + "-" + mesretiro + "-" + year;
            document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;



            document.getElementById("mensaje").innerHTML =
                "Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo 91-92	*Consumo del 17-" +
                mesfinal + " al 16-" + mesretiro + "*";
        }


        //Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.		
    }


    fin = 30;



    if (ciclo != 90 && ciclo != 91 && ciclo != 92) {
        mesfinal = words[1];
        //alert(mesfinal);

        mesfinal2 = mesfinal;
        mesretiro2 = parseInt(mesfinal);
        //alert("mes retiro2 " +mesretiro2);



        <?php
            for ($i = 1; $i <= 31; $i++) {
            ?>
        if (ciclo == <?php echo $i ?>) {


            ///////nuevo metodo***********************************************************************
            diastotales = 0;
            diacorte = ciclo;

            ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles
            var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
            var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
            console.log("Fecha inicio " + fechaInicio);
            //var fechaFin    = new Date('2017-12-28');
            //alert("Día Inicio " + fechaInicio);
            //alert("Día Final " + fechafindefinitiva);
            while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
                //alert("Día Final " + fechafindefinitiva);
                if (fechafindefinitiva.getDay() == 0 || fechafindefinitiva.getDay() == 6) {
                    console.log("Sabado o domingo " + fechafindefinitiva.getDay());
                } else {
                    diastotales = diastotales + 1;
                    console.log(diastotales);
                }
                console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                    fechafindefinitiva.getDate());
                fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
            }
            ///Ciclo para evaluar si es sabado o domingo y ver cuantos dias habiles

            ///Ciclo para evaluar si es feriado y descontar los días
            var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
            var fechaInicio = new Date('2022-' + mesfinal + '-' + diacorte);
            while (fechafindefinitiva.getTime() <= fechaInicio.getTime()) {
                for (var i = 0; i < fiestas.length; i++) {
                    fechabuscar = fiestas[i];
                    fechacomparar = parseInt(fechafindefinitiva.getDate()) + "," + parseInt(fechafindefinitiva
                        .getMonth() + 1);
                    //alert(fechabuscar);
                    //alert(fechacomparar);
                    console.log("Fecha Comparar " + fechacomparar);
                    if (fechabuscar == fechacomparar) {
                        diastotales = diastotales - 1;
                        console.log("Feriado");
                    }
                }
                console.log(diastotales);
                console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                    fechafindefinitiva.getDate());
                console.log("Fecha " + fechafindefinitiva);
                fechafindefinitiva.setDate(fechafindefinitiva.getDate() + 1);
            }
            ///Ciclo para evaluar si es feriado y descontar los días

            //Ciclo para validar si es fecha de corte es feriado
            var fechafindefinitiva = new Date(year, mesfinal - 1, diafinal);
            for (var i = 0; i < fiestas.length; i++) {
                fechabuscar = fiestas[i];
                fechacomparar = parseInt(diacorte) + "," + parseInt(mesfinal);
                //alert(fechabuscar);
                //alert(fechacomparar);
                console.log("Fecha Comparar Corte " + fechacomparar);
                if (fechabuscar == fechacomparar) {
                    //diastotales=diastotales-1;
                    console.log("Feriado");
                }
            }
            console.log(diastotales);
            console.log(fechafindefinitiva.getFullYear() + '/' + (fechafindefinitiva.getMonth() + 1) + '/' +
                fechafindefinitiva.getDate());
            console.log("Fecha de corte " + fechafindefinitiva);


            ////

            ////nuevo metodo***********************************************************************


            if (diastotales >= 3) {


                if (mesretiro2 == 12) {
                    mesretiroreal = 1;
                    year = parseInt(year) + 1;
                } else {
                    mesretiroreal = mesretiro2;
                }
                mesfactura = parseInt(mesretiroreal);
                //alert(mesretiro2);
                document.getElementById("fechafinal").innerHTML = "" + mesretiro2 + "-" + year;
                document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;



            } else if (words[2] == 31) {

                if (mesretiro2 == 12) {
                    mesretiroreal = 1;
                    mesretiro2 = 1;
                    year = parseInt(year) + 1;
                } else {
                    mesretiroreal = mesretiro2 + 1;
                    mesretiro2 = mesretiro2 + 1;
                }
                mesfactura = parseInt(mesretiroreal);
                console.log("Julian BS");



                console.log("Mi bloque: ");

                <?php
                            if($i == 30){
                                echo 'document.getElementById("fechafinal").innerHTML = "31-" + 
                                mesretiro2 + "-" + year;';
                            }else{
                                ?>
                document.getElementById("fechafinal").innerHTML = "<?php echo $i ?>-" + mesretiro2 + "-" + year;


                <?php
                            }

                        ?>




                document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;



                document.getElementById("mensaje").innerHTML =
                    "Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.";



                console.log("--------------------");



            } else if (validarmes540 == 0228) {

                if (mesretiro2 == 12) {
                    mesretiroreal = 1;
                    mesretiro2 = 1;
                    year = parseInt(year) + 1;
                } else {
                    mesretiroreal = mesretiro2 + 1;
                    mesretiro2 = mesretiro2 + 1;
                }
                mesfactura = parseInt(mesretiroreal);
                console.log("Febrero");



                console.log("Mi bloque: ");

                <?php
    if($i == 30){
        ?>
                document.getElementById("fechafinal").innerHTML = "28-" + mesretiro2 + "-" + year;
                <?php  
    }else{
        ?>
                document.getElementById("fechafinal").innerHTML = "<?php echo $i ?>-" + mesretiro2 + "-" + year;
                <?php
    }

?>
                document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;



                document.getElementById("mensaje").innerHTML =
                    "Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.";



                console.log("--------------------");



            } else {


                if (mesretiro2 == 12) {
                    mesretiroreal = 1;
                    mesretiro2 = 1;
                    year = parseInt(year) + 1;
                } else {
                    mesretiroreal = mesretiro2 + 1;
                    mesretiro2 = mesretiro2 + 1;
                }

                mesfactura = parseInt(mesretiroreal);
                document.getElementById("fechafinal").innerHTML = "<?php echo $i ?>-" + mesretiro2 + "-" + year;
                document.getElementById("fechafinalfactura").innerHTML = mesfactura + "-" + year;



                document.getElementById("mensaje").innerHTML =
                    "Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.";
            }
        }


        <?php
            }
            ?>



        if (ciclo == 30) {
            document.getElementById("mensaje").innerHTML = "Ciclo 1	*Consumo del 1 al 31";
        }
        if (ciclo == 28) {
            document.getElementById("mensaje").innerHTML = "Ciclo 1	*Consumo del 1 al 28";
        }





        if (ciclo == 1) {
            document.getElementById("mensaje").innerHTML = "Ciclo	2	*Consumo del 2 al 1";
        }
        if (ciclo == 2) {
            document.getElementById("mensaje").innerHTML = "Ciclo	3	*Consumo del 3 al 2";
        }
        if (ciclo == 3) {
            document.getElementById("mensaje").innerHTML = "Ciclo	4	*Consumo del 4 al 3";
        }
        if (ciclo == 4) {
            document.getElementById("mensaje").innerHTML = "Ciclo	5	*Consumo del 5 al 4";
        }
        if (ciclo == 5) {
            document.getElementById("mensaje").innerHTML = "Ciclo	6	*Consumo del 6 al 5";
        }
        if (ciclo == 6) {
            document.getElementById("mensaje").innerHTML = "Ciclo	7	*Consumo del 7 al 6";
        }
        if (ciclo == 7) {
            document.getElementById("mensaje").innerHTML = "Ciclo	8	*Consumo del 8 al 7";
        }
        if (ciclo == 8) {
            document.getElementById("mensaje").innerHTML = "Ciclo	9	*Consumo del 9 al 8";
        }
        if (ciclo == 9) {
            document.getElementById("mensaje").innerHTML = "Ciclo	10 *Consumo del 10 al 9";
        }
        if (ciclo == 10) {
            document.getElementById("mensaje").innerHTML = "Ciclo	11 *Consumo del 11 al 10";
        }
        if (ciclo == 11) {
            document.getElementById("mensaje").innerHTML = "Ciclo	12 *Consumo del 12 al 11";
        }
        if (ciclo == 12) {
            document.getElementById("mensaje").innerHTML = "Ciclo	13 *Consumo del 13 al 12";
        }
        if (ciclo == 13) {
            document.getElementById("mensaje").innerHTML = "Ciclo	14 *Consumo del 14 al 13";
        }
        if (ciclo == 14) {
            document.getElementById("mensaje").innerHTML = "Ciclo	15 *Consumo del 15 al 14";
        }
        if (ciclo == 15) {
            document.getElementById("mensaje").innerHTML = "Ciclo	16 *Consumo del 16 al 15";
        }
        if (ciclo == 16) {
            document.getElementById("mensaje").innerHTML = "Ciclo	17 *Consumo del 17 al 16";
        }
        if (ciclo == 17) {
            document.getElementById("mensaje").innerHTML = "Ciclo	18 *Consumo del 18 al 17";
        }
        if (ciclo == 18) {
            document.getElementById("mensaje").innerHTML = "Ciclo	19 *Consumo del 19 al 18";
        }
        if (ciclo == 19) {
            document.getElementById("mensaje").innerHTML = "Ciclo	20 *Consumo del 20 al 19";
        }
        if (ciclo == 20) {
            document.getElementById("mensaje").innerHTML = "Ciclo	21 *Consumo del 21 al 20";
        }
        if (ciclo == 21) {
            document.getElementById("mensaje").innerHTML = "Ciclo	22 *Consumo del 22 al 21";
        }
        if (ciclo == 22) {
            document.getElementById("mensaje").innerHTML = "Ciclo	23 *Consumo del 23 al 22";
        }
        if (ciclo == 23) {
            document.getElementById("mensaje").innerHTML = "Ciclo	24 *Consumo del 24 al 23";
        }
        if (ciclo == 24) {
            document.getElementById("mensaje").innerHTML = "Ciclo	25 *Consumo del 25 al 24";
        }
        if (ciclo == 25) {
            document.getElementById("mensaje").innerHTML = "Ciclo	26 *Consumo del 26 al 25";
        }
        if (ciclo == 26) {
            document.getElementById("mensaje").innerHTML = "Ciclo	27 *Consumo del 27 al 26";
        }
        if (ciclo == 27) {
            document.getElementById("mensaje").innerHTML = "Ciclo	28 *Consumo del 28 al 27";
        }
        if (ciclo == 28) {
            document.getElementById("mensaje").innerHTML = "Ciclo	29 *Consumo del 29 al 28";
        }
        if (ciclo == 29) {
            document.getElementById("mensaje").innerHTML = "Ciclo	30 *Consumo del 30 al 29";
        }
        if (ciclo == 31) {
            document.getElementById("mensaje").innerHTML = "Ciclo	31 *Consumo del 31 al 30";
        }



    }





    console.log("Días totales" + diastotales);


}
</script>


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
$(function() {
    $("#my-search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#example-table > tbody > tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

function Limpiar() {
    $('#my-search').val('');
}
</script>

<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
<script>
var clipboard1 = new Clipboard('.link');


$(document).ready(function() {

    window.holidays = $.ajax({
        dataType: 'json',
        url: 'holiday.json',
        async: false
    }).responseJSON;

});


function validateHoliday(day, month, year) {
    const yearFind = window.holidays.find(function(yearEach) {
        return yearEach.id === year;
    });

    if (yearFind !== undefined) {
        const monthFind = yearFind.holiday.find(function(monthEach) {
            return monthEach.id === month;
        });

        if (monthFind !== undefined) {
            return !monthFind.days.includes(day);
        }
    }
    return true;
}
</script>