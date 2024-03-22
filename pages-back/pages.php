<?php

require '../db-connection.php';

session_start();

//orientacao.html
$tabela = mysqli_real_escape_string($conn, $_POST['ori_table']);
$matricula = mysqli_real_escape_string($conn, $_POST['ori_registration']);
$nivel = mysqli_real_escape_string($conn, $_POST['ori_level']);
$universidade = mysqli_real_escape_string($conn, $_POST['ori_uni']);
$ies = mysqli_real_escape_string($conn, $_POST['ori_class']);
$titulo = mysqli_real_escape_string($conn, $_POST['ori_title']);
$inicio = mysqli_real_escape_string($conn, $_POST['ori_ini']);
$termino = mysqli_real_escape_string($conn, $_POST['ori_ter']);
$tipo = mysqli_real_escape_string($conn, $_POST['ori_type']);
$id = $_SESSION['user_id'];

$erro = false;

if(isset($_SESSION['user_id'])){
$stmt = $conn->prepare("INSERT INTO orientacao (ori_table, ori_registration, ori_level, ori_uni, ori_class, ori_title, ori_ini, ori_ter, ori_type, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssss", $tabela, $matricula, $nivel, $universidade, $ies, $titulo, $inicio, $termino, $tipo, $id);

if(!$erro){
    if ($stmt->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/orientacao.php");
    } else {
        echo "Erro: " . $stmt->error;
}else{
    echo "<script>Você está offline. Volte para a área de login.</script>";
    header("Location: ../index.html");
    exit();
}

$stmt->close();
$conn->close();
}
