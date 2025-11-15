const botonElem  = document.getElementById('boton-cambiar-cita');
const citaElem = document.getElementById('cita');
const autorElem = document.getElementById('autor');

function generarEnteroAleatorio(minimo, maximo) {
    minimo = Math.ceil(minimo);
    maximo = Math.floor(maximo);
     return Math.floor(Math.random() * (maximo - minimo) + minimo);
  }
  
function cambiarCita() {
    let indiceAleatorio = generarEnteroAleatorio(0, citas.length);
    citaElem.textContent = `"${citas[indiceAleatorio].texto}"`;
    autorElem.textContent = citas[indiceAleatorio].autor;
  }
  

  let indiceAleatorio = generarEnteroAleatorio(0, citas.length);
  cambiarCita();
  
  botonElem.addEventListener('click', cambiarCita);