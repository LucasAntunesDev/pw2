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
  else if (isNaN(idade.value)) {
    idade.style.background = 'crimson';
    alert("O campo idade deve conter apenas números");
    idade.focus();
    return false;
  }
  if (observacoes.value == "") {
    alert("Não há nenhuma observação sobre o cliente");
    observacoes.focus();
    return false;
  }
  if (feminino.checked == false && masculino.checked == false) {
    alert("Você não selecionou nenhum sexo");
    feminino.focus();
    return false;
  }
  if (
    info.checked == false &&
    matematica.checked == false &&
    artes.checked == false
  ) {
    alert("Você não selecionou nenhuma área de interesse");
    info.focus();
    return false;
  }

  const bento = document.getElementById("bg").value;
  const garibaldi = document.getElementById("gb").value;
  const cidade = document.getElementById("cidade").value;

  switch (cidade) {
    case bento:
      break;
    case garibaldi:
      break;
    default:
      alert("Você não selecionou uma cidade");
      return false;
  }

  (alert('Enviado com sucesso!')); return true;
};
