let form = document.getElementById("form");

form.addEventListener("submit", function (event) {
    let data = document.getElementById("data_retirada").value
    let dataObjeto = new Date(data)
    let dataAtual = new Date()

    if (dataObjeto.toLocaleDateString("pt-Br", { timeZone: 'Europe/London' }) < dataAtual.toLocaleDateString("pt-Br", { timeZone: 'Europe/London' })) {
        event.preventDefault();
        Swal.fire({
            icon: "warning",
            title: "A data deve ser igual ou posterior à data atual",
            confirmButtonColor: "#059669",
        });
    } else {
        event.preventDefault();
        Swal.fire({
            icon: "success",
            title: "Retirada salva",
            confirmButtonColor: "#059669",
        });
    }
});