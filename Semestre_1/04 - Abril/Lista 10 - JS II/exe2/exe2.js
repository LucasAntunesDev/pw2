const input = document.getElementById('input')

const nome = prompt('Entre com o seu nome:')
const idade = prompt('Entre com a sua idade:')


if (idade >= 18){
  input.style.display = 'block';
  input.style.background = 'rgb(19, 129, 65)';
  input.value = nome
}else{
  input.style.display = 'block';
  input.style.background = 'crimson';
  input.value = nome
  
}