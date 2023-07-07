const form = $('#form')
const btn = $('#btn')
let cpf = $('#cpf')
const span = $('#span')

cpf.focus(function() {span.fadeIn()})
cpf.focusout(function() {span.fadeOut()})

const validar = () => {
    const nome = $('#nome');
    const cpf = $('#cpf');
    const login = $('#login');
    const senha = $('#senha');

    if (nome.val().length <= 3) {
        alert('Você precisa digitar pelo menos três caracteres');
        nome.val('');
        nome.parent().addClass('error');
        return false;
    } else if (nome.parent().hasClass('error')) {
        nome.parent().removeClass('error');
        return false;
    }

    if (typeof cpf.val() !== 'number' && cpf.val().length !== 11) {
        alert('Você precisa digitar onze caracteres');
        cpf.val('');
        cpf.parent().addClass('error');
        return false;
    } else if (cpf.parent().hasClass('error')) {
        cpf.parent().removeClass('error');
        return false;
    }

    if (login.val().length <= 3) {
        alert('Você precisa digitar pelo menos três caracteres');
        login.val('');
        login.parent().addClass('error');
        return false;
    } else if (login.parent().hasClass('error')) {
        login.parent().removeClass('error');
        return false;
    }

    if (senha.val().length <= 8) {
        alert('Você precisa digitar pelo menos oito caracteres');
        senha.val('');
        senha.parent().addClass('error');
        return false;
    } else if (senha.parent().hasClass('error')) {
        senha.parent().removeClass('error');
        return false;
    }

    return true;
}
