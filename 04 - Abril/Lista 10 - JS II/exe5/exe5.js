alert("Olá pessoal. Sejam bem-vindos à aula de Programação Web II");

const x = parseInt(prompt("Digite o primeiro número"));

const y = parseInt(prompt("Digite o segundo número"));

const opercao = prompt("Digite a operação que deseja realizar (+, -, * ou /)");

switch (opercao) {
  case "+":
    alert(x + y);
    break;
  case "-":
    alert(x - y);
    break;
  case "*":
    alert(x * y);
    break;
  case "/":
    alert(x / y);
    break;
}
