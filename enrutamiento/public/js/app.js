setTimeout(function(){
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
  },5000);

window.history.pushState("editor.php?id_oficina=12", "", "editor.php");

function Limpiar() {
  location.reload();
  }