/*
  hacer lista to do en js
 */


const boton = document.getElementById("btn");
const lista = document.getElementById("lista");

function agregarElemento(boton,lista){  
boton.addEventListener("click", function() {

     const nuevoLi = document.createElement("li");
    nuevoLi.innerHTML = "Nuevo Elemento";

    lista.appendChild(nuevoLi);

    alert("Se ha añadido un nuevo elemento");
   });
}
agregarElemento(boton,lista);