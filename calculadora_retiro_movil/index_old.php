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
                <image src="assets/images/banner.png"
                    style=" width:100%;" class="img-fluid"></image>
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
    <label><span style="font-size:16px;color: #00469c;">Fecha de</span><br> <span style="font-size:32px;color: #00469c;">Solicitud</span></label>
    <input type="date" class="form-control number1" placeholder="" id="fechasolicitud" name="fechasolicitud" style="font-size: 16px; font-weight: 500; text-align: left;"  onchange="calcular_todo()" >
    </div>
    <div class="col-md-4" style="margin-top:10px">
    <label><span style="font-size:16px;color: #00469c;">Ciclo de</span><br> <span style="font-size:32px;color: #00469c;">Facturación</span></label>
    <select  class="form-control" id="ciclo" name="ciclo"  style="font-size: 16px; font-weight: 500; text-align: left;" onchange="calcular_todo()">
    <option value="0">Sel.</option>
    <optgroup label="Ciclos con consumo Vencido">
    <option value="90">90</option>
    <option value="91">91</option>
    <option value="92">92</option>
    </optgroup>
    <optgroup label="Ciclos con consumo en Curso">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </optgroup>
    </select>
    </div>


  <div class="col-md-4" style="margin-top:10px;background-color: #7cb736;color:white; font-size:45px;text-align:center;    padding: 3%;">
 <a href="" onclick="" style="text-decoration:none;color:white">Consultar</a>
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
           
            <div>    <div>
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
for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
return (((sign) ? '' : '-') + num );
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



  



    function calcular_todo()
    {
fecha=document.getElementById("fechasolicitud").value;
ciclo=document.getElementById("ciclo").value;
var today = new Date();
var year = today.getFullYear();

document.getElementById("fechafinal").innerHTML="";
document.getElementById("fechafinalfactura").innerHTML="";

document.getElementById("mensaje").innerHTML="";

const words = fecha.split('-');
mesfinal=words[1];
diafinal=words[2];
console.log(words[1]);
console.log(words[2]);
//Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.		

if (ciclo==90)
{
/*if (diafinal<=(30-3))
{*/
//fecha real de retiro un mes despues
//mesretiro=parseInt(mesfinal)+1;
mesretiro=parseInt(mesfinal);
//alert(mesretiro);
if(mesretiro==12){
    mesretiroreal=1;
    mesfactura=parseInt(mesretiroreal);
  //  alert(mesretiroreal);
    year=parseInt(year);
    yearf=parseInt(year)+1;
}
else{
    //mesretiroreal=mesretiro+1; 
    mesretiroreal=mesretiro; 
    mesfactura=parseInt(mesretiroreal)+1;
    yearf=parseInt(year);
}



document.getElementById("fechafinal").innerHTML="30-"+mesretiro+"-"+year;
document.getElementById("fechafinalfactura").innerHTML=mesfactura+"-"+yearf;
/*}
else{*/
    document.getElementById("mensaje").innerHTML="Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo 90	*Consumo del 1 al 30*";
/*}*/
//Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.		
}

if (ciclo==91 || ciclo==92)
{
  /*  
if (diafinal<=(16-3))
{*/
//fecha real de retiro un mes despues
//alert(mesfinal);
//alert(parseInt(diafinal));
mesretiro=parseInt(mesfinal);
if((mesretiro==12) && (parseInt(diafinal)<=16-3) ){
    mesretiroreal=12;
    year=parseInt(year)+1;
    diareal=16;
}
else{

    if((mesretiro==12) && (parseInt(diafinal)>(16-3)) ){
    mesretiroreal=1;
    year=parseInt(year)+1;
    diareal=30;
}
else{
    mesretiroreal=mesretiro+1; 


    if((parseInt(diafinal)>(16-3)) ){
    diareal=30;
    }
    else{
        diareal=16; 
    }

}
}
mesfactura=parseInt(mesretiroreal);
document.getElementById("fechafinal").innerHTML=diareal+"-"+mesretiro+"-"+year;
document.getElementById("fechafinalfactura").innerHTML=mesfactura+"-"+year;

/*}
else{*/


    document.getElementById("mensaje").innerHTML="Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo 91-92	*Consumo del 17-"+mesfinal+" al 16-"+mesretiro+"*";
/*}*/


//Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.		
}


fin=30;


if (ciclo!=90 && ciclo!=91 && ciclo!=92 && ciclo>=6)
{
    mesfinal2=mesfinal;
    mesretiro2=parseInt(mesfinal)+1;
    

    <?php
  for ($i = 1; $i <= 31; $i++) {
    ?>
    if (ciclo==<?php echo $i ?>)
{
   diasdiferencia=(<?php echo $i ?>-3);
   
//alert(diasdiferencia);
   diasdiferencia=Math.abs(diasdiferencia);
//alert(diasdiferencia);

    if (diafinal<=diasdiferencia)
{
   
    if(mesretiro2==12){
        mesretiroreal=1;
    year=parseInt(year)+1;
}
else{
    mesretiroreal=mesretiro2+1; 
}
mesfactura=parseInt(mesretiroreal);
document.getElementById("fechafinal").innerHTML="<?php echo $i ?>-"+mesretiro2+"-"+year;
document.getElementById("fechafinalfactura").innerHTML=mesfactura+"-"+year;



}
else{
    document.getElementById("mensaje").innerHTML="Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo<?php echo $i ?>	*Consumo del <?php echo $i ?>-"+mesfinal2+" al "+fin+"-"+mesretiro2+"*";
}
}
if(fin==30){
    fin=0;
}
fin=fin+1;
mesfinal2=parseInt(mesfinal)+1;
mesretiro2=parseInt(mesfinal)+1;
<?php
  }
?>

}



fin=30;


if (ciclo!=90 && ciclo!=91 && ciclo!=92 && ciclo<=5)
{
    mesfinal2=mesfinal;
    mesretiro2=parseInt(mesfinal)+1;
    

    <?php
  for ($i = 1; $i <= 31; $i++) {
    ?>
    if (ciclo==<?php echo $i ?>)
{
    if(ciclo==1)
    {
        diasdiferencia=(33-3);
    }
    if(ciclo==2)
    {
        diasdiferencia=(32-3);
    }
    if(ciclo==3)
    {
        diasdiferencia=(30-3);
    }
    if(ciclo==4)
    {
        diasdiferencia=(29-3);
    }
    if(ciclo==5)
    {
        diasdiferencia=(8-3);
    }
 
    if (diafinal<=diasdiferencia)
{
   
    if(mesretiro2==12){
        mesretiroreal=1;
    year=parseInt(year)+1;
}
else{
    mesretiroreal=mesretiro2+1; 
}
mesfactura=parseInt(mesretiroreal);
document.getElementById("fechafinal").innerHTML="<?php echo $i ?>-"+mesretiro2+"-"+year;
document.getElementById("fechafinalfactura").innerHTML=mesfactura+"-"+year;



}
else{
    document.getElementById("mensaje").innerHTML="Solicitud de retiro debe hacerse tres días habiles antes del corte del ciclo de consumo.<br>Ciclo<?php echo $i ?>	*Consumo del <?php echo $i ?>-"+mesfinal2+" al "+fin+"-"+mesretiro2+"*";
}
}
if(fin==30){
    fin=0;
}
fin=fin+1;
mesfinal2=parseInt(mesfinal)+1;
mesretiro2=parseInt(mesfinal)+1;
<?php
  }
?>

}

/*
90	Consumo del 1 al 30	Consumo del 1 de Noviembre al 30 de Noviembre 		Diciembre
91	Consumo del 17 al 16	Consumo del 17 de Octubre al 16 de Noviembre 		Diciembre
92	Consumo del 17 al 16	Consumo del 17 de Octubre al 16 de Noviembre 		Diciembre

*/


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
    $(function () {
        $("#my-search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#example-table > tbody > tr").filter(function () {
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

  </script>

