const validar = () =>{
    const rs = document.getElementById('rs').value;
    const sc = document.getElementById('sc').value;
    const pr = document.getElementById('pr').value;
    const opcao = document.getElementsByTagName('option');
    const select = document.getElementById('estados');


    console.log(opcao)

    // switch (select){
    //     case rs:
    //         alert('Bem vindos ao RS');
    //         break;
    //     case sc:
    //         alert('Bem vindos a SC');
    //         break;
    //     default:
    //         alert('Bem vindos ao PR');
    // }

    return false
}
