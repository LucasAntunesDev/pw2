//Coloca o nome de cada candidato via DOM
const nome1 = $("#candidato1");
nome1.html("John Lennon");
const nome2 = $("#candidato2");
nome2.html("Paul McCartney");
const nome3 = $("#candidato3");
nome3.html("George Harrinson");
const nome4 = $("#candidato4");
nome4.html("Ringo Starr");

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
numero1.html("Número: 1");
const numero2 = $("#numero2");
numero2.html("Número:  2");
const numero3 = $("#numero3");
numero3.html("Número: 3");
const numero4 = $("#numero4");
numero4.html("Número: 4");

//Coloca a foto de cada candidato via DOM
const foto1 = $("#foto1");
foto1.attr("src", "https://i.scdn.co/image/ab6761610000e5eb207c6849d1a1f4480e6aa222");
const foto2 = $("#foto2");
foto2.attr("src", "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Paul_McCartney_Headshot_%28cropped%29.jpg/170px-Paul_McCartney_Headshot_%28cropped%29.jpg");
const foto3 = $("#foto3");
foto3.attr("src", "https://upload.wikimedia.org/wikipedia/commons/4/4e/George_Harrison_1974_colorized.jpg");
const foto4 = $("#foto4");
foto4.attr("src", "https://media.gq-magazine.co.uk/photos/5f03235bfcb5fd13a37e5c1d/1:1/w_1080,h_1080,c_limit/20200706-ringo-10.jpg");

const info = $(".mais-infos");
info.click(function(){
    $("#info1").css("display", "block")
})
