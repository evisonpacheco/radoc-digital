<?php

require '../db-connection.php';

$nome = mysqli_real_escape_string($conn, $_POST['user_name']);
$matricula = mysqli_real_escape_string($conn, $_POST['user_registration']);
$email = mysqli_real_escape_string($conn, $_POST['user_email']);
$senha = mysqli_real_escape_string($conn, $_POST['user_password']);
$confirmacao = mysqli_real_escape_string($conn, $_POST['user_confirm']);
$cppd = mysqli_real_escape_string($conn, $_POST['cppd_check']);

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$erro = false;

$false = 0;
$true = 1;

$result_of_registration_check = mysqli_query ($conn, "SELECT user_id FROM registro WHERE user_registration='". $matricula ."'");

$result_of_email_check = mysqli_query ($conn, "SELECT user_id FROM registro WHERE user_email='". $email ."'");
			
if($result_of_registration_check->num_rows != 0){
	$erro = true;
	echo "<script type='text/javascript'>
			alert('Esta matrícula já está cadastrada.');
			window.location.replace('../pages/register.html');
		</script>";
} elseif($result_of_email_check->num_rows != 0){
	$erro = true;
	echo "<script type='text/javascript'>
			alert('Este e-mail já está cadastrado.');
			window.location.replace('../pages/register.html');
		</script>";
} elseif($cppd == 1){
	$result_of_cppd_check = mysqli_query ($conn, "SELECT email_cppd FROM cppd WHERE email_cppd='". $email ."'");
	
	if($result_of_cppd_check->num_rows == 0){
	$erro = true;
	echo "<script type='text/javascript'>
			alert('Este e-mail não está cadastrado como CPPD.');
			window.location.replace('../pages/register.html');
		</script>";
	};
};

if (!$erro && $cppd == 0){
	$stmt = $conn->prepare("INSERT INTO registro (user_name, user_registration, user_email, user_password, user_valid, user_nivel) VALUES (?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssss", $nome, $matricula, $email, $senhaHash, $false, $false);

	if ($stmt->execute()) {
    		echo "Registro inserido com sucesso";
   		header("Refresh: 3; url=..\index.html");
    		exit();
	} else {
    		echo "Erro: " . $stmt->error;
	}
	$stmt->close();
} elseif (!$erro && $cppd == 1){
	$stmt = $conn->prepare("INSERT INTO registro (user_name, user_registration, user_email, user_password, user_valid, user_nivel) VALUES (?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssss", $nome, $matricula, $email, $senhaHash, $false, $true);

	if ($stmt->execute()) {
    		echo "Registro inserido com sucesso";
   		header("Refresh: 3; url=..\index.html");
    		exit();
	} else {
    		echo "Erro: " . $stmt->error;
	}
	$stmt->close();
}

$conn->close();

?>
