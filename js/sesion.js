(function(){

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs		
		user = document.getElementById('user'),
		pw = document.getElementById('pass');

		var validarInputs = function(e){

			
				//valida que el campo usuario no este vacio
			if(user.value == 0){
				alert("El campo cedula es obligatorio");
				user.value = "";			
				user.setAttribute("class", "error");
				user.setAttribute("Placeholder", "Cedula");
				user.focus();
				e.preventDefault(e);

				//valida que solo contenga numeros
			}else if(isNaN(document.getElementById('user').value)){
				alert("El campo cedula solo puede ingresar números");
				user.value = "";				
				user.setAttribute("class", "error");
				user.setAttribute("placeholder", "Cedula");
				user.focus();
				e.preventDefault(e);
			
			
				//valida que el campo usuario tenga solo 8 caracteres 
			}else if(user.value < 1000000 ) {
				alert("El campo cedula no debe tener espacios en blanco y debe contener 8 numeros");
				user.value = "";				
				user.setAttribute("class", "error");
				user.setAttribute("placeholder", "Cedula");
				user.focus();
				e.preventDefault(e);	
			
				//valida que el campo contraseña no este vacio	
			}else if(pw.value == 0){
				alert("El campo contraseña es obligatorio para iniciar sesión");
				pw.value = "";				
				pw.setAttribute("class", "error");
				pw.setAttribute("placeholder", "Contraseña");
				pw.focus();
				e.preventDefault(e);
			
				//valida que el campo contraseña no tenga mas de 16 caracteres y meas de 3
			}else if(pw.value.length > 16){
				alert("El campo contraseña no puede tener mas de 16 caracteres");
				pw.value = "";				
				pw.setAttribute("class", "error");
				pw.setAttribute("palceholder", "Contraseña");
				pw.focus();
				e.preventDefault(e);				
			}
			
			

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){
				user.className = "";
				pw.className = "";				
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				document.getElementById('user').focus();
				formulario.addEventListener("submit", validar);
				user.addEventListener("click", comprobarInputs);
				user.addEventListener("keypress", comprobarInputs);
				pw.addEventListener("click", comprobarInputs);
				pw.addEventListener("keypress", comprobarInputs);
				

		
}())

