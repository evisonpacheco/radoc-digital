<?php

session_start();

$matricula = $_SESSION['ori_matricula'];
$curso = $_SESSION['ori_curso'];
$nivel = $_SESSION['ori_nivel'];
$ies = $_SESSION['ori_ies'];
$titulo_trabalho = $_SESSION['ori_titulo_trabalho'];
$data_ini = $_SESSION['ori_data_inicio'];
$data_ter = $_SESSION['ori_data_termino'];
$tipo_orientacao = $_SESSION['ori_tipo_orientacao'];

	require('fpdf/fpdf.php');
	
    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'ORIENTAÇÃO', 0, 1, 'C');

    //Logo
    /* $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight); */

    // Tabela
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 10, 'Matrícula', 1, 0, 'C', true); //Largura - altura - nome - borda - pular linha - posição - se aplica cor de fundo
    $pdf->Cell(70, 10, 'Curso', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Nível', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, $matricula, 1, 0, 'C');
    $pdf->Cell(70, 10, $curso, 1, 0, 'C');
    $pdf->Cell(60, 10, $nivel, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'IES', 1, 1, 'C', true);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $ies, 1, 0, 'C');
    $pdf->Ln();

    // Adicionando outras informações
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 10, 'Título do Trabalho', 1, 0, 'C', true);
    $pdf->Cell(40, 10, 'Data de Início', 1, 0, 'C', true);
    $pdf->Cell(40, 10, 'Data de Término', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Tipo de Orientação', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, $titulo_trabalho, 1, 0, 'C');
    $pdf->Cell(40, 10, $data_ini, 1, 0, 'C');
    $pdf->Cell(40, 10, $data_ter, 1, 0, 'C');
    $pdf->Cell(50, 10, $tipo_orientacao, 1, 0, 'C');
    $pdf->Ln();

    		// Adicionando link para download do PDF
    		$pdf->Output('orientacao.pdf', 'D');

?>