<?php

require 'db-connection.php';

session_start();

if (empty($_POST['user_login'])) {
            echo "Preencha o campo Usuário.";
        } elseif (empty($_POST['user_password'])) {
            echo "Preencha o campo Senha.";
        } elseif (!empty($_POST['user_login']) && !empty($_POST['user_password'])) {
			
			$user_login = $_POST['user_login'];
			$user_password = $_POST['user_password'];

			$result_of_login_check = mysqli_query($conn, "SELECT nome, user, senha, permissoes
														  FROM usuarios 
														  WHERE user = '" . $user_login . "' ");
				
			if ($result_of_login_check->num_rows == 1) {

			$result_row = $result_of_login_check->fetch_object();
	
				if (password_verify($user_password, $result_row->senha)) {
		
					$_SESSION['user_nome'] = $result_row->nome;
					$_SESSION['user_permissoes'] = $result_row->permissoes;
					$_SESSION['user_login_status'] = 1;
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
