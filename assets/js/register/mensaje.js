const form = document.querySelector("form");
const mensaje = document.getElementById("mensaje");

form.addEventListener("submit", async e => {
    e.preventDefault();

    try {
        const res = await fetch("../register.php", { 
            method: "POST",
            body: new FormData(form)
        });

        const data = await res.json();  
        mensaje.innerHTML = data.success
            ? `<div class="mensaje-exito">${data.message}</div>`
            : `<div class="mensaje-error">${data.message}</div>`;

            if(data.success) {
                form.reset();
                setTimeout(() => {
                    window.location.href = "../views/login.php";
                }, 1500);
            }

    } catch(err) {
        mensaje.innerHTML = `<div class="mensaje-error">Error al procesar el formulario.</div>`;
        console.error(err);
    }

    setTimeout(() => mensaje.innerHTML = "", 3000);
    
});
