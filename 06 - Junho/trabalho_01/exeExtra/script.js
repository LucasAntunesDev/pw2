const btn = $('#btn');

const validar = () => {
    const nome = $('#nome');
    const cpf = $('#cpf');
    const login = $('#login');
    const senha = $('#senha');

    const erros = [];

    if (nome.val().length <= 3) {
        erros.push('Você precisa digitar pelo menos três caracteres no nome');
    }

    if (typeof cpf.val() !== 'number' && cpf.val().length !== 11) {
        erros.push('Você precisa digitar onze caracteres no cpf');
    }

    if (login.val().length <= 3) {
        erros.push('Você precisa digitar pelo menos três caracteres no login');
    }

    if (senha.val().length <= 8) {
        erros.push('Você precisa digitar pelo menos oito caracteres na senha');
    }

    const ul = $('#lista');
    erros.forEach(texto => {
        const li = $('<li></li>').html(texto);
        ul.append(li);
    });

    return false;
}
