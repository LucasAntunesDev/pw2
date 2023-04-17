const validar = ()=>{
  const nome = document.getElementById('nome');
  const email = document.getElementById('email');
  const senha = document.getElementById('senha');
  const senhaConfirmar = document.getElementById('senha-confirm');

  if(nome.value.length === 0 || nome.value == null){
    nome.style.background = "crimson";
    alert("O campo nome está vazio!");
    nome.focus();
    return false;
  }
  if(email.value.length === 0 || email.value == null){
    email.style.background = "crimson";
    alert("O campo email está vazio!");
    email.focus;
    return false;
  }
  if(senha.value.length === 0 || senha.value == null){
    senha.style.background = "crimson";
    alert("O campo senha está vazio!");
    senha.focus;
    return false;
  }
  if(senhaConfirmar.value.length === 0 || senhaConfirmar.value == null){
    senhaConfirmar.style.background = "crimson";
    alert("O campo confirmar senha está vazio!");
    senhaConfirmar.focus;
    return false;
  }
  if(senhaConfirmar.value !== senha.value){
    senhaConfirmar.style.background = "crimson";
    alert("As senhas não são iguais!");
    senhaConfirmar.focus;
    return false;
  }
}