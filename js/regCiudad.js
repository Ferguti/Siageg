	(function(){

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs			
		ciudad = document.getElementById('ciudad');


		var validarInputs = function(e){			
			
				//valida que el campo NOMBRE DE LA CIUDAD no este vacio
			if(ciudad.value == 0){
				alert("El campo NOMBRE DE LA CIUDAD es obligatorio");
				ciudad.setAttribute("class", "error");
				ciudad.setAttribute("placeholder", "Nombre de la cuidad");
				ciudad.focus();
				e.preventDefault(e);
			
				//valida que el campo NOMBRE DE LA CIUDAD no tenga mas de 10 caracteres y meas de 3
			}else if(ciudad.value.length > 15 || ciudad.value.length < 3){
				alert("El campo NOMBRE DE LA CIUDAD no puede contener más de 15 caracteres y debe tener más de  3...");
				ciudad.value = "";
				ciudad.setAttribute("class", "error");
				ciudad.setAttribute("palceholder", "Nombre de la cuidad");
				ciudad.focus();
				e.preventDefault(e);
			
				
			}else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
				document.formulario.submit();
        	}else{
        		e.preventDefault(e);
        	}

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){				
				ciudad.className = "";				
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				document.getElementById('ciudad').focus();
				formulario.addEventListener("submit", validar);				
				ciudad.addEventListener("click", comprobarInputs);
				ciudad.addEventListener("keypress", comprobarInputs);				

		
}())