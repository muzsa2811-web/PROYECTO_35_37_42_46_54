function validar() {
    const username = document.getElementById('username');
    const clave    = document.getElementById('clave');
    const clave2   = document.getElementById('clave2');
    const correo   = document.getElementById('correo');

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
    if (username && username.value.trim() === "") {
        alert("El campo usuario no puede estar vacío");
        username.focus();
        return false;
    }

    if (clave && clave.value.trim() === "") {
        alert("El campo contraseña no puede estar vacío");
        clave.focus();
        return false;
    }

    if (clave2) {
        if (clave2.value.trim() === "") {
            alert("Debes confirmar la contraseña");
            clave2.focus();
            return false;
        }
        if (clave.value !== clave2.value) {
            alert("Las contraseñas no coinciden");
            clave.focus();
            return false;
        }
    }
    if (correo) {
        if (correo.value.trim() === "") {
            alert("El campo correo no puede estar vacío");
            correo.focus();
            return false;
        }
        if (!emailRegex.test(correo.value.trim())) {
            alert("El correo no es válido");
            correo.focus();
            return false;
        }
    }
    return true;
}
