// const validar = () => {
    const nomeInput = $('#nome')
    let nome = nomeInput.val()
    const nomeLabel = $('#nomeLabel')

    // if(nomeInput.val().length >= 3) {
        console.log(nomeLabel.innerHTML)
        nomeInput.focus(function () {
            nomeLabel.HTML()  = nomeInput.val()
            // alert('oi')
        })
    // }

    // nomeLabel.innerHTML = ''
    // return false
// }