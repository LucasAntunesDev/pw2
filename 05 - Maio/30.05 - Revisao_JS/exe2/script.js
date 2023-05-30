let nota1 = parseInt(prompt('Entre com a nota 1:'))
let nota2 = parseInt(prompt('Entre com a nota 2:'))
let nota3 = parseInt(prompt('Entre com a nota 3:'))

let media = Math.round(((nota1+nota2+nota3) / 3),2)
alert(`A média foi de ${media}`)