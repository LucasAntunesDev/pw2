const input = $('#idade')
const p = $('#p')
let idade = parseInt(input.val())

// console.log(typeof input.val())

input.change(function(){
    console.log(typeof idade)
    // if(idade > 18) p.hide()
    // else if (idade <=) p.show()
    idade > 18 ? p.hide() : p.show()
})