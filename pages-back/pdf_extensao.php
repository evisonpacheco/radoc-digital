<?php

session_start();

$ext_doc1 = $_SESSION['ext_doc1'];
$ext_titulo1 = $_SESSION['ext_titulo1'];
$ext_leader_project1 = $_SESSION['ext_leader_project1'];
$ext_doc2 = $_SESSION['ext_doc2'];
$ext_titulo2 = $_SESSION['ext_titulo2'];
$ext_leader_project2 = $_SESSION['ext_leader_project2'];
$ext_estagio_doc = $_SESSION['ext_estagio_doc'];
$ext_conhecimento = $_SESSION['ext_conhecimento'];
$ext_instituicao = $_SESSION['ext_instituicao'];
$ext_periodo = $_SESSION['ext_periodo'];
$ext_chs = $_SESSION['ext_chs'];
$ext_enf_doc = $_SESSION['ext_enf_doc'];
$ext_atividade = $_SESSION['ext_atividade'];
$ext_chs_total = $_SESSION['ext_chs_total'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Extensão', 0, 1, 'C');

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

    $pdf->Cell(60, 10, 'Nª do Doc', 1, 0, 'C', true);
    $pdf->Cell(130, 10, 'Projetos', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(60, 10, $ext_doc1, 1, 0, 'C');
    $pdf->Cell(65, 10, $ext_titulo1, 1, 0, 'C');
    $pdf->Cell(65, 10, $ext_leader_project1, 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(60, 10, 'Nª do Doc', 1, 0, 'C', true);
    $pdf->Cell(130, 10, 'Projetos', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(60, 10, $ext_doc2, 1, 0, 'C');
    $pdf->Cell(65, 10, $ext_titulo2, 1, 0, 'C');
    $pdf->Cell(65, 10, $ext_leader_project2, 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Estágio de extensão', 0, 1, 'C');

    $pdf->Cell(40, 10, 'Nª do Doc', 1, 0, 'C', true);
    $pdf->Cell(80, 10, 'Área de Conhecimento', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Instituição/Local', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(40, 10, $ext_estagio_doc, 1, 0, 'C');
    $pdf->Cell(80, 10, $ext_conhecimento, 1, 0, 'C');
    $pdf->Cell(70, 10, $ext_instituicao, 1, 0, 'C');
    $pdf->Ln();

    $pdf->Cell(95, 10, 'Período', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Carga Horária Semanal', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(95, 10, $ext_periodo, 1, 0, 'C');
    $pdf->Cell(95, 10, $ext_chs, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Atividade de Ensino não-formal', 0, 1, 'C');

    $pdf->Cell(30, 10, 'Nª do Doc', 1, 0, 'C', true);
    $pdf->Cell(100, 10, 'Atividades', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Carga Horária Semanal', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->Cell(30, 10, $ext_enf_doc, 1, 0, 'C');
    $pdf->Cell(100, 10, $ext_atividade, 1, 0, 'C');
    $pdf->Cell(60, 10, $ext_chs_total, 1, 0, 'C');
    $pdf->Ln();
    
    // Adicionando link para download do PDF
    $pdf->Output('extensao.pdf', 'D');
	
?>