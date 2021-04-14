(function(){	

			//se accesa al formulario 
		var formulario = document.getElementsByName('formulario')[0],
			//se accesa a los elementos de cada input
		elementos = formulario.elements,
			//se capturan inputs		
		nombre = document.getElementById('nombre'),
		siglas = document.getElementById('siglas'),
		director = document.getElementById('director'),
		descrip = document.getElementById('descrip');

		var validarInputs = function(e){

			//valiad que el campo nombre no este vacio
			if(nombre.value == 0){
				alert("El campo Nombre de la institución es obligatorio");
				nombre.setAttribute("class", "error");
				nombre.setAttribute("Placeholder", "Nombre de la institución");
				nombre.focus();
				e.preventDefault(e);
			
				//valida que el campo nombre no tenga mas de 30 caracteres y mas de 5
			}else if(nombre.value.length > 80 || nombre.value.length < 5) {
				alert("El campo Nombre de la institución no puede tener mas de 30 caracteres y debe contener más de 5 caracteres");
				nombre.value = "";
				nombre.setAttribute("class", "error");
				nombre.setAttribute("placeholder", "Nombre del P.N.F");
				nombre.focus();
				e.preventDefault(e);
			
				//valida que el campo siglas no este vacio
			}else if(siglas.value == 0){
				alert("El campo Siglas es obligatorio");
				siglas.setAttribute("class", "error");
				siglas.setAttribute("placeholder", "Siglas del P.N.F");
				siglas.focus();
				e.preventDefault(e);
			
				//valida que el campo siglas no tenga mas de 10 caracteres y meas de 3
			}else if(siglas.value.length > 20 || siglas.value.length < 3){
				alert("El campo Siglas no puede contener más de 20 caracteres y debe tener más de 3");
				siglas.value = "";
				siglas.setAttribute("class", "error");
				siglas.setAttribute("palceholder", "Siglas");
				siglas.focus();
				e.preventDefault(e);
			
				//valida que el campo fecha no este vacio
			}else if(director.value == 0){
				alert("El campo Nombre del Director/Rector es obligatorio");
				director.setAttribute("class", "error");
				director.focus();
				e.preventDefault(e);
			
			}else if(director.value.length > 50 || director.value.length < 10){
				alert("El campo Nombre del Director / Rector no puede contener más de 50 caracteres y debe tener más de 10");
				director.value = ""; 
				director.setAttribute("class", "error");
				director.setAttribute("palceholder", "Siglas");
				director.focus();
				e.preventDefault(e);

				//valida que el campo descripcion no este vació
			}else if(descrip.value == 0){
				alert("El campo descripción es obligatorio");
				descrip.setAttribute("class", "error");
				descrip.setAttribute("placeholder", "Descripción de la institución");
				descrip.focus();
				e.preventDefault(e);
			
				//valida que el campo descripcion no tenga mas de 80 caractes y mas de 10
			}else if(descrip.value.length > 200 || descrip.value.length < 5 ){
				alert("El campo descripción no puede tener mas de 200 caracteres y debe tener mas de 5");
				descrip.value = "";
				descrip.setAttribute("class", "error");
				descrip.setAttribute("placeholder", "Descripción de la institución");
				descrip.focus();
				e.preventDefault(e);
			
			}else if ((confirm('Estas seguro(a) que los datos son correctos?'))){
				document.formulario.submit();
        	}else{
        		e.preventDefault(e);
        	}

		};


	            // comprueba los inputs con los eventos
			var comprobarInputs = function(){
				nombre.className = "";
				siglas.className = "";
				director.className  = "";
				descrip.className = "";
			};

			//funcion main
			var validar = function(e){
				validarInputs(e);
			};

				//eventos
				document.getElementById('nombre').focus();
				formulario.addEventListener("submit", validar);
				nombre.addEventListener("click", comprobarInputs);
				nombre.addEventListener("keypress", comprobarInputs);
				siglas.addEventListener("click", comprobarInputs);
				siglas.addEventListener("keypress", comprobarInputs);
				director.addEventListener("click", comprobarInputs);
				director.addEventListener("keypress", comprobarInputs);
				descrip.addEventListener("click", comprobarInputs);
				descrip.addEventListener("keypress", comprobarInputs);	

		
}())