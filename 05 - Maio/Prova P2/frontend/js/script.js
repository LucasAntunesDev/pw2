let codigoCandidatoSelecionado;
let nomeCandidatoSelecionado;
let partidoCandidatoSelecionado;
let fotoCandidatoSelecionado;

let codigoCandidato1 = 1;
let codigoCandidato2 = 2;
let codigoCandidato3 = 3;
let codigoCandidato4 = 4;

let nomeCandidato1 = "John Lennon";
let nomeCandidato2 = "Paul McCartney";
let nomeCandidato3 = "George Harrinson";
let nomeCandidato4 = "Ringo Starr";

let nomePartidoCandidato1 = "Partido do Vocal";
let nomePartidoCandidato2 = "Partido do Baixo";
let nomePartidoCandidato3 = "Partido da Guitarra";
let nomePartidoCandidato4 = "Partido da Bateria";

let fotoCandidato1 =
 "https://i.scdn.co/image/ab6761610000e5eb207c6849d1a1f4480e6aa222";
let fotoCandidato2 =
 "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Paul_McCartney_Headshot_%28cropped%29.jpg/170px-Paul_McCartney_Headshot_%28cropped%29.jpg";
let fotoCandidato3 =
 "https://upload.wikimedia.org/wikipedia/commons/4/4e/George_Harrison_1974_colorized.jpg";
let fotoCandidato4 =
 "https://media.gq-magazine.co.uk/photos/5f03235bfcb5fd13a37e5c1d/1:1/w_1080,h_1080,c_limit/20200706-ringo-10.jpg";

let candidatoExiste = false;

const mostrarCandidato = (candidato, foto, partido) =>{
  $("#foto").attr("src", foto);
  $("#foto").css("visibility", "visible");
  $("#nomeCandidato").html(candidato);
  $("#partido").html(partido);
  candidatoExiste = true;
}

function inserir(valor) {
 let numero = $("#numero").val();

 if (numero == "") {
  $("#numero").val(valor);
  $("#numero").css("border", "solid 2px gray");
 }

 var valor1 = parseInt($("#numero").val());
 let candidato = valor1;

 switch (candidato) {
  case codigoCandidato1:
  mostrarCandidato(nomeCandidato1, fotoCandidato1, nomePartidoCandidato1)
   break;

  case codigoCandidato2:
    mostrarCandidato(nomeCandidato2, fotoCandidato2, nomePartidoCandidato2)
   break;

  case codigoCandidato3:
    mostrarCandidato(nomeCandidato3, fotoCandidato3, nomePartidoCandidato3)
   break;

  case codigoCandidato4:
    mostrarCandidato(nomeCandidato4, fotoCandidato4, nomePartidoCandidato4)
   candidatoExiste = true;
   break;

  default:
   codigoCandidatoSelecionado = undefined;
   nomeCandidatoSelecionado = undefined;
   partidoCandidatoSelecionado = undefined;
   candidatoExiste = false;
   Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Esse candidato não existe!",
    confirmButtonColor: "#059669",
    footer: '<a href="candidatos.html">Ver candidatos</a>'
   });
   $("#numero").val("");
 }
}

function corrige() {
 $("#numero").val("");
 $("#foto").attr("src","");
 $("#nomeCandidato").html("");
 $("#partido").html("");
 $("#foto").css("visibility", "hidden");
 $("#imgCandidato").css("visibility", "hidden");
}

function votar() {
 if (candidatoExiste) {
  $("#infosCandidato").css("display", "none");
  $("#foto").css("display", "none");
  Swal.fire({
   icon: "success",
   title: "Voto registrado",
   showConfirmButton: false,
   timer: 1500,
  });
  setInterval(function () {
   window.location.href = "parciais.php";
  }, 1000);
 } else {
  setInterval(function () {
   location.reload();
  }, 1000);
 }
}
