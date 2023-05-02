function $(id) {
    return document.getElementById(id);
  }
  
  let codigoCandidatoSelecionado;
  let nomeCandidatoSelecionado;
  let partidoCandidatoSelecionado;
  let fotoCandidatoSelecionado;
  
  let codigoCandidato1 = 1
  let codigoCandidato2 = 2
  let codigoCandidato3 = 3
  let codigoCandidato4 = 4
  
  let nomeCandidato1 = "John Lennon"
  let nomeCandidato2 = "Paul McCartney"
  let nomeCandidato3 = "George Harrinson"
  let nomeCandidato4 = "Ringo Starr"
  
  let nomePartidoCandidato1 = "Partido do Vocal"
  let nomePartidoCandidato2 = "Partido do Baixo"
  let nomePartidoCandidato3 = "Partido da Guitarra"
  let nomePartidoCandidato4 = "Partido da Bateria"
  
  let fotoCandidato1 = "https://i.scdn.co/image/ab6761610000e5eb207c6849d1a1f4480e6aa222";
  let fotoCandidato2 = "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Paul_McCartney_Headshot_%28cropped%29.jpg/170px-Paul_McCartney_Headshot_%28cropped%29.jpg"
  let fotoCandidato3 = "https://upload.wikimedia.org/wikipedia/commons/4/4e/George_Harrison_1974_colorized.jpg"
  let fotoCandidato4 = "https://media.gq-magazine.co.uk/photos/5f03235bfcb5fd13a37e5c1d/1:1/w_1080,h_1080,c_limit/20200706-ringo-10.jpg"
  
  let candidatoExiste = false;
  let fim = $("fim")
  
  function inserir(valor) {
    let num1 = $("num1").value
  
    if (num1 == "") {
      $("num1").value = valor;
      $("num1").style.border = "solid 2px gray"
    }
  
    var valor1 = parseInt($("num1").value);
    let candidato = valor1;
  
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
  
      case codigoCandidato4:
        $('foto').src = fotoCandidato4
        $('foto').style.visibility = "visible"
        $('nomeCandidato').innerHTML = nomeCandidato4
        $('partido').innerHTML = nomePartidoCandidato4
        candidatoExiste = true;
        break;
  
      default:
        codigoCandidatoSelecionado = undefined
        nomeCandidatoSelecionado = undefined
        partidoCandidatoSelecionado = undefined
        candidatoExiste = false;
        alert('Esse candidato não existe!')
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
      setInterval(function () {window.location.href = 'parciais.html'},1000)
    }else{
      setInterval(function () {location.reload()},1000)
    }
    // window.location.href
    // window.location.href = 'parciais.html'
    // document.write('<?php $nome = file_get_contents("nome.json"); echo "$nome"')
  }
  function votoBranco() {
    if (fim.style.display = "none") {
      $('infosCandidato').style.display = "none"
      fim.style.display = "flex"
      $('foto').style.display = 'none'
    }
    setInterval(function () {location.reload()},1000)
  }
