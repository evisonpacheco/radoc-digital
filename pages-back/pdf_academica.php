<?php

session_start();

$aca_titulo = $_SESSION['aca_titulo'];
$aca_ini = $_SESSION['aca_ini'];
$aca_ter = $_SESSION['aca_ter'];
$aca_clientela = $_SESSION['aca_clientela'];
$aca_description = $_SESSION['aca_description'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades Academica', 0, 1, 'C');

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
    $pdf->Cell(130, 10, 'Título da Atividade', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Data de início', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Data de término', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(130, 10, $aca_titulo, 1, 0, 'C');
    $pdf->Cell(30, 10, $aca_ini, 1, 0, 'C');
    $pdf->Cell(30, 10, $aca_ter, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Clientela', 1, 1, 'C', true);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $aca_clientela, 1, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 10, 'Descrição Complementar', 1, 1, 'C', true);
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->MultiCell(190, 10, $aca_description, 1, 1, 'C');

    $pdf->Output('academica.pdf', 'D');
	
?>