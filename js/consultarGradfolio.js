	(function(){

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs			
		folio = document.getElementById('folio'),
		indice = document.getElementById('indice');


		var validarInputs = function(e){			
			
			
			if(folio.value == 0){
				alert("El campo Nro de folio es obligatorio");
				folio.setAttribute("class", "error");
				folio.setAttribute("placeholder", "Nro. Folio");
				folio.focus();
				e.preventDefault(e);

			}else if(indice.value == 0){
				alert("El campo Índice es obligatorio");
				indice.setAttribute("class", "error");
				indice.setAttribute("placeholder", "Índice Acad");
				indice.focus();
				e.preventDefault(e);			
				
			
			}else if(folio.value.length > 4){
				alert("El campo Nro de folio no puede tener mas de 4 numeros");
				folio.value = "";
				folio.setAttribute("class", "error");
				folio.setAttribute("palceholder", "Nro. Folio");
				folio.focus();
				e.preventDefault(e);

			}else if(indice.value.length > 4){
				alert("El campo Índice no puede tener mas de 4 numeros");
				indice.value = "";
				indice.setAttribute("class", "error");
				indice.setAttribute("palceholder", "Índice Acad");
				indice.focus();
				e.preventDefault(e);

			}else if(isNaN(indice.value)){
				alert("El campo Índice solo puede contener números");
				indice.value = "";
				indice.setAttribute("class", "error");
				indice.setAttribute("palceholder", "Índice Acad");
				indice.focus();
				e.preventDefault(e);
			
			
			}else if(isNaN(folio.value)){
				alert("El campo Nro de folio solo puede contener números");
				folio.value = "";
				folio.setAttribute("class", "error");
				folio.setAttribute("palceholder", "Nro. Folio");
				folio.focus();
				e.preventDefault(e);

			}else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
				document.formulario.submit();
        	}else{
        		e.preventDefault(e);
        	}

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){				
				folio.className = "";	
				indice.className = "";			
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				document.getElementById('folio').focus();
				formulario.addEventListener("submit", validar);				
				folio.addEventListener("click", comprobarInputs);
				folio.addEventListener("keypress", comprobarInputs);
				indice.addEventListener("click", comprobarInputs);
				indice.addEventListener("keypress", comprobarInputs);				

		
}())