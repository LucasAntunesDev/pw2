const btn = document.querySelector("#btn");
const btn2 = document.querySelector("#btn2");
const titulo = document.querySelector("h1");
const conteudo = document.querySelector(".conteudo");
const html = document.querySelector("html");

btn.addEventListener("click", () => {
  titulo.classList.add("titulo");
  titulo.innerHTML = "Hello World!";
  alert(html.getAttribute("lang"));
});

btn2.addEventListener("click", () => {
  titulo.classList.remove("titulo");

  const p = document.createElement("p");
  p.innerHTML = "Lucas";
  conteudo.appendChild(p);
});

btn2.addEventListener("mouseover", () => {
  btn2.classList.add("text-sky-500");
});