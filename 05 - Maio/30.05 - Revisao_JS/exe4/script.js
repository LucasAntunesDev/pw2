funcao = () => {
    var parar = false
    while (parar == false) {
        let num = parseInt(prompt('Entre com o número:'))

        num % 2 == 0 ? alert(`O número ${num} é par`) : alert(`O número ${num} é ímpar`)

        let verificaParar = confirm('Você deseja digitar mais algum número?')
        verificaParar ? '' : parar = true
    }
}

