<?php

require 'db-connection.php';

$nome = $_POST['user_name'];
$matricula = $_POST['user_registration'];
$email = $_POST['user_email'];
$usuario = $_POST['user_login'];
$senha = $_POST['user_password'];
$confirmacao = $_POST['user_confirm'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO registro (user_name, user_registration, user_email, user_login, user_password) VALUES ('$nome', '$matricula', '$email', '$usuario', '$senhaHash')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    header("Refresh: 3; url=index.html");
}

$conn->close();

*/

?>
