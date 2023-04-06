const validar = () =>{
    const curso = document.getElementById('curso');
    let texto = curso.value;
    texto = texto.toUpperCase();
    curso.value = texto;
    curso.style.background = 'blue';
    curso.style.color = 'white';

    return false
}
