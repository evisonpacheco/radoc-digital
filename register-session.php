<?php

require 'db-connection.php';

$nome = mysqli_real_escape_string($conn, $_POST['user_name']);
$matricula = mysqli_real_escape_string($conn, $_POST['user_registration']);
$email = mysqli_real_escape_string($conn, $_POST['user_email']);
$senha = mysqli_real_escape_string($conn, $_POST['user_password']);
$confirmacao = mysqli_real_escape_string($conn, $_POST['user_confirm']);


$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO registro (user_name, user_registration, user_email, user_password) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $nome, $matricula, $email, $senhaHash);

if ($stmt->execute()) {
    echo "Registro inserido com sucesso";
    header("Refresh: 3; url=index.html");
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
