//Não usei jQuery em alguns trechos porque com ele não funcionava, apenas
//com JS vanilla
const mudarNome = () =>{
    document.getElementById('nomeLabel').innerHTML = 'aa'
}

$('#nome').focus(function() {
    if($('#nome').val().length > 2){
        document.getElementById('nomeLabel').innerHTML = document.getElementById('nome').value
    }else{
        // document.getElementById('nomeLabel').innerHTML = ''
    }
})
$('#nome').focusout(function() {
    if($('#nome').val().length > 2){
        document.getElementById('nomeLabel').innerHTML = 'Nome'
    }
})
