const form = document.getElementById('form')
const btn = document.getElementById('btn')
let cpf = document.getElementById('cpf')
cpf.addEventListener('focus', () =>{
    setInterval(() => document.querySelector('#span').setAttribute('id', 'show'), 100)
})
const validar = () => {
    const nome = document.getElementById('nome')
    const cpf = document.getElementById('cpf')
    const login = document.getElementById('login')
    const senha = document.getElementById('senha')


    if (nome.value.length <= 3) {
        alert('Você precisa digitar pelo menos três caracteres')
        nome.value = ''
        nome.parentNode.setAttribute('class', 'error')
        return false
    } else if (nome.parentNode.classList.contains('error')) {
        nome.parentNode.removeAttribute('class', 'error')
        return false
    }

    if (typeof cpf !== 'number' && cpf.value.length !== 11) {
        alert('Você precisa digitar onze caracteres')
        cpf.value = ''
        cpf.parentNode.setAttribute('class', 'error')
        return false
    } else if (cpf.parentNode.classList.contains('error')) {
        cpf.parentNode.removeAttribute('class', 'error')
        return false
    }

    if (login.value.length <= 3) {
        alert('Você precisa digitar pelo menos três caracteres')
        login.value = ''
        login.parentNode.setAttribute('class', 'error')
        return false
    } else if (login.parentNode.classList.contains('error')) {
        login.parentNode.removeAttribute('class', 'error')
        return false
    }

    if (senha.value.length <= 8) {
        alert('Você precisa digitar pelo menos oito caracteres')
        senha.value = ''
        senha.parentNode.setAttribute('class', 'error')
        return false
    } else if (senha.parentNode.classList.contains('error')) {
        senha.parentNode.removeAttribute('class', 'error')
        return false
    }

    return true
}
// form.addEventListener('submit', validar)
// btn.addEventListener('click', validar)