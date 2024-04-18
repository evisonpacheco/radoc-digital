<?php

session_start();

$adm_portaria = $_SESSION['adm_portaria'];
$adm_emissor = $_SESSION['adm_emissor'];
$adm_servido = $_SESSION['adm_servido'];
$adm_descricao = $_SESSION['adm_descricao'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades Administrativas', 0, 1, 'C');

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
    $pdf->Cell(50, 10, 'Portaria', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Órgão Emissor', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Órgão Servido', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, $adm_portaria, 1, 0, 'C');
    $pdf->Cell(70, 10, $adm_emissor, 1, 0, 'C');
    $pdf->Cell(70, 10, $adm_servido, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Descrição Complementar', 1, 1, 'C', true);
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->MultiCell(190, 10, $adm_descricao, 1, 1, 'C');

    $pdf->Output('administrativa.pdf', 'D');
	
?>