<?php

require 'db-connection.php';

session_start();

if (empty($_POST['user_login'])) {
            echo "<script type='text/javascript'>
			alert('Preencha o campo Usuário.');
			window.location.replace('index.html');
   		  </script>";
        } elseif (empty($_POST['user_password'])) {
            echo "<script type='text/javascript'>
			alert('Preencha o campo Senha.');
			window.location.replace('index.html');
		  </script>";
        } elseif (!empty($_POST['user_login']) && !empty($_POST['user_password'])) {
			
			$usuario = $_POST['user_login'];
			$senha = $_POST['user_password'];

			$result_of_login_check = mysqli_query($conn, "SELECT nome, user_registration, user_password
								      FROM registro 
								      WHERE user_login = '" . $usuario . "' ");
				
			if ($result_of_login_check->num_rows == 1) {

			$result_row = $result_of_login_check->fetch_object();
	
				if (password_verify($senha, $result_row->user_password)) {
		
					$_SESSION['user_name'] = $result_row->nome;
					$_SESSION['user_registration'] = $result_row->user_registration;
					header("Location: home.html");
					exit();
						
				} else {
					echo "<script type='text/javascript'>
							alert('Senha incorreta.');
							window.location.replace('index.html');
						  </script>";
				  }
			}	else {
					echo "<script type='text/javascript'>
							alert('Usuário incorreto ou não cadastrado.');
							window.location.replace('index.html');
						  </script>";
				}
		  }

?>
