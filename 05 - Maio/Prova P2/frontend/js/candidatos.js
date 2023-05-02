//Coloca o nome de cada candidato via DOM
const nome1 = $("#candidato1");
nome1.html("Lennon");
const nome2 = $("#candidato2");
nome2.html("McCartney");
const nome3 = $("#candidato3");
nome3.html("Harrinson");
const nome4 = $("#candidato4");
nome4.html("Starr");

//Coloca o partido de cada candidato via DOM
const partido1 = $("#partido1");
partido1.html("Partido Vocal (PV)");
const partido2 = $("#partido2");
partido2.html("Partido do Baixo (PB)");
const partido3 = $("#partido3");
partido3.html("Partido da Guitarra (PG)");
const partido4 = $("#partido4");
partido4.html("Partido da Bateria (PDB)");

//Coloca o numero de cada candidato via DOM
const numero1 = $("#numero1");
numero1.html("1");
const numero2 = $("#numero2");
numero2.html("2");
const numero3 = $("#numero3");
numero3.html("3");
const numero4 = $("#numero4");
numero4.html("4");

const info = $(".mais-infos");
info.click(function(){
    // info.toggle(function(){
    $("#info1").css("display", "block")
    // })
})
