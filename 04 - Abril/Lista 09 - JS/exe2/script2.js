const validar = () => {
 const nome = document.getElementById('nome');
 const idade = document.getElementById('idade');

 nome.style.background = 'white';
 idade.style.background = 'white';

 if (nome.value.length === 0) {
  nome.style.background = 'crimson';
  alert('O campo nome está vazio!');
  nome.focus();
  return false;
 }
 else if (idade.value.length === 0) {
  idade.style.background = 'crimson';
  alert('O campo idade está vazio!');
  idade.focus();
  return false;
 }
 else if (nome.value.length < 4) {
  nome.style.background = 'crimson';
  alert('O nome não está completo!');
  nome.focus();
  return false;
 }
 else if (idade.value > 18 || idade.value < 0) {
  idade.style.background = 'crimson';
  alert('Você é maior de 18 anos!');
  idade.focus();
  return false;
 }

 return true;
};
