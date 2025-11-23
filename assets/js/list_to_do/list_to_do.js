const lista = document.querySelector(".lista");
const input = document.querySelector(".input-text");
const btn = document.querySelector(".btn");

 const usuario = localStorage.getItem("usuarioActual");
 if (!usuario) {
    alert("Tenés que iniciar sesión para ver tu lista.");
    window.location.href = "login.html";
}

 let tareas = JSON.parse(localStorage.getItem("tareas_" + usuario)) || [];

 if (tareas.length === 0) 
    { 
        mostrarVacio();
    } 
    else 
    { 
        for (let i = 0; i < tareas.length; i++) 
            { 
                mostrarTarea(tareas[i]);  
            } 
    }

btn.addEventListener("click", () => {
    const texto = input.value.trim();
    if (!texto) return;

    borrarVacio();
    tareas.push(texto);
    guardarTareas();
    mostrarTarea(texto);
    input.value = "";
});

function mostrarTarea(texto) {
    const li = document.createElement("li");
    li.innerText = texto;

    const boton = document.createElement("button");
    boton.innerText = "eliminar";
    boton.className = "btn";

    boton.addEventListener("click", () => {
        lista.removeChild(li);
        tareas = tareas.filter(t => t !== texto);
        guardarTareas();
        if (tareas.length === 0) mostrarVacio();
    });

    li.appendChild(boton);
    lista.appendChild(li);
}

function mostrarVacio() {
    const li = document.createElement("li");
    li.innerText = "No tenés pendientes";
    li.classList.add("vacio");
    lista.appendChild(li);
}

function borrarVacio() {
    const vacio = document.querySelector(".vacio");
    if (vacio) vacio.remove();
}

function guardarTareas() {
    localStorage.setItem("tareas_" + usuario, JSON.stringify(tareas));
}
