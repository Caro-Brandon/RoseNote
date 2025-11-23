const form = document.querySelector("form");
const mensaje = document.getElementById("mensaje");

form.addEventListener("submit", e => {
    e.preventDefault();

    fetch("../login.php", {
        method: "POST",
        body: new FormData(form)
    })
    .then(res => res.json())
    .then(data => {

        mensaje.innerHTML = `<div class="${data.success ? "mensaje-exito" : "mensaje-error"}">
            ${data.message}
        </div>`;

        if (data.success) {
            setTimeout(() => {
                window.location.href = "../index.php";
            }, 1500);
        }

        setTimeout(() => mensaje.innerHTML = "", 3000);
    })
    .catch(() => {
        mensaje.innerHTML = `<div class="mensaje-error">Hubo un problema, intenta de nuevo.</div>`;
        setTimeout(() => mensaje.innerHTML = "", 3000);
    });
});
