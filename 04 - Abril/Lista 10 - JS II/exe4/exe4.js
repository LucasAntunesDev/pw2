const validar = () => {
  const machado = document.getElementById('machado');
  const alencar = document.getElementById('jose-de-alencar');
  const pessoa = document.getElementById('fernando-pessoa');
  const camoes = document.getElementById('camoes');
  const eco = document.getElementById('eco');
  const select = document.getElementById('escritores').value;
  const nome = document.getElementById('nome');
  const nasc = document.getElementById('nasc');
  const obra = document.getElementById('obra');

  switch (select) {
    case machado.value:
      nome.innerHTML = `<h1>${machado.innerHTML}</h1>`;
      nasc.innerHTML = '<h3>Data de nascimento: 1839</h3>'
      obra.innerHTML = '<h3>Principal  obra: Dom Casmurro</h3>'
      break;
    case alencar.value:
      nome.innerHTML = `<h1>${alencar.innerHTML}</h1>`;
      nasc.innerHTML = '<h3>Data de nascimento: 1829</h3>'
      obra.innerHTML = '<h3>Principal  obra: Iracema</h3>'
      break;
    case pessoa.value:
      nome.innerHTML = `<h1>${pessoa.innerHTML}</h1>`;
      nasc.innerHTML = '<h3>Data de nascimento: 1888</h3>'
      obra.innerHTML = '<h3>Principal  obra: Mensagem</h3>'
      break;
    case camoes.value:
      nome.innerHTML = `<h1>${camoes.innerHTML}</h1>`
      nasc.innerHTML = '<h3>Data de nascimento: 1580</h3>'
      obra.innerHTML = '<h3>Principal  obra: Os Lusíadas</h3>'
      break;
    case eco.value:
      nome.innerHTML = `<h1>${eco.innerHTML}</h1>`;
      nasc.innerHTML = '<h3>Data de nascimento: 1932</h3>'
      obra.innerHTML = '<h3>Principal  obra: O Nome da Rosa</h3>'
      break;
  }

  return false;
}