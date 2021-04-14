	(function(){

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs		
		estado = document.getElementById('estado');
	


		var validarInputs = function(e){

			//valiad que el campo NOMBRE DEL ESTADO no este vacio
			if(estado.value == 0){
				alert("El campo NOMBRE DEL ESTADO es obligatorio");
				estado.value = "";
				estado.setAttribute("class", "error");
				estado.setAttribute("Placeholder", "Nombre del estado");
				estado.focus();
				e.preventDefault(e);
			
				//valida que el campo NOMBRE DEL ESTADO no tenga mas de 30 caracteres y mas de 5
			}else if(estado.value.length > 25 || estado.value.length < 4) {
				alert("El campo NOMBRE DEL ESTADO no puede tener mas de 15 caracteres y debe contener más de 3...");
				estado.value = "";
				estado.setAttribute("class", "error");
				estado.setAttribute("placeholder", "Nombre del estado");
				estado.focus();
				e.preventDefault(e);	
			
				
			}else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
				document.formulario.submit();
        	}else{
        		e.preventDefault(e);
        	}

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){
				estado.className = "";							
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				document.getElementById('estado').focus();
				formulario.addEventListener("submit", validar);
				estado.addEventListener("click", comprobarInputs);
				estado.addEventListener("keypress", comprobarInputs);
						

		
}())