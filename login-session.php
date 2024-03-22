<?php

require "db-connection.php";

session_start();

if (empty($_POST['user_email'])) {
            echo "Preencha o seu e-mail de usário.";
        } elseif (empty($_POST['user_password'])) {
            echo "Preencha o campo de senha.";
        } elseif (!empty($_POST['user_email']) && !empty($_POST['user_password'])) {
			
			$email = $_POST['user_email'];
			$senhaHash = ($_POST['user_password']);

			$result_of_login_check = mysqli_query($conn, "SELECT user_id, user_name, user_registration, user_email, user_password
														  FROM registro 
														  WHERE user_email = '" . $email . "' ");
				
			if ($result_of_login_check->num_rows == 1) {

			$result_row = $result_of_login_check->fetch_object();
	
				if (password_verify($senhaHash, $result_row->user_password)) {
					
					$_SESSION['user_id'] = $result_row->user_id;;
					$_SESSION['user_email'] = $result_row->user_email;
					$_SESSION['user_password'] = $result_row->user_password;
					$_SESSION['user_valid'] = $result_row->user_valid;
					
					if(isset($_SESSION['user_email'])){
						header("Location: pages/home.php");
						exit();
					} elseif(!isset($_SESSION['user_email'])){
						echo "<script type='text/javascript'>
							alert('Não foi possível realizar o login, tente novamente.');
							window.location.replace('index.html');
						  </script>";
						exit();
					}

						
				} else {
					echo "<script type='text/javascript'>
							alert('Senha incorreta.');
							window.location.replace('index.html');
						  </script>";
				  }
			}	else {
					echo "<script type='text/javascript'>
							alert('Este usuário não está cadastrado.');
							window.location.replace('index.html');
						  </script>";
				}

}

?>
