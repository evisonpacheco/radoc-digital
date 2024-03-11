<?php

require 'db-connection.php';

$nome = mysqli_real_escape_string($conn, $_POST['user_name']);
$matricula = mysqli_real_escape_string($conn, $_POST['user_registration']);
$email = mysqli_real_escape_string($conn, $_POST['user_email']);
$senha = mysqli_real_escape_string($conn, $_POST['user_password']);
$confirmacao = mysqli_real_escape_string($conn, $_POST['user_confirm']);

$result_of_login_check = mysqli_query ($conn, "SELECT id FROM registro WHERE user_registration='". $matricula ."'");
			
			if($result_of_login_check->num_rows != 0){
				$erro = true;
				echo "<script type='text/javascript'>
						alert('Esta matrícula já está cadastrada.');
						window.location.replace('register.html');
					</script>";
			}

$result_of_login_check = mysqli_query ($conn, "SELECT id FROM registro WHERE user_email='". $email ."'");
			
			if($result_of_login_check->num_rows != 0){
				$erro = true;
				echo "<script type='text/javascript'>
						alert('Este e-mail já está cadastrado.');
						window.location.replace('register.html');
					</script>";
			}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO registro (user_name, user_registration, user_email, user_password) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $nome, $matricula, $email, $senhaHash);

if ($stmt->execute()) {
    echo "Registro inserido com sucesso";
    header("Refresh: 3; url=index.html");
    exit();
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
