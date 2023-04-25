const boasVindas = () => {
  document.getElementById('oi').innerHTML = ("Olá pessoal. Sejam bem-vindos à aula de Programação Web II");
}

const calcular = () => {
  const x = parseInt(prompt("Digite o primeiro número","10"));
  const y = parseInt(prompt("Digite o segundo número", "10"));
  const resultado = document.getElementById('resultado')
  const opercao = prompt("Digite a operação que deseja realizar (+, -, * ou /)");
  let result = ' ';

  switch (opercao) {
    case "+":
      result =x + y;
      break;
    case "-":
      result =x - y;
      break;
    case "*":
      result =x * y;
      break;
    case "/":
      result = x / y;
      break;
    default:
      result = 'Essa operação é inválida!';
  }
  resultado.innerHTML = result;
}