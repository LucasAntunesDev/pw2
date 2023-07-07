funcao = () => {
  let nota1 = parseInt(prompt("Entre com a nota 1:"));
  let nota2 = parseInt(prompt("Entre com a nota 2:"));
  let nota3 = parseInt(prompt("Entre com a nota 3:"));

  let media = (nota1 + nota2 + nota3) / 3;
  let notaExame = (5 - 0.6 * media) / 0.4;
  console.log(media);
  console.log(notaExame);

  media >= 7
    ? alert(`Sua média foi ${media}`)
    : alert(`Sua média foi ${media}. Você precisa tirar ${notaExame} no exame`);
};
