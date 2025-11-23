document.addEventListener("DOMContentLoaded", () => {
    const btnEnviar = document.getElementById("enviar");
    const textarea = document.querySelector(".hojaParaEscribir textarea");

    btnEnviar.addEventListener("click", function(e) {
        
        e.preventDefault(); 

        const texto = textarea.value.trim();
        if (!texto) {
            alert("Escribí algo antes de enviar.");
            return;
        }

        const usuario = localStorage.getItem("usuarioActual");
        if (!usuario) {
            alert("Tenés que iniciar sesión para guardar notas.");
            return;
        }

        let notas = JSON.parse(localStorage.getItem("notas_" + usuario)) || [];
        notas.push(texto);
        localStorage.setItem("notas_" + usuario, JSON.stringify(notas));

        alert("Guardado");  
        textarea.value = ""; 
    });
});
