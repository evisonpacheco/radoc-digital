
	//register.html
	document.getElementById('user_registration').addEventListener('input', function (event) {
		// Obtém o valor atual do campo de entrada
		let inputValue = event.target.value;

		// Remove qualquer caractere que não seja um número
		inputValue = inputValue.replace(/\D/g, '');

		// Define o valor do campo de entrada como somente números
		event.target.value = inputValue;
	});
	
	//register.php
	var password = document.getElementById("user_password"), confirm = document.getElementById("user_confirm"),
	    matricula = document.getElementById("user_registration");

	function validatePassword(){
  		if(password.value != confirm.value) {
    	confirm.setCustomValidity("Passwords Don't Match");
  			} else {
    	confirm.setCustomValidity('');
  		}
	}

	function validateLength(){
		var psw_length = password.value.length;
		var matricula_length = matricula.value.length;
		
  		if(psw_length < 8 || psw_length > 25) {
    	password.setCustomValidity("A senha deve ter, no mínimo, 9 caracteres e, no máximo, 25 caracteres.");
  			} else {
    	password.setCustomValidity('');
  		}
		
		if(matricula_length != 10) {
    	matricula.setCustomValidity("A matrícula deve ter 10 caracteres.");
  			} else {
    	matricula.setCustomValidity('');
  		}
	}

		password.onchange = validatePassword;
		confirm.onkeyup = validatePassword;

		password.onkeyup = validateLength;
		matricula.onkeyup = validateLength;

		//home.php
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
  		coll[i].addEventListener("click", function() {
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    			if (content.style.display === "block") {
      		content.style.display = "none";
    			} else {
      		content.style.display = "block";
    			}
  		});
	    }
