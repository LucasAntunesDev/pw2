const btn = $("#btn");
btn.click(function() {
    btn.hasClass("active") ? btn.removeClass("active") : btn.addClass("active");
})
