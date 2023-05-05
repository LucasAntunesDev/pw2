const nome = $("#nome");
const rg = $("#rg");
rg.mask("00.000.000-0", { reverse: true });
const cpf = $("#cpf");
cpf.mask("000.000.000-00", { reverse: true });

$("#sexo").select2();
$("#etnia").select2();
$("#uf").select2();

const tel = $("#tel");
tel.mask("(00) 0000-0000");
const email = $("#email");

const etnia = $("#etnia").val();
const indigena = $("#indigena").val();
const negro = $("#negro").val();
const branco = $("#branco").val();

const validar = () => {
 const sexo = $("#sexo").val();
 const masc = $("#masc").val();
 const fem = $("#fem").val();

 const etnia = $("#etnia").val();
 const indigena = $("#indigena").val();
 const negro = $("#negro").val();
 const branco = $("#branco").val();

 const uf = $("#uf").val();

 if ($("#nome").val().length == "" || $("#nome").val() == null) {
  $("#nome").css("background", "crimson");
  $("#nome").focus();

  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo nome está vazio!",
   confirmButtonColor: "#059669",
  });

  return false;
 }

 if ($("#rg").val().length == "" || $("#rg").val() == null) {
  $("#rg").css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo RG está vazio!",
   confirmButtonColor: "#059669",
  });
  $("#rg").focus();
  return false;
 }
 if ($("#cpf").val().length == "" || $("#cpf").val() == null) {
  $("#cpf").css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo CPF está vazio!",
   confirmButtonColor: "#059669",
  });
  $("#cpf").focus();
  return false;
 }

 switch (sexo) {
  case masc:
   break;
  case fem:
   break;
  default:
   Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Você precisa selecionar um sexo!",
    confirmButtonColor: "#059669",
   });
   return false;
 }

 switch (etnia) {
  case indigena:
   break;
  case branco:
   break;
  case negro:
   break;
  default:
   Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Você precisa selecionar uma etnia!",
    confirmButtonColor: "#059669",
   });
   return false;
 }

 switch (uf) {
  case "ac":
   break;
  case "al":
   break;
  case "ap":
   break;
  case "am":
   break;
  case "ba":
   break;
  case "ce":
   break;
  case "df":
   break;
  case "es":
   break;
  case "go":
   break;
  case "ma":
   break;
  case "mt":
   break;
  case "ms":
   break;
  case "mg":
   break;
  case "pa":
   break;
  case "pb":
   break;
  case "pr":
   break;
  case "pe":
   break;
  case "pi":
   break;
  case "rj":
   break;
  case "rn":
   break;
  case "rs":
   break;
  case "ro":
   break;
  case "rr":
   break;
  case "sc":
   break;
  case "sp":
   break;
  case "se":
   break;
  case "to":
   break;
  default:
   Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Você precisa selecionar uma UF!",
    confirmButtonColor: "#059669",
   });
   return false;
 }

 if ($("#tel").val().length == "" || $("#tel").val() == null) {
  $("#tel").css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo telefone está vazio!",
   confirmButtonColor: "#059669",
  });
  $("#tel").focus();
  return false;
 }

 if ($("#email").val().length == "" || $("#email").val() == null) {
  $("#email").css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo email está vazio!",
   confirmButtonColor: "#059669",
  });
  $("#email").focus();
  return false;
 }

 Swal.fire({
  icon: "success",
  title: "Usuário Cadastrado",
  text: "Você está agora apto para votar!",
  showConfirmButton: false,
  timer: 1500,
 });

 // setInterval(function () {window.location.href = '../backend/guardar-infos.php'},1000)
 setInterval(function () {
  return true;
 }, 2000);
 // return false;
 //  setInterval(function () =>  {true, 1700})
 //  return true;
};
