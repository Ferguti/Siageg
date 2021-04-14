(function(){

	
	var formulario = document.getElementsByName('formulario')[0],
	    elementos = formulario.elements,	
	    inputNacion = document.getElementById('nacion');	
		inputCedula = document.getElementById('cedula'),
		inputPw = document.getElementById('pw'),
		inputPw2 = document.getElementById('pw2'),	
		inputNombres = document.getElementById('nombres'),
		inputApellidos = document.getElementById('apellidos'),
		inputEmail = document.getElementById('email'),
		inputTelefono = document.getElementById('telefono'),					
		inputUsuario = document.getElementById('usuario'),
		inputCt = document.getElementById('ct'),
		inputTerminos = document.getElementById('terminos');		
		
	
			
		
	


	

	// valida los inputs
		var validarInputs = function(e) {

			//valida que seleccione el tipo de documento
		if(inputNacion.value == "Tipo de documento"){
			alert("Debes seleccionar el tipo de documento");					
			inputNacion.setAttribute("class", "error");						
			document.getElementById('nacion').focus();
			e.preventDefault(e);

			//valida que el campo cedula no este vacio	
		}else if(formulario.cedula.value == 0){
			alert("El campo cédula es obligatorio");
			inputCedula.setAttribute("placeholder", "Cédula");
			inputCedula.setAttribute("class", "error");		
			document.getElementById('cedula').focus();
			e.preventDefault(e);			
	
			// valida que el campo cedula no tenga espacios en blanco
		}else if(inputCedula.value < 10000000){	
			alert("El campo cédula no debe contener espacios en blanco");
			inputCedula.value = "";		
			inputCedula.setAttribute("class", "error");
			inputCedula.setAttribute("palceholder", "Cédula");
			document.getElementById('cedula').focus();
			e.preventDefault(e);

			//valida que el campo cedula solo contenga numeros
		}else if(isNaN(document.getElementById('cedula').value)){
			alert("En el campo cédula debes ingresar números");
			inputCedula.value = "";
			inputCedula.setAttribute("placeholder", "Cédula");
			inputCedula.setAttribute("class", "error");
			document.getElementById('cedula').focus();
			e.preventDefault(e);

			//valida que el campo cedula no sea diferente de 8 digitos
		}else if(document.getElementById('cedula').value.length != 8){	
			alert("El campo cédula debe tener 8 dígitos sin puntos ni otro caracter especial");
			inputCedula.value = "";
			inputCedula.setAttribute("placeholder", "Cédula");
			inputCedula.setAttribute("class", "error");
			document.getElementById('cedula').focus();
			e.preventDefault(e);

			//valida que el campo contraseña no este vació 
		}else if(formulario.pw.value == 0){
			alert("El campo contraseña es obligatorio");
			inputPw.setAttribute("placeholder", "Contraseña");
			inputPw.setAttribute("class", "error");
			inputPw2.value = "";
			document.getElementById('pw').focus();
			e.preventDefault(e);

			//valida que el campo contraseña no sea menor a 6 carácteres y que no sea mayor a 20
		}else if(document.getElementById('pw').value.length < 6 || document.getElementById('pw').value.length > 20 ){
			alert("La contraseña debe contener 6 caracteres como minimo y 20 como máximo, puedes usar caracteres especiales si lo deseas");
			inputPw.value = "";
			inputPw2.value = "";
			inputPw.setAttribute("placeholder", "Contraseña");
			inputPw.setAttribute("class", "error");
			document.getElementById('pw').focus();
			e.preventDefault(e);

						
			//valida que ambas contraseñas sean iguales				
		}else if(inputPw.value != inputPw2.value){
			alert("Las contraseñas no coinciden");
			inputPw2.setAttribute("class", "error");
			inputPw.setAttribute("class", "error");
			inputPw2.setAttribute("palceholder", "Repita la contraseña");
			inputPw.setAttribute("placeholder", "Contraseña");
			inputPw.value = "";
			inputPw2.value = "";
			inputPw.focus();
			e.preventDefault(e);		

			//valida si el campo nombres esta vacio
		}else if(inputNombres.value == 0){
			alert("El campo nombres es obligatorio");
			inputNombres.value = "";
			inputNombres.setAttribute("class", "error");
			inputNombres.setAttribute("placeholder", "Nombres completos")
			document.getElementById('nombres').focus();
			e.preventDefault(e);

			//valida si el campo nombres es mayor a 30 carácteres
		}else if(document.getElementById('nombres').length > 30){
			alert("El campo nombres no debe tener mas de 30 caracteres");
			inputNombres.value = "";
			inputNombres.setAttribute("class", "error");
			inputNombres.setAttribute("placeholder", "Nombres completos");
			document.getElementById('nombres').focus();
			e.preventDefault(e);

			//valida que el campo apellidos no este vacio
		}else if(inputApellidos.value == 0){
			alert("El campo Apellidos es obligatorio");
			inputApellidos.value = "";
			inputApellidos.setAttribute("class", "error");
			inputApellidos.setAttribute("placeholder", "Apellidos completos");
			document.getElementById('apellidos').focus();
			e.preventDefault(e);

			//valida que el campo apellidos no tenga mas de 30 caracteres
		}else if(document.getElementById('apellidos').length > 30){
			alert("El campo apellido no puede tener mas de 30 caracteres");
			inputApellidos.value = "";
			inputApellidos.setAttribute("class", "error");
			inputApellidos.setAttribute("placeholder", "Apellidos completos");
			document.getElementById('apellidos').focus();
			e.preventDefault(e);

			//valida que el campo email no este vacio
		}else if(inputEmail.value == 0){
			alert("El campo de correo electrónico es obligatorios");
			inputEmail.value = "";
			inputEmail.setAttribute("class", "error");
			inputEmail.setAttribute("placeholder", "Dir. de correo electrónico");	
			document.getElementById('email').focus();
			e.preventDefault(e);

			// valida el que el campo telefono no este vacio
		}else if(inputTelefono.value == 0){
			alert("El campo Núm. De teléfono es obligatorio, debe colocar el código de área sin espacios ni caracteres especiales, por ej: 04161110011");
			inputTelefono.value = "";
			inputTelefono.setAttribute("class", "error");
			inputTelefono.setAttribute("placeholder", "Núm. De teléfono");
			inputTelefono.focus();
			e.preventDefault(e);

			// valida que el campo telefono solo contenga numeros
		}else if(isNaN(inputTelefono.value)){
			alert("El campo Núm. De teléfono solo debe contener números");
			inputTelefono.value = "";
			inputTelefono.setAttribute("class", "error");
			inputTelefono.setAttribute("placeholder", "Núm. De teléfono");
			inputTelefono.focus();
			e.preventDefault(e);

			// valida que el campo telefono tenga 11 numeros
		}else if(inputTelefono.value.length != 11){
			alert("El campo Núm. De teléfono debe tener 11 números sin espacios ni caracteres especiales, debe colocar el código de área por ej: 02340001100");
			inputTelefono.value = "";
			inputTelefono.setAttribute("class", "error");
			inputTelefono.setAttribute("placeholder", "Núm´. De teléfono");
			inputTelefono.focus();
			e.preventDefault(e);
		
			//valida que selecciono el tipo de usuario
		}else if(inputUsuario.value == "Tipo de usuario"){
			alert("Seleccione el tipo de usuario");
			inputUsuario.setAttribute("class", "error");
			document.getElementById('usuario').focus();
			e.preventDefault(e); 	

			//valida que el campo ct no este vacio
		}else if(inputCt.value == 0){
        	alert("El campo Clave asignada es obligatorio");
        	inputCt.value = "";
        	inputCt.setAttribute("class", "error");
        	inputCt.focus();
        	e.preventDefault(e);	

        	//valida que el campo ct no tenga mas de 20 caracteres
        }else if(inputCt.value.length > 20){	
        	alert("El campo clave asignada no puede tener mas de 20 caracteres");
        	inputCt.value = "";
        	inputTerminos.setAttribute("class", "error");
        	e.preventDefault(e);  
 		    

        	// valida  el campo de terminos y condiciones
        }else if(inputTerminos.checked == false){
        	alert("Debe aceptar los terminos y condiciones");
        	inputTerminos.setAttribute("class", "error");
        	e.preventDefault(e);        	
             		

        	//pregunta de confirmacion al usuario
        }else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
			document.formulario.submit();
        }else{
        	e.preventDefault(e);
        }

	};
	

	// comprueba el los inputs con los eventos
	var comprobarInputs = function(){
		// Se reemplaza la clase error por un campo vacio para cambiar el color del texto y el borde de los campos que sean validados
		
		inputCedula.className = "";		
		inputNacion.className = "";				
		inputPw.className = "";	
		inputPw2.className = "";			
		inputNombres.className = "";		
		inputApellidos.className = "";
		inputEmail.className = "";
		inputTelefono.className = "";		
		inputUsuario.className = "";
		inputCt.className = "";
	};	


	var validar = function(e){
		validarInputs(e);				
	};	


	// Eventos
	document.getElementById('cedula').focus();
	formulario.addEventListener("submit", validar);	
	inputCedula.addEventListener("click", comprobarInputs);
	inputCedula.addEventListener("keypress", comprobarInputs);
	inputNacion.addEventListener("click", comprobarInputs);
	inputNacion.addEventListener("keydown", comprobarInputs);	
	inputPw.addEventListener("click", comprobarInputs);
	inputPw.addEventListener("keypress", comprobarInputs);
	inputPw2.addEventListener("click", comprobarInputs);
	inputPw2.addEventListener("keypress", comprobarInputs);	
	inputNombres.addEventListener("click", comprobarInputs);
	inputNombres.addEventListener("keypress", comprobarInputs);
	inputApellidos.addEventListener("click", comprobarInputs);
	inputApellidos.addEventListener("keypress", comprobarInputs);
	inputEmail.addEventListener("click", comprobarInputs);
	inputEmail.addEventListener("keypress", comprobarInputs);
	inputTelefono.addEventListener("click", comprobarInputs);
	inputTelefono.addEventListener("keypress", comprobarInputs);	
	inputUsuario.addEventListener("click", comprobarInputs);
	inputUsuario.addEventListener("keypress", comprobarInputs);	
	inputTerminos.addEventListener("click", comprobarInputs);
	inputCt.addEventListener("keypress", comprobarInputs);
	inputCt.addEventListener("click", comprobarInputs);

}())	