funcao = () => {
    let distancia = parseInt(prompt('Entre com a distância:'))
    let tempo = parseInt(prompt('Entre com o tempo:'))

    let velMedia = distancia / tempo

    alert(`A distância foi de ${velMedia}m/s`)
}