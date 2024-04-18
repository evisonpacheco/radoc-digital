<?php

session_start();

$pro_codigo = $_SESSION['pro_codigo'];
$pro_nome = $_SESSION['pro_nome'];
$pro_data_inicio_efetiva = $_SESSION['pro_data_inicio_efetiva'];
$pro_data_termino_efetiva = $_SESSION['pro_data_termino_efetiva'];
$pro_tipo = $_SESSION['pro_tipo'];
$pro_projeto = $_SESSION['pro_projeto'];
$pro_docente = $_SESSION['pro_docente'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Projeto', 0, 1, 'C');

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
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight); */

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Código', 1, 0, 'C', true);
    $pdf->Cell(140, 10, 'Nome do discente', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, $pro_codigo, 1, 0, 'C');
    $pdf->Cell(140, 10, $pro_nome, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, 'Data Início Efetiva', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Data Término Efetiva', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Tipo', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, $pro_data_inicio_efetiva, 1, 0, 'C');
    $pdf->Cell(60, 10, $pro_data_termino_efetiva, 1, 0, 'C');
    $pdf->Cell(70, 10, $pro_tipo, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, 'Projeto', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $pro_projeto, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, 'Docente', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, $pro_docente, 1, 0, 'C');
    $pdf->Ln();

    $pdf->Output('projeto.pdf', 'D');
	
?>