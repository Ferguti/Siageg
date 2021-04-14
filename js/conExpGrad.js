(function(){

		// variables de elementos
	var formulario = document.getElementsByName('formulario')[0],		
		elementos = formulario.elements,			
		cedula = document.getElementById('cedula'),
		submit = document.getElementById('buscar');
			//formulario 2 guarda informacion del expediente
		form = document.getElementsByName('formulario')[1];
		element = form.elements,
		fotos = document.getElementById('fotos'),
		fn = document.getElementById('fn'),
		nc = document.getElementById('nc'),
		cc = document.getElementById('cc'),
		pn = document.getElementById('pn'),
		sa = document.getElementById('sa');
	var validarInputs = function(e){
		
			// valida que el campo cedula no este vacio
		if(cedula.value == 0){
			alert("Coloque la cédula de un graduando para realizar la consulta");
			cedula.setAttribute("class", "error");
			cedula.setAttribute("placeholder", "Cédula");
			cedula.value = "";
			cedula.focus();
			e.preventDefault(e);

			// valida si el campo cedula contiene solo numeros
		}else if(isNaN(document.getElementById('cedula').value)){
			alert("En el campo cédula solo puede usar números para realizar la consulta, sin caracteres especiales por ej: ( - . ,)");
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


	var  validarCheckbox = function(e){
		if(fotos.value == "Seleccione..."){
			alert("Debe indicar si existen las fotos en el expediente");
			fotos.setAttribute("class", "error");
			fotos.focus();
			e.preventDefault(e);

		}else if(fn.value == "Seleccione..."){
			alert("Debe indicar si existe el FONDO NEGRO en el expediente");
			fn.setAttribute("class", "error");
			fn.focus();
			e.preventDefault(e);

		}else if(nc.value == "Seleccione..."){
			alert("Debe indicar si existen las NOTAS CERTIFICADAS en el expediente");
			nc.setAttribute("class", "error");
			nc.focus();
			e.preventDefault(e);

		}else if(cc.value == "Seleccione..."){
			alert("Debe indicar si existen la COPIA DE LA CEDULA en el expediente");
			cc.setAttribute("class", "error");
			cc.focus();
			e.preventDefault(e);

		}else if(pn.value == "Seleccione..."){
			alert("Debe indicar si existe la PARTIDA DE NACIMIENTO en el expediente");
			pn.setAttribute("class", "error");
			pn.focus();
			e.preventDefault(e);

		}else if(sa.value == "Seleccione..."){
			alert("Debe indicar si el estudiante esta SOLVENTE ACADÉMICAMENTE");
			sa.setAttribute("class", "error");
			sa.focus();
			e.preventDefault(e);

		}else if ((confirm('¿Seguro(a) que desea guardar los cambios?'))){
			document.form.submit();
        }else{
        	e.preventDefault(e);
        }
	};


	var comprobarInputs = function(){
			cedula.className = "";
			fotos.className = "";
			fn.className = "";
			nc.className = "";
			cc.className = "";
			pn.className = "";
			sa.className = "";	
	};
	

	var validar = function(e){
		validarInputs(e);
		
	};	
	

		// eventos
	document.getElementById('cedula').focus();		
	formulario.addEventListener("submit", validar);
	form.addEventListener("submit", validarCheckbox);
	fotos.addEventListener("click", comprobarInputs);
	fotos.addEventListener("keydown", comprobarInputs);
	fn.addEventListener("keydown", comprobarInputs);
	fn.addEventListener("click", comprobarInputs);
	nc.addEventListener("keydown", comprobarInputs);
	nc.addEventListener("click", comprobarInputs);
	cc.addEventListener("keydown", comprobarInputs);
	cc.addEventListener("click", comprobarInputs);
	pn.addEventListener("keydown", comprobarInputs);
	pn.addEventListener("click", comprobarInputs);
	sa.addEventListener("click", comprobarInputs);
	sa.addEventListener("keydown", comprobarInputs);
	cedula.addEventListener("click", comprobarInputs);
	cedula.addEventListener("keydown", comprobarInputs);

}())