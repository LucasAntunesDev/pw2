const p1 = $("#porcentagem-1");
p1.css("width", "0rem");

const p2 = $("#porcentagem-2");
p2.css("width", "0rem");

const p3 = $("#porcentagem-3");
p3.css("width", "0rem");

const p4 = $("#porcentagem-4");
p4.css("width", "0rem");

$(document).ready(() => {
  setInterval(function () {
    p1.css("width", "30vw");
    p2.css("width", "25vw");
    p3.css("width", "4vw");
    p4.css("width", "2vw");
  }, 500);
});
