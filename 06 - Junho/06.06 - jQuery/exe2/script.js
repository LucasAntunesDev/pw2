const validar = () =>{
    const nomeInput =  $('#nome')
    const cpfInput =  $('#cpf')
    const senhaInput =  $('#senha')

    if(nomeInput.val().length < 3) {
        alert ('Você precisa digitar no mínimo 3 caracteres')
        return false;
    }
    if(cpfInput.val().length < 11 && typeof cpfInput != 'string') {
        if(cpfInput.val().length < 11) alert ('Você precisa digitar no mínimo 11 caracteres e apenas números')
        cpfInput.focus()
        cpfInput.addClass('erro')
        return false;
    }
    if(senhaInput.val().length < 6) {
        alert ('Você precisa digitar no mínimo 6 caracteres')
        return false;
    }
}