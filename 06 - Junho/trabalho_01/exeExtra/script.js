const btn = $('#btn');

const validar = () => {
    const nome = $('#nome');
    const cpf = $('#cpf');
    const login = $('#login');
    const senha = $('#senha');

    if (nome.val().length <= 3) {
        $("#erro1").removeClass('hide')
        $("#erro1").addClass('show')
    }else{
        $("#erro1").removeClass('show')
        $("#erro1").addClass('hide')
    }

    if (typeof cpf.val() !== 'number' && cpf.val().length !== 11) {
        $("#erro2").removeClass('hide')
        $("#erro2").addClass('show')
    }else{
        $("#erro2").removeClass('show')
        $("#erro2").addClass('hide')
    }

    if (login.val().length <= 3) {
        $("#erro3").removeClass('hide')
        $("#erro3").addClass('show')
    }else{
        $("#erro3").removeClass('show')
        $("#erro3").addClass('hide')
    }

    if (senha.val().length <= 8) {
        $("#erro4").removeClass('hide')
        $("#erro4").addClass('show')
    }else{
        $("#erro4").removeClass('show')
        $("#erro4").addClass('hide')
    }

    $('#textoErros').css('display', 'block')

    return false;
}
