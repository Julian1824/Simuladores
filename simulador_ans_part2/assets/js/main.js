$(document).ready(function () {
  window.weeks = $.ajax({
    dataType: "json",
    url: "assets/json/week.json",
    async: false,
  }).responseJSON;

  window.holidays = $.ajax({
    dataType: "json",
    url: "assets/json/holiday.json",
    async: false,
  }).responseJSON;

  window.months = $.ajax({
    dataType: "json",
    url: "assets/json/months.json",
    async: false,
  }).responseJSON;

  window.months.forEach(function (month) {
    $("#mes").append(`<option value="${month.id}">${month.name}</option>`);
  });

  const currentDay = new Date();
  const currentMonth = window.months.find(function (month) {
    return month.id === currentDay.getMonth() + 1;
  }).name;
  $("#dia_llamada").text(
    `${currentDay.getDate()} ${currentMonth} ${currentDay.getFullYear()}`
  );

  window.dates = $.ajax({
    dataType: "json",
    url: "assets/json/dates.json",
    async: false,
  }).responseJSON;
  drawTitle(window.dates[0], "");

  $("#dia").change(function () {
    drawTitle(window.dates[0], "");
    $("#mes").val("0");
    $("#ans_de_3_dias_habiles").text(``);
    $("#fecha_ciclo").text(``);
  });
  $("#mes").change(changeDate);
});

function validateHoliday(day, month, year) {
  const yearFind = window.holidays.find(function (yearEach) {
    return yearEach.id === year;
  });

  if (yearFind !== undefined) {
    const monthFind = yearFind.holiday.find(function (monthEach) {
      return monthEach.id === month;
    });

    if (monthFind !== undefined) {
      return !monthFind.days.includes(day);
    }
  }
  return true;
}

function changeDate() {
  const day = parseInt($("#dia").val());
  const month = parseInt($("#mes").val());
  const year = new Date().getFullYear();

  const element = window.dates.find(function (obj) {
    return obj.id === month;
  });
  const datos1 = `${day} ${$("#mes").find(":selected").text()} ${year}`;

  //const dateCicle2 = `${day} ${$('#mes').find(':selected').text()} ${year}`;

  console.log(datos1);

  if (datos1 == "25 Septiembre 2022") {
  }
  if (element !== undefined && validateDay(day)) {
    if (validateHoliday(day, month, year)) {
      drawTitle(element, createDate(element, day));
    } else {
      alert("Debe seleccionar un día que no sea festivo");

      drawTitle(window.dates[0], "");
      $("#dia").val("");
      $("#mes").val("0");
      $("#ans_de_3_dias_habiles").text(``);
      $("#fecha_ciclo").text(``);
    }
  }
}
function createDate(titulo, day) {
  const year = new Date().getFullYear();
  const month = $("#mes").find(":selected").val();
  const date = new Date(`${month}-${day}-${year}`);
  date.setDate(date.getDate() - 3);

  /* const dates1 = date.getDate();
    const datos= (`${day}-${month}-${year}`);
    console.log(day);
    console.log(`${day}-${month}`)
    console.log(datos)*/

  const datos1 = `${day} ${$("#mes").find(":selected").text()} ${year}`;

  //const dateCicle2 = `${day} ${$('#mes').find(':selected').text()} ${year}`;

  console.log(datos1);
  ////Dias festivos del resto del año
  const domingos = [
    "18 Septiembre 2022",
    "25 Septiembre 2022",
    "2 Octubre 2022",
    "9 Octubre 2022",
    "16 Octubre 2022",
    "23 Octubre 2022",
    "6 Noviembre 2022",
    "13 Noviembre 2022",
    "20 Noviembre 2022",
    "27 Noviembre 2022",
    "4 Diciembre 2022",
    "11 Diciembre 2022",
    "18 Diciembre 2022",
    "25 Diciembre 2022",
  ];
  ///Los lunes festivos del año
  const diasfestivos = [
    "22 Agosto 2022",
    "29 Agosto 2022",
    "5 Septiembre 2022",
    "12 Septiembre 2022",
    "19 Septiembre 2022",
    "26 Septiembre 2022",
    "3 Octubre 2022",
    "10 Octubre 2022",
    "17 Octubre 2022",
    "24 Octubre 2022",
    "22 Septiembre 2022",
    "7 Noviembre 2022",
    "14 Noviembre 2022",
    "21 Noviembre 2022",
    "28 Noviembre 2022",
    "1 Diciembre 2022",
    "5 Diciembre 2022",
    "12 Diciembre 2022",
    "19 Diciembre 2022",
    "26 Diciembre 2022",
  ];

  //Calculo Especial ya que los dias siguientes son festivos y no los toma bien
  const diasfestivospart2 = [
    "17 Agosto 2022",
    "16 Agosto 2022",
    "18 Octubre 2022",
    "19 Octubre 2022",
    "8 Noviembre 2022",
    "9 Noviembre 2022",
    "15 Noviembre 2022",
    "16 Noviembre 2022",
  ];

  const fecha = datos1;

  if (diasfestivospart2.find((el) => el == fecha)) {
    date.setDate(date.getDate() - 3);
    while (
      !validateHoliday(date.getDate(), date.getMonth() + 1, date.getFullYear())
    ) {
      date.setDate(date.getDate() - 3);
    }

    const newMonth = window.months.find(
      (month) => month.id === date.getMonth() + 1
    ).name;
    $("#ans_de_3_dias_habiles").text(`${date.getDate()} ${newMonth} ${year}`);

    const dateCicle = `${day} ${$("#mes").find(":selected").text()} ${year}`;
    $("#fecha_ciclo").text(dateCicle);

    validateNextCicle(
      titulo.esSiguienteCiclo,
      new Date(`${month}-${day}-${year}`)
    );

    return dateCicle;
  } else if (diasfestivos.find((el) => el == fecha)) {
    date.setDate(date.getDate() - 2);
    while (
      !validateHoliday(date.getDate(), date.getMonth() + 1, date.getFullYear())
    ) {
      date.setDate(date.getDate() - 1);
    }

    const newMonth = window.months.find(
      (month) => month.id === date.getMonth() + 1
    ).name;
    $("#ans_de_3_dias_habiles").text(`${date.getDate()} ${newMonth} ${year}`);

    const dateCicle = `${day} ${$("#mes").find(":selected").text()} ${year}`;
    $("#fecha_ciclo").text(dateCicle);

    validateNextCicle(
      titulo.esSiguienteCiclo,
      new Date(`${month}-${day}-${year}`)
    );

    return dateCicle;
  } else if (domingos.find((el) => el == fecha)) {
    date.setDate(date.getDate() - 1);
    while (
      !validateHoliday(date.getDate(), date.getMonth() + 1, date.getFullYear())
    ) {
      date.setDate(date.getDate() - 1);
    }

    const newMonth = window.months.find(
      (month) => month.id === date.getMonth() + 1
    ).name;
    $("#ans_de_3_dias_habiles").text(`${date.getDate()} ${newMonth} ${year}`);

    const dateCicle = `${day} ${$("#mes").find(":selected").text()} ${year}`;
    $("#fecha_ciclo").text(dateCicle);

    validateNextCicle(
      titulo.esSiguienteCiclo,
      new Date(`${month}-${day}-${year}`)
    );

    return dateCicle;
  } else {
    while (
      !validateHoliday(date.getDate(), date.getMonth() + 1, date.getFullYear())
    ) {
      date.setDate(date.getDate() - 2);
    }

    const newMonth = window.months.find(
      (month) => month.id === date.getMonth() + 1
    ).name;
    $("#ans_de_3_dias_habiles").text(`${date.getDate()} ${newMonth} ${year}`);

    const dateCicle = `${day} ${$("#mes").find(":selected").text()} ${year}`;
    $("#fecha_ciclo").text(dateCicle);

    validateNextCicle(
      titulo.esSiguienteCiclo,
      new Date(`${month}-${day}-${year}`)
    );

    return dateCicle;
  }
}
function validateNextCicle(isNext, date) {
  if (isNext) {
    date.setMonth(date.getMonth() + 1);
  }
  date.setDate(date.getDate() - 2);

  const currentNewMonth = window.months.find(function (month) {
    return month.id === date.getMonth() + 1;
  }).name;

  //console.log(currentNewMonth);

  $("#cancelacion").text(
    `${date.getDate()} ${currentNewMonth} ${date.getFullYear()}`
  );
}

function validateDay(day) {
  if (isNaN(day)) {
    alert("Debe seleccionar un dia");
    $("#mes").val("0");
    $("#dia").val("");
    return false;
  }

  return true;
}

function drawTitle(titulo, date) {
  let text1 = date;
  let result1 = text1.substring(3);

  const mes = document.querySelector("#dia_llamada").textContent;
  let result2 = mes.substring(3);

  if (result1 === result2) {
    let text = date;
    let result = parseInt(text.substring(0, 3));

    const itemPrice = document.querySelector("#dia_llamada").textContent;
    let resul2 = parseInt(itemPrice.substring(0, 3));

    const operar = resul2 - result;

    const mayor = resul2 + 4;
    const menor = resul2 - 6;

    if (operar === 0 || result <= mayor) {
      if (result >= menor || mayor <= result) {
        $("#cambio1").text(titulo.titulo.replaceAll("${date}", date));
        $("#cambio2").text(titulo.titulo2.replaceAll("${date}", date));
        $("#cambio3").text(titulo.titulo3.replaceAll("${date}", date));
        $("#cambio4").text(titulo.titulo4.replaceAll("${date}", date));
        $("#cambio5").text(titulo.titulo5.replaceAll("${date}", date));
        $("#cambio6").text(titulo.titulo6.replaceAll("${date}", date));
        $("#cambio7").text(titulo.titulo7.replaceAll("${date}", date));
        $("#text1").text(titulo.descripcion.replaceAll("${date}", date));
        $("#text2").text(titulo.descripcion2.replaceAll("${date}", date));
        $("#text3").text(titulo.descripcion3.replaceAll("${date}", date));
        $("#text4").text(titulo.descripcion4.replaceAll("${date}", date));
        $("#text5").text(titulo.descripcion5.replaceAll("${date}", date));
        $("#text6").text(titulo.descripcion6.replaceAll("${date}", date));
        $("#text7").text(titulo.descripcion7.replaceAll("${date}", date));
        $("#factura1").text(titulo.facturaotromes.replaceAll("${date}", date));
        $("#factura2").text(titulo.facturaotromes.replaceAll("${date}", date));
        $("#ciclo").text(titulo.ciclo.replaceAll("${date}", date));
        $("#ciclo2").text(titulo.ciclo2.replaceAll("${date}", date));
        $("#cambiomes").text(titulo.mesnext.replaceAll("${date}", date));
      } else {
        $("#cambio1").text(titulo.titulo.replaceAll("${date}", date));
        $("#cambio2").text(titulo.titulo2.replaceAll("${date}", date));
        $("#cambio3").text(titulo.titulo3.replaceAll("${date}", date));
        $("#cambio4").text(titulo.titulo4.replaceAll("${date}", date));
        $("#cambio5").text(titulo.titulo5.replaceAll("${date}", date));
        $("#cambio6").text(titulo.titulo6.replaceAll("${date}", date));
        $("#cambio7").text(titulo.titulo7.replaceAll("${date}", date));
        $("#text1").text(titulo.descripcion.replaceAll("${date}", date));
        $("#text2").text(titulo.descripcion2.replaceAll("${date}", date));
        $("#text3").text(titulo.descripcion3.replaceAll("${date}", date));
        $("#text4").text(titulo.descripcion4.replaceAll("${date}", date));
        $("#text5").text(titulo.descripcion5.replaceAll("${date}", date));
        $("#text6").text(titulo.descripcion6.replaceAll("${date}", date));
        $("#text7").text(titulo.descripcion7.replaceAll("${date}", date));
        $("#factura1").text(titulo.factura.replaceAll("${date}", date));
        $("#factura2").text(titulo.factura.replaceAll("${date}", date));
        $("#ciclo").text(titulo.ciclo.replaceAll("${date}", date));
        $("#ciclo2").text(titulo.ciclo2.replaceAll("${date}", date));
        $("#cambiomes").text(titulo.cambiomes.replaceAll("${date}", date));
      }
    } else {
      $("#cambio1").text(titulo.titulo.replaceAll("${date}", date));
      $("#cambio2").text(titulo.titulo2.replaceAll("${date}", date));
      $("#cambio3").text(titulo.titulo3.replaceAll("${date}", date));
      $("#cambio4").text(titulo.titulo4.replaceAll("${date}", date));
      $("#cambio5").text(titulo.titulo5.replaceAll("${date}", date));
      $("#cambio6").text(titulo.titulo6.replaceAll("${date}", date));
      $("#cambio7").text(titulo.titulo7.replaceAll("${date}", date));
      $("#text1").text(titulo.descripcion.replaceAll("${date}", date));
      $("#text2").text(titulo.descripcion2.replaceAll("${date}", date));
      $("#text3").text(titulo.descripcion3.replaceAll("${date}", date));
      $("#text4").text(titulo.descripcion4.replaceAll("${date}", date));
      $("#text5").text(titulo.descripcion5.replaceAll("${date}", date));
      $("#text6").text(titulo.descripcion6.replaceAll("${date}", date));
      $("#text7").text(titulo.descripcion7.replaceAll("${date}", date));
      $("#factura1").text(titulo.factura.replaceAll("${date}", date));
      $("#factura2").text(titulo.factura.replaceAll("${date}", date));
      $("#ciclo").text(titulo.ciclo.replaceAll("${date}", date));
      $("#ciclo2").text(titulo.ciclo2.replaceAll("${date}", date));
      $("#cambiomes").text(titulo.cambiomes.replaceAll("${date}", date));
    }
  } else {
    $("#cambio1").text(titulo.titulo.replaceAll("${date}", date));
    $("#cambio2").text(titulo.titulo2.replaceAll("${date}", date));
    $("#cambio3").text(titulo.titulo3.replaceAll("${date}", date));
    $("#cambio4").text(titulo.titulo4.replaceAll("${date}", date));
    $("#cambio5").text(titulo.titulo5.replaceAll("${date}", date));
    $("#cambio6").text(titulo.titulo6.replaceAll("${date}", date));
    $("#cambio7").text(titulo.titulo7.replaceAll("${date}", date));
    $("#text1").text(titulo.descripcion.replaceAll("${date}", date));
    $("#text2").text(titulo.descripcion2.replaceAll("${date}", date));
    $("#text3").text(titulo.descripcion3.replaceAll("${date}", date));
    $("#text4").text(titulo.descripcion4.replaceAll("${date}", date));
    $("#text5").text(titulo.descripcion5.replaceAll("${date}", date));
    $("#text6").text(titulo.descripcion6.replaceAll("${date}", date));
    $("#text7").text(titulo.descripcion7.replaceAll("${date}", date));
    $("#factura1").text(titulo.factura.replaceAll("${date}", date));
    $("#factura2").text(titulo.factura.replaceAll("${date}", date));
    $("#ciclo").text(titulo.ciclo.replaceAll("${date}", date));
    $("#ciclo2").text(titulo.ciclo2.replaceAll("${date}", date));
    $("#cambiomes").text(titulo.cambiomes.replaceAll("${date}", date));
  }
}
