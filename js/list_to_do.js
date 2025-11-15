const lista = document.querySelector(".lista");
const input = document.querySelector(".input-text");
const btn = document.querySelector(".btn");

 let tareas = JSON.parse(localStorage.getItem("tareas")) || [];

 if (tareas.length === 0) {
  mostrarVacio();
} 
else {
  for (let i = 0; i < tareas.length; i++) {
      mostrarTarea(tareas[i]);
  }
}

btn.addEventListener("click", () => {
    let texto = input.value;

    if (texto === "") return;

    borrarVacio();

    tareas.push(texto);
    guardarTareas();
    mostrarTarea(texto);

    input.value = "";
});



function mostrarTarea(texto) {
    let li = document.createElement("li");
    li.innerText = texto;

    let boton = document.createElement("button");
    boton.innerText = "eliminar";
    boton.className = "btn"

    boton.addEventListener("click", () => {
        lista.removeChild(li);

        let i = tareas.indexOf(texto);
        tareas.splice(i, 1);
        
        guardarTareas();
    });

    li.appendChild(boton);
    lista.appendChild(li);
}

function mostrarVacio() {
  let li = document.createElement("li");
  li.innerText = "No tenes pendientes";
  li.classList.add("vacio");
  lista.appendChild(li);
}

function borrarVacio() {
  let vacio = document.querySelector(".vacio");
  if (vacio) vacio.remove();
  
 }

function guardarTareas() {
    localStorage.setItem("tareas", JSON.stringify(tareas));
}
