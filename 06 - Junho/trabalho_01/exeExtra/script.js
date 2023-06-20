const btn = document.getElementById('btn')

const validar = () => {
    const nome = document.getElementById('nome')
    const cpf = document.getElementById('cpf')
    const login = document.getElementById('login')
    const senha = document.getElementById('senha')

    const erros = []

    if (nome.value.length <= 3) {
        erros.push('Você precisa digitar pelo menos três caracteres no nome')
    }

    if (typeof cpf !== 'number' && cpf.value.length !== 11) {
        erros.push('Você precisa digitar onze caracteres no cpf')
    }

    if (login.value.length <= 3) {
        erros.push('Você precisa digitar pelo menos três caracteres no login')
    }

    if (senha.value.length <= 8) {
        erros.push('Você precisa digitar pelo menos oito caracteres na senha')
    }
    
    erros.forEach(texto => {
        const ul = document.getElementById('lista')
        const li = document.createElement('li')
        li.innerHTML = texto
        ul.appendChild(li)
    });
    return false
}
