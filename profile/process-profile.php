<?php

require '../db-connection.php';

session_start();

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $id = $_SESSION['user_id'];
    $nome = mysqli_real_escape_string($conn, $_POST['user_name']);
    $matricula = mysqli_real_escape_string($conn, $_POST['user_registration']);
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $senha = mysqli_real_escape_string($conn, $_POST['user_password']);
    $confirmacao = mysqli_real_escape_string($conn, $_POST['user_confirm']);


    // Substitua esta consulta SQL e a lógica de atualização conforme necessário
    $sql = "UPDATE registro SET user_name='" . $nome . "', user_registration='" . $matricula . "', user_password='" . $senha . "', user_confirm=' ". $confirmacao . "' WHERE user_id='" . $id . "'";
    if (mysqli_query($conn, $sql)) {
        // Redirecionar de volta para a página de perfil ou exibir uma mensagem de sucesso
        echo "Alteração feita com sucesso!";
        header("Refresh: 3; url=../pages/home.php");
        exit();
    } else {
        echo "Erro ao atualizar o perfil: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
