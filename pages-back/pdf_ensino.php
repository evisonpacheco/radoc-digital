<?php

session_start();

$chs_graduacao1 = $_SESSION['chs_graduacao1'];
$chs_graduacao1_total = $_SESSION['chs_graduacao1_total'];
$chs_graduacao2 = $_SESSION['chs_graduacao2'];
$chs_graduacao2_total = $_SESSION['chs_graduacao2_total'];
$chs_posgraduacao1 = $_SESSION['chs_posgraduacao1'];
$chs_posgraduacao1_total = $_SESSION['chs_posgraduacao1_total'];
$chs_posgraduacao2 = $_SESSION['chs_posgraduacao2'];
$chs_posgraduacao2_total = $_SESSION['chs_posgraduacao2_total'];
$apc_graduacao1 = $_SESSION['apc_graduacao1'];
$apc_graduacao1_total = $_SESSION['apc_graduacao1_total'];
$apc_graduacao2 = $_SESSION['apc_graduacao2'];
$apc_graduacao2_total = $_SESSION['apc_graduacao2_total'];
$apc_posgraduacao1 = $_SESSION['apc_posgraduacao1'];
$apc_posgraduacao1_total = $_SESSION['apc_posgraduacao1_total'];
$apc_posgraduacao2 = $_SESSION['apc_posgraduacao2'];
$apc_posgraduacao2_total = $_SESSION['apc_posgraduacao2_total'];
$aosrt_orientacao1 = $_SESSION['aosrt_orientacao1'];
$aosrt_coorientacao1 = $_SESSION['aosrt_coorientacao1'];
$aosrt_supervisao1 = $_SESSION['aosrt_supervisao1'];
$aosrt_perceptuto1 = $_SESSION['aosrt_perceptuto1'];
$aosrt_total1 = $_SESSION['aosrt_total1'];
$aosrt_orientacao2 = $_SESSION['aosrt_orientacao2'];
$aosrt_coorientacao2 = $_SESSION['aosrt_coorientacao2'];
$aosrt_supervisao2 = $_SESSION['aosrt_supervisao2'];
$aosrt_perceptuto2 = $_SESSION['aosrt_perceptuto2'];
$aosrt_total2 = $_SESSION['aosrt_total2'];
$sa_doc = $_SESSION['sa_doc'];
$sa_matricula = $_SESSION['sa_matricula'];
$sa_curso = $_SESSION['sa_curso'];
$sa_tipo = $_SESSION['sa_tipo'];
$sa_nivel = $_SESSION['sa_nivel'];
$sa_chs1 = $_SESSION['sa_chs1'];
$sa_chs2 = $_SESSION['sa_chs2'];
$rtr_doc = $_SESSION['rtr_doc'];
$rtr_matricula = $_SESSION['rtr_matricula'];
$rtr_tipo = $_SESSION['rtr_tipo'];
$rtr_chs1 = $_SESSION['rtr_chs1'];
$rtr_chs2 = $_SESSION['rtr_chs2'];
$be_doc = $_SESSION['be_doc'];
$be_descricao = $_SESSION['be_descricao'];
$be_tipo = $_SESSION['be_tipo'];
$be_chs1 = $_SESSION['be_chs1'];
$be_chs2 = $_SESSION['be_chs2'];
$ad_doc1 = $_SESSION['ad_doc1'];
$ad_semestre1 = $_SESSION['ad_semestre1'];
$ad_doc2 = $_SESSION['ad_doc2'];
$ad_semestre2 = $_SESSION['ad_semestre2'];

	require('fpdf/fpdf.php');
	
	// Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'ENSINO', 0, 1, 'C');

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

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Cálculo da CH semanal de aulas', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(90, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $chs_graduacao1, 1, 0, 'C');
    $pdf->Cell(50, 10, $chs_graduacao1_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $chs_graduacao2, 1, 0, 'C');
    $pdf->Cell(50, 10, $chs_graduacao2_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(90, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $chs_posgraduacao1, 1, 0, 'C');
    $pdf->Cell(50, 10, $chs_posgraduacao1_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $chs_posgraduacao2, 1, 0, 'C');
    $pdf->Cell(50, 10, $chs_posgraduacao2_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Atividades pedagógicas complementares', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(90, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $apc_graduacao1, 1, 0, 'C');
    $pdf->Cell(50, 10, $apc_graduacao1_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $apc_graduacao2, 1, 0, 'C');
    $pdf->Cell(50, 10, $apc_graduacao2_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(90, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $apc_posgraduacao1, 1, 0, 'C');
    $pdf->Cell(50, 10, $apc_posgraduacao1_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(90, 10, $apc_posgraduacao2, 1, 0, 'C');
    $pdf->Cell(50, 10, $apc_posgraduacao2_total, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Atividades de orientação/supervisão receptoria e tutoria', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Orientação', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Co-orientação', 1, 0, 'C', true);
    $pdf->Cell(25, 10, 'Supervisão', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Receptoria e/ou Tutoria', 1, 0, 'C', true);
    $pdf->Cell(20, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(30, 10, $aosrt_orientacao1, 1, 0, 'C');
    $pdf->Cell(30, 10, $aosrt_coorientacao1, 1, 0, 'C');
    $pdf->Cell(25, 10, $aosrt_supervisao1, 1, 0, 'C');
    $pdf->Cell(60, 10, $aosrt_perceptuto1, 1, 0, 'C');
    $pdf->Cell(20, 10, $aosrt_total1, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(30, 10, $aosrt_orientacao2, 1, 0, 'C');
    $pdf->Cell(30, 10, $aosrt_coorientacao2, 1, 0, 'C');
    $pdf->Cell(25, 10, $aosrt_supervisao2, 1, 0, 'C');
    $pdf->Cell(60, 10, $aosrt_perceptuto2, 1, 0, 'C');
    $pdf->Cell(20, 10, $aosrt_total2, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Supervisão Acadêmica', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Nª do doc', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Matrícula', 1, 0, 'C', true);
    $pdf->Cell(30, 10, 'Curso', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Tipo', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Nível', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(30, 10, $sa_doc, 1, 0, 'C');
    $pdf->Cell(30, 10, $sa_matricula, 1, 0, 'C');
    $pdf->Cell(30, 10, $sa_curso, 1, 0, 'C');
    $pdf->Cell(50, 10, $sa_tipo, 1, 0, 'C');
    $pdf->Cell(50, 10, $sa_nivel, 1, 0, 'C');
    $pdf->Ln();


    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Carga Horária semanal do 1ª semestre', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Carga Horária semanal do 2ª semestre', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(95, 10, $sa_chs1, 1, 0, 'C');
    $pdf->Cell(95, 10, $sa_chs2, 1, 0, 'C');
    $pdf->Ln();

    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'ENSINO', 0, 1, 'C');

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

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Receptoria e/ou tutoria de residência', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Nª do doc', 1, 0, 'C', true);
    $pdf->Cell(35, 10, 'Matrícula', 1, 0, 'C', true);
    $pdf->Cell(35, 10, 'Tipo', 1, 0, 'C', true);
    $pdf->Cell(45, 10, 'CH semanal - 1ª sem', 1, 0, 'C', true);
    $pdf->Cell(45, 10, 'CH semanal - 2ª sem', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, $rtr_doc, 1, 0, 'C');
    $pdf->Cell(35, 10, $rtr_matricula, 1, 0, 'C');
    $pdf->Cell(35, 10, $rtr_tipo, 1, 0, 'C');
    $pdf->Cell(45, 10, $rtr_chs1, 1, 0, 'C');
    $pdf->Cell(45, 10, $rtr_chs1, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Banca examinadora', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Nª do doc', 1, 0, 'C', true);
    $pdf->Cell(35, 10, 'Matrícula', 1, 0, 'C', true);
    $pdf->Cell(35, 10, 'Tipo', 1, 0, 'C', true);
    $pdf->Cell(45, 10, 'CH semanal - 1ª sem', 1, 0, 'C', true);
    $pdf->Cell(45, 10, 'CH semanal - 2ª sem', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, $be_doc, 1, 0, 'C');
    $pdf->Cell(35, 10, $be_descricao, 1, 0, 'C');
    $pdf->Cell(35, 10, $be_tipo, 1, 0, 'C');
    $pdf->Cell(45, 10, $be_chs1, 1, 0, 'C');
    $pdf->Cell(45, 10, $be_chs1, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Avaliação Discente', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Nª do doc', 1, 0, 'C', true);
    $pdf->Cell(45, 10, '1ª semestre', 1, 0, 'C', true);
    $pdf->Cell(45, 10, 'Nª do doc', 1, 0, 'C', true);
    $pdf->Cell(50, 10, '2ª semestre', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, $rtr_doc, 1, 0, 'C');
    $pdf->Cell(45, 10, $rtr_matricula, 1, 0, 'C');
    $pdf->Cell(45, 10, $rtr_tipo, 1, 0, 'C');
    $pdf->Cell(50, 10, $rtr_chs1, 1, 0, 'C');
    $pdf->Ln();


    // Adicionando link para download do PDF
    $pdf->Output('ensino.pdf', 'D');

?>