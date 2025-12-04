function confirmar(e){
	if (confirm("¿estas seguro de eliminar el registro?")) {
		return true;

	} else{
		e.preventDefault();

	}
}

let linkDelete = document.querySelectorAll("eliminar");
for (var i = 0; i < linkDelete.length; i++){
	linkDelete[i].addEventListener('click', confirmar);
}