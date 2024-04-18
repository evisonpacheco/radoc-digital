<?php

session_start();

$qua_data_inicio = $_SESSION['qua_data_inicio'];
$qua_data_termino = $_SESSION['qua_data_termino'];
$qua_descricao = $_SESSION['qua_descricao'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Qualificação', 0, 1, 'C');

    //Logo
   /* $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    //$pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);*/

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Data início', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Data término', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(95, 10, $qua_data_inicio, 1, 0, 'C');
    $pdf->Cell(95, 10, $qua_data_termino, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Descrição', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->MultiCell(190, 10, $qua_descricao, 1, 0, 'C');
    $pdf->Ln();

    $pdf->Output('qualificação.pdf', 'D');
	
?>