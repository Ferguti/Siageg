(function(){

		// variables de elementos
	var formulario = document.getElementsByName('formulario')[0],
		elementos = formulario.elements,		
		elem = formulario.elements,		 
		cedula = document.getElementById('cedula'),
		submit = document.getElementById('buscar');

	var validarInputs = function(e){
		

			// valida que el campo cedula no este vacio
		if(cedula.value == 0){
			alert("Debe ingresar la cedula");
			cedula.setAttribute("class", "error");
			cedula.setAttribute("placeholder", "Cédula");
			cedula.value = "";
			cedula.focus();
			e.preventDefault(e);

		}else if(cedula.value < 100000){
			alert("El campo cedula no debe tener espacios en blanco");
			cedula.setAttribute("class", "error");
			cedula.setAttribute("placeholder", "Cédula");
			cedula.value = "";
			cedula.focus();
			e.preventDefault(e);

			// valida si el campo cedula contiene solo numeros
		}else if(isNaN(document.getElementById('cedula').value)){
			alert("En el campo cédula debe ingresar solo números para realizar la consulta, sin caracteres especiales por ej: ( - . ,)");
			cedula.setAttribute("class", "error");
			cedula.setAttribute("placeholder", "Cédula");
			cedula.value = "";
			cedula.focus();
			e.preventDefault(e);

			// valida si el campo cedula tiene 8 numeros
		}else if(cedula.value.length != 8){
			alert("El campo cédula debe tener 8 números");
			cedula.setAttribute("class", "error");
			cedula.setAttribute("placeholder", "Cédula");
			cedula.value = "";
			cedula.focus();
			e.preventDefault(e);
		}

	};

	

	var comprobarInputs = function(){
			cedula.className = "";
	};
	
		//funcion main
	var validar = function(e){
		validarInputs(e);		
	};

	// eventos
	document.getElementById('cedula').focus();
	formulario.addEventListener("submit", validar);	
	cedula.addEventListener("click", comprobarInputs);
	cedula.addEventListener("keypress", comprobarInputs);
}())