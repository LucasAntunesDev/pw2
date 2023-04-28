function $(id) {
    return document.getElementById(id);
  }
  
  let codigoCandidatoSelecionado;
  let nomeCandidatoSelecionado;
  let partidoCandidatoSelecionado;
  let fotoCandidatoSelecionado;
  
  let codigoCandidato1 = 10
  let codigoCandidato2 = 06
  let codigoCandidato3 = 79
  
  let nomeCandidato1 = "D'Alessandro"
  let nomeCandidato2 = "Fernandão"
  let nomeCandidato3 = "Falcão"
  
  let nomePartidoCandidato1 = "Libertadores"
  let nomePartidoCandidato2 = "Mundial"
  let nomePartidoCandidato3 = "Brasileirão"
  
  let fotoCandidato1 = "assets/Dale.png";
  let fotoCandidato2 = "assets/Fernandao.png"
  let fotoCandidato3 = "assets/Falcao.png"
  
  let candidatoExiste = false;
  let fim = $("fim")
  
  function inserir(valor) {
    let num1 = $("num1").value
    let num2 = $("num2").value
  
    if (num1 == "") {
      $("num1").value = valor;
      $("num1").style.border = "solid 2px gray"
    } else if (num2 == "" || num1 != "") {
      $("num2").value = valor
      $("num1").style.border = "solid 1px black"
      $("num2").style.border = "solid 2px gray"
    }
  
    var valor1 = parseInt($("num1").value);
    var valor2 = parseInt($("num2").value);
    let candidato = (valor1 * 10) + valor2;
  
    switch (candidato) {
      case codigoCandidato1:
        $('foto').src = fotoCandidato1
        $('foto').style.visibility = 'visible'
        $('nomeCandidato').innerHTML = nomeCandidato1
        $('partido').innerHTML = nomePartidoCandidato1
        candidatoExiste = true;
  
        break;
  
      case codigoCandidato2:
        $('foto').src = fotoCandidato2
        $('foto').style.visibility = "visible"
        $('nomeCandidato').innerHTML = nomeCandidato2
        $('partido').innerHTML = nomePartidoCandidato2
        candidatoExiste = true;
        break;
  
  
      case codigoCandidato3:
        $('foto').src = fotoCandidato3
        $('foto').style.visibility = "visible"
        $('nomeCandidato').innerHTML = nomeCandidato3
        $('partido').innerHTML = nomePartidoCandidato3
        candidatoExiste = true;
        break;
  
      default:
        codigoCandidatoSelecionado = undefined
        nomeCandidatoSelecionado = undefined
        partidoCandidatoSelecionado = undefined
        candidatoExiste = false;
    }
  }
  
  function corrige() {
    $("num1").value = ""
    $("num2").value = ""
    $("foto").src = ""
    $("nomeCandidato").innerHTML = ""
    $("partido").innerHTML = ""
    $('foto').style.visibility = 'hidden'
    $('imgCandidato').style.visibility = 'hidden'
  }
  
  function votar() {
    let votoConfirmado = $('esquerda')
    if (candidatoExiste === true) {
      $('infosCandidato').style.display = "none"
      fim.style.display = "flex"
      $('foto').style.display = 'none'
    }
    // setInterval(function () {location.reload()},1000)
  }
  function votoBranco() {
    if (fim.style.display = "none") {
      $('infosCandidato').style.display = "none"
      fim.style.display = "flex"
      $('foto').style.display = 'none'
    }
    // setInterval(function () {location.reload()},1000)
  }
