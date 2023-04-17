const input = document.getElementById('input')

const nome = prompt('Entre com o seu nome:')
const idade = prompt('Entre com a sua idade:')


if (idade >= 18){
  input.style.display = 'block';
  input.style.background = 'rgb(0 45 12)';
  input.value = nome
}else{
  input.style.display = 'block';
  input.style.background = 'red';
  input.value = nome
  
}