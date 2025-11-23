const notaDiv = document.getElementById("notaActual");
const btnAnterior = document.getElementById("anterior");
const btnSiguiente = document.getElementById("siguiente");
const btnBorrar = document.getElementById("borrar");

const usuario = localStorage.getItem("usuarioActual");
let notas = JSON.parse(localStorage.getItem("notas_" + usuario)) || [];
let indice = 0;

function mostrarNota(i) {
    if (notas.length === 0) {
        notaDiv.innerText = "No tenés notas guardadas.";
        return;
    }
    notaDiv.innerText = notas[i];
}

btnAnterior.addEventListener("click", () => {
    if (indice > 0) {
        indice--;
        mostrarNota(indice);
    }
});

btnSiguiente.addEventListener("click", () => {
    if (indice < notas.length - 1) {
        indice++;
        mostrarNota(indice);
    }
});

 btnBorrar.addEventListener("click", () => {
    if (notas.length === 0) return;
    notas.splice(indice, 1);
    localStorage.setItem("notas_" + usuario, JSON.stringify(notas));
    if (indice >= notas.length) indice = notas.length - 1;
    mostrarNota(indice);
});

 mostrarNota(indice);
