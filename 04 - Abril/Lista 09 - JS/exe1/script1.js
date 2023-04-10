const validarIdade = (b) => {
  const idade = prompt("Digite a sua idade: ");
  if (Number(idade)) {
    idade >= 18
      ? document.write("Voccê é maior de idade")
      : document.write("Voccê é menor de idade");
  }else document.write("Você não digitou um número!")
};
