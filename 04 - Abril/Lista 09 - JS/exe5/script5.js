const validar = () => {
  const nome = document.getElementById("nome");
  const idade = document.getElementById("idade");
  const observacoes = document.getElementById("obs");
  const masculino = document.getElementById("m");
  const feminino = document.getElementById("f");
  const info = document.getElementById("informatica");
  const artes = document.getElementById("artes");
  const matematica = document.getElementById("matematica");

  nome.style.background = "white";
  idade.style.background = "white";

  if (nome.value.length === 0) {
    nome.style.background = "red";
    alert("O campo está vazio!");
    nome.focus();
    return false;
  }
  if (idade.value.length === 0) {
    idade.style.background = "red";
    alert("O campo está vazio!");
    idade.focus();
    return false;
  } else if (nome.value.length < 4) {
    nome.style.background = "red";
    alert("O nome não está completo!");
    nome.focus();
    return false;
  } else if (idade.value > 18 || idade.value < 0) {
    idade.style.background = "red";
    alert("Você é maior de 18 anos!");
    idade.focus();
    return false;
  }
  if (observacoes.value == "") {
    alert("Não há nenhuma observação sobre o cliente");
    observacoes.focus;
    return false;
  }
  if (feminino.checked == false && masculino.checked == false) {
    alert("Você não selecionou nenhum sexo");
    return false;
  }
  if (
    info.checked == false &&
    matematica.checked == false &&
    artes.checked == false
  ) {
    alert("Você não selecionou nenhuma área de interesse");
    return false;
  }
  if (isNaN(idade)) {
    console.log(isNaN(idade))
    alert("A idade é um número");
} else {
      console.log(isNaN(idade))
    alert("A idade é uma string");
  }
  // if (selecionouCidade == false) alert("Você não selecionou nenhuma cidade");
  // if(radios.checked != true) alert("Você não selecionou nenhum sexo");

  let selecionouCidade = false;
  const bento = document.getElementById("bg").value;
  const garibaldi = document.getElementById("gb").value;
  const cidade = document.getElementById("cidade").value;

  switch (cidade) {
    case bento:
      alert("Você selecionou Bento Gonçalves");
      selecionouCidade = true;
      break;
    case garibaldi:
      alert("Você selecionou Garibaldi");
      selecionouCidade = true;
      break;
    default:
      return false;
  }

  //   return true;
};

const validarCidades = () => {};
