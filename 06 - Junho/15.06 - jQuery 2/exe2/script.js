const input = $('#idade')
const p = $('#p')

input.change(function(){
    const idade = parseInt(input.val())
    idade >= 18 ? p.hide() : p.show()
})