<?php

session_start();

$ges_num_doc = $_SESSION['ges_num_doc'];
$ges_funcao = $_SESSION['ges_funcao'];
$ges_semana = $_SESSION['ges_semana'];
$ges_chs = $_SESSION['ges_chs'];
$ges_designacao = $_SESSION['ges_designacao'];
$ges_periodo = $_SESSION['ges_periodo'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades de Gestão e Representação', 0, 1, 'C');

    //Logo
    /*$logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);*/

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Nª do Doc', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Carga e/ou Função', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Semana', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, $ges_num_doc, 1, 0, 'C');
    $pdf->Cell(70, 10, $ges_funcao, 1, 0, 'C');
    $pdf->Cell(70, 10, $ges_semana, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'CH Semanal', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Ato de Designação', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Período', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, $ges_chs, 1, 0, 'C');
    $pdf->Cell(70, 10, $ges_designacao, 1, 0, 'C');
    $pdf->Cell(70, 10, $ges_periodo, 1, 0, 'C');
    $pdf->Ln();

    $pdf->Output('gestao.pdf', 'D');
	
?>