const btn = $("#btn");
btn.click(function() {
    btn.hasClass("ativo") ? btn.removeClass("ativo") : btn.addClass("ativo");
})
