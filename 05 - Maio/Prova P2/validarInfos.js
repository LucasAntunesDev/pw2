const nome = document.getElementById('nome');
const rg = document.getElementById('rg');
const cpf = document.getElementById('cpf');

const tel = document.getElementById('tel');
const email = document.getElementById('email');

const validar =  () =>{
    if(email.value.lenght == 0 || email.value == null){
        alert(1)
        return false
    }
}