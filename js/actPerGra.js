	(function(){

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs			
		periodo = document.getElementById('periodo');


		var validarInputs = function(e){			
			
				//valida que el campo NOMBRE DE LA CIUDAD no este vacio
			if(periodo.value == "Cambiar periodo"){
				alert("Debe seleccionar el perido");
				periodo.setAttribute("class", "error");
				periodo.setAttribute("placeholder", "Cambiar periodo");
				periodo.focus();
				e.preventDefault(e);	
			
			
				
			}else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
				document.formulario.submit();
        	}else{
        		e.preventDefault(e);
        	}

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){				
				periodo.className = "";				
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				
				formulario.addEventListener("submit", validar);				
				periodo.addEventListener("click", comprobarInputs);
				periodo.addEventListener("keydown", comprobarInputs);				

		
}())