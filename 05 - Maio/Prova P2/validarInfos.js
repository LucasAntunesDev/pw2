// const nome = $('#nome');
const nome = document.getElementById("nome");
const rg = document.getElementById('rg');
const cpf = document.getElementById('cpf');

const tel = document.getElementById('tel');
const email = document.getElementById('email');

// nome.css('background', 'red')

const validar = () => {
  if (nome.value.length == "" || nome.value == null) {
    nome.style.background = 'crimson';
    alert(`O campo ${nome} está vazio!`);
    nome.focus();
    return false;
  }
  if (rg.value.length == "" || rg.value == null) {
    // nome.css("background-color", "crimson");
    alert(`O campo ${rg.value} está vazio!`);
    rg.focus();
    return false;
  }
  if (cpf.value.length == "" || cpf.value == null) {
    // nome.css("background-color", "crimson");
    alert(`O campo cpf está vazio!`);
    cpf.focus();
    return false;
  }
  if (tel.value.length == "" || tel.value == null) {
    // nome.css("background-color", "crimson");
    alert(`O campo tel está vazio!`);
    tel.focus();
    return false;
  }
  if (email.value.length == "" || email.value == null) {
    // nome.css("background-color", "crimson");
    alert(`O campo email está vazio!`);
    email.focus();
    return false;
  }
  return false;
};
