const nome = $("#nome");
const rg = $("#rg");
const cpf = $("#cpf");

const tel = $("#tel");
const email = $("#email");

const sexo = $("#sexo").val();
const masc = $("#masc").val();
const fem = $("#fem").val();
console.log(sexo, masc, fem);

const etnia = $("#etnia").val();
const indigena = $("#indigena").val();
const negro = $("#negro").val();
const branco = $("#branco").val();
console.log(negro, indigena, branco);

const validar = () => {
  // switch(sexo) {
  //   case masc:
  //     alert('oiii');
  //     break;
  //   case fem:
  //     alert(fem)
  //     break;
  //   // default:
  //   alert('Você precisa selecionar um sexo!')
  // }

  switch (etnia) {
    case branco:
      alert(branco);
      break;
  }

  if ($("#nome").val().length == "" || $("#nome").val() == null) {
    $("#nome").css("background", "crimson");
    $("#nome").focus();

    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "O campo nome está vazio!",
      footer: '<a href="">Why do I have this issue?</a>',
    });

    return false;
  }

  if ($("#rg").val().length == "" || $("#rg").val() == null) {
    $("#rg").css("background", "crimson");
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "O campo RG está vazio!",
      footer: '<a href="">Why do I have this issue?</a>',
    });
    $("#rg").focus();
    return false;
  }

  if ($("#cpf").val().length == "" || $("#cpf").val() == null) {
    $("#cpf").css("background", "crimson");
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'O campo CPF está vazio!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
    $("#cpf").focus();
    return false;
  }

  if ($("#tel").val().length == "" || $("#tel").val() == null) {
    $("#tel").css("background", "crimson");
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'O campo telefone está vazio!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
    $("#tel").focus();
    return false;
  }

  if ($("#email").val().length == "" || $("#email").val() == null) {
    $("#email").css("background", "crimson");
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'O campo email está vazio!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
    $("#email").focus();
    return false;
  }

  Swal.fire({
    icon: 'success',
    title: 'Usuário Cadastrado',
    text: 'Você está agora apto para votar!',
    showConfirmButton: false,
    timer: 1500
  })
  // setInterval(function () {window.location.href = '../backend/guardar-infos.php'},1000)
  // return false;
  return true;
};
