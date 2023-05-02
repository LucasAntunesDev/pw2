const nome = $("#nome");
const rg = $("#rg");
const cpf = $("#cpf");

const tel = $("#tel");
const email = $("#email");

const sexo = $("#sexo");
const masc = $("#masc");
const fem = $("#fem");

const validar = () => {
  if ($("#nome").val().length == "" || $("#nome").val() == null) {
    $("#nome").css("background", "crimson");
    alert(`O campo nome está vazio!`);
    $("#nome").focus();
    return false;
  }

  if ($("#rg").val().length == "" || $("#rg").val() == null) {
    $("#rg").css("background", "crimson");
    alert(`O campo RG está vazio!`);
    $("#rg").focus();
    return false;
  }

  if ($("#cpf").val().length == "" || $("#cpf").val() == null) {
    $("#cpf").css("background", "crimson");
    alert(`O campo CPF está vazio!`);
    $("#cpf").focus();
    return false;
  }

  if ($("#tel").val().length == "" || $("#tel").val() == null) {
    $("#tel").css("background", "crimson");
    alert(`O campo telefone está vazio!`);
    $("#tel").focus();
    return false;
  }

  if ($("#email").val().length == "" || $("#email").val() == null) {
    $("#email").css("background", "crimson");
    alert(`O campo email está vazio!`);
    $("#email").focus();
    return false;
  }

  if(sexo == null) alert(111)
  return false
};
