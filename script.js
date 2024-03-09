
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
	var password = document.getElementById("user_password"), confirm = document.getElementById("user_confirm");

	function validatePassword(){
  		if(password.value != confirm.value) {
    	confirm.setCustomValidity("Passwords Don't Match");
  			} else {
    	confirm.setCustomValidity('');
  		}
	}

		password.onchange = validatePassword;
		confirm.onkeyup = validatePassword;
