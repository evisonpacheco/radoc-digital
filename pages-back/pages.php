<?php

require '../db-connection.php';


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

$erro = false;

$stmt = $conn->prepare("INSERT INTO orientacao (ori_table, ori_registration, ori_level, ori_uni, ori_class, ori_title, ori_ini, ori_ter, ori_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssss", $tabela, $matricula, $nivel, $universidade, $ies, $titulo, $inicio, $termino, $tipo);

if(!$erro){
    if ($stmt->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/orientacao.php");
    } else {
        echo "Erro: " . $stmt->error;
    }

$stmt->close();
$conn->close();
}
