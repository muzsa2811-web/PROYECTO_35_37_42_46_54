function validafor() {
      let name = document.getElementById('Nom');
      let tel = document.getElementById('tel');
      let correo = document.getElementById('mail');
      let ed = document.getElementById('age');
      let coment = document.getElementById('coment');

      if (name.value === "") {
        alert("Falta ingresar el nombre");
        name.focus();
        return false;
      }
      let expnom = /^[A-Za-z\s]+$/;
      if (!expnom.test(name.value)) {
        alert("El nombre solo puede contener letras y espacios en blanco");
        name.value = "";
        name.focus();
        return false;
      }
      if (name.value.length < 5 || name.value.length > 40) {
        alert("La longitud del nombre debe ser entre 5 y 40 caracteres");
        name.focus();
        return false;
      }

      let generoSeleccionado = document.querySelector('input[name="genero"]:checked');
      if (!generoSeleccionado) {
        alert("Falta seleccionar el género");
        return false;
      }

    
      if (tel.value === "") {
        alert("Falta ingresar el teléfono");
        tel.focus();
        return false;
      }
      let exptel = /^\d{10}$/;
      if (!exptel.test(tel.value)) {
        alert("El teléfono debe tener exactamente 10 dígitos numéricos");
        tel.value = "";
        tel.focus();
        return false;
      }

     
      if (correo.value === "") {
        alert("Falta ingresar el correo");
        correo.focus();
        return false;
      }
      let exprc = /^\w+@\w+\.+[a-z]{2,4}$/;
      if (!exprc.test(correo.value)) {
        alert("Correo inválido, revisa el formato");
        correo.value = "";
        correo.focus();
        return false;
      }

     
      if (ed.value === "") {
        alert("Falta ingresar la edad");
        ed.focus();
        return false;
      }
      let expre = /^\d+$/;
      if (!expre.test(ed.value)) {
        alert("La edad debe ser numérica");
        ed.value = "";
        ed.focus();
        return false;
      }
      if (ed.value < 18 || ed.value > 99) {
        alert("La edad debe estar entre 18 y 99 años");
        ed.focus();
        return false;
      }

    
      if (coment.value === "") {
        let conf = confirm("No escribiste comentario, ¿deseas continuar?");
        if (!conf) {
          coment.focus();
          return false;
        }
      }

      alert(
        "Nombre: " + name.value + "\n" +
        "Género: " + generoSeleccionado.value + "\n" +
        "Teléfono: " + tel.value + "\n" +
        "Correo: " + correo.value + "\n" +
        "Edad: " + ed.value + "\n" +
        "Comentario: " + coment.value + "\n\n" +
        "Mensaje enviado con éxito ✅"
      );
    
    }