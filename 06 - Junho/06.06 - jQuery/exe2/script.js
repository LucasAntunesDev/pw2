const validar = () => {
    const nomeInput = $('#nome')
    const nomeLabel = $('#nomeLabel')
    const cpfInput = $('#cpf')
    const cpfLabel = $('#cpfLabel')
    const senhaInput = $('#senha')
    const senhaLabel = $('#senhaLabel')

    if (nomeInput.val().length < 3) {
        alert('Você precisa digitar no mínimo 3 caracteres')
        nomeInput.addClass('erro')
        nomeInput.focus()
        nomeLabel.addClass('erro')
        return false;
    } else if (nomeInput.hasClass('erro')) {
        nomeInput.removeClass('erro')
        nomeLabel.removeClass('erro')
    }
    if (cpfInput.val().length < 11 && typeof cpfInput != 'string') {
        if (cpfInput.val().length < 11)
        alert('Você precisa digitar no mínimo 11 caracteres e apenas números')
        cpfInput.focus()
        cpfInput.addClass('erro')
        $('#cpfLabel').addClass('erro')
        return false;
    } else if (cpfInput.hasClass('erro')) {
        cpfInput.removeClass('erro')
        cpfLabel.removeClass('erro')
    }
    if (senhaInput.val().length < 6) {
        alert('Você precisa digitar no mínimo 6 caracteres')
        senhaInput.addClass('erro')
        senhaInput.focus()
        senhaLabel.addClass('erro')
        return false;
    } else if (senhaInput.hasClass('erro')) {
        senhaInput.removeClass('erro')
        nomeLabel.removeClass('erro')
    }
}