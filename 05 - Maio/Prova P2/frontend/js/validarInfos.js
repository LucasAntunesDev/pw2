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

 //Validação do nome
 if (nome.val().length == "" || nome.val() == null) {
  nome.css("background", "crimson");
  nome.focus();

  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo nome está vazio!",
   confirmButtonColor: "#059669",
  });

  nome.focus();

  return false;
 }

 //Validação do RG
 if (rg.val().length == "" || rg.val() == null) {
  rg.css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo RG está vazio!",
   confirmButtonColor: "#059669",
  });
  rg.focus();
  return false;
 } else if (rg.val().length < 12) {
  rg.css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo RG não está completo!",
   confirmButtonColor: "#059669",
  });
  rg.focus();
  return false;
 }

 //Validação do CPF
 if ($("#cpf").val().length == "" || $("#cpf").val() == null) {
  cpf.css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo CPF está vazio!",
   confirmButtonColor: "#059669",
  });
  cpf.focus();
  return false;
 } 
 else if ($("#cpf").val().length < 14) {
  $("#cpf").css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo CPF não está completo!",
   confirmButtonColor: "#059669",
  });
  $("#cpf").focus();
  return false;
 }

 //Validação do sexo
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

 //Validação da etnia
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

 //Validação da UF
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

 //Validação do telefone
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
 } else if (tel.val().length < 14) {
  tel.css("background", "crimson");
  Swal.fire({
   icon: "error",
   title: "Oops...",
   text: "O campo RG não está completo!",
   confirmButtonColor: "#059669",
  });
  tel.focus();
  return false;
 }

 //Validação do email
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

 //Mensagem mostrada se todos os campos 
 //forem completos corretamente
 Swal.fire({
  icon: "success",
  title: "Usuário Cadastrado",
  text: "Você está agora apto para votar!",
  showConfirmButton: false,
  timer: 1500,
 });

 setInterval(() => {
  return true;
 }, 2000);
};
