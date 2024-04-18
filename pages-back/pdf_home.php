<?php

session_start();

$nome = $_SESSION['nome'];
$classe = $_SESSION['classe'];
$regime_trabalho = $_SESSION['regime_trabalho'];
$nivel = $_SESSION['nivel'];
$titulacao = $_SESSION['titulacao'];
$lotacao = $_SESSION['lotacao'];
$empregador = $_SESSION['empregador'];
$cargo = $_SESSION['cargo'];
$logradouro = $_SESSION['logradouro'];
$cidade = $_SESSION['cidade'];
$bairro = $_SESSION['bairro'];
$uf = $_SESSION['uf'];
$cep = $_SESSION['cep'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone'];

	require('fpdf/fpdf.php');

	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Informações Principais', 0, 1, 'C');

    //Logo
	/* $logoPath = './pages-back/fpdf';
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight, 'PNG', $logoPath);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight, 'PNG', $logoPath); */

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Nome', 1, 1, 'C', true);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $nome, 1, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Classe', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Regime Trabalho', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(95, 10, $classe, 1, 0, 'C');
    $pdf->Cell(95, 10, $regime_trabalho, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Nível', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Títulação', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Lotação', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, $nivel, 1, 0, 'C');
    $pdf->Cell(70, 10, $titulacao, 1, 0, 'C');
    $pdf->Cell(70, 10, $lotacao, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Empregador', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Cargo', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(95, 10, $empregador, 1, 0, 'C');
    $pdf->Cell(95, 10, $cargo, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Logradouro', 1, 1, 'C', true);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $logradouro, 1, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 10, 'Cidade', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Bairro', 1, 0, 'C', true);
    $pdf->Cell(20, 10, 'UF', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'CEP', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, $cidade, 1, 0, 'C');
    $pdf->Cell(60, 10, $bairro, 1, 0, 'C');
    $pdf->Cell(20, 10, $uf, 1, 0, 'C');
    $pdf->Cell(50, 10, $cep, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Empregador', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Cargo', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(95, 10, $email, 1, 0, 'C');
    $pdf->Cell(95, 10, $telefone, 1, 0, 'C');
    $pdf->Ln();

    $pdf->Output('home.pdf', 'D');
	
?>