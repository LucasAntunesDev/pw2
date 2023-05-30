let salarios = 0

for(let i=1; i<=5; i++){
    salarios += parseFloat(prompt(`Entre com o salário ${i}:`))
}

alert(`A empresa gasta R$${salarios} em salários`)