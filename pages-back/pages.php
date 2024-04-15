<?php

require '../db-connection.php';
require ('fpdf/fpdf.php');

session_start();

$erro = false;

$id = $_SESSION['user_id'];

//home.php
$nome = mysqli_real_escape_string($conn, $_POST['user_name']);
$classe = mysqli_real_escape_string($conn, $_POST['classe']);
$regime_trabalho = mysqli_real_escape_string($conn, $_POST['regime_trabalho']);
$nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
$titulacao = mysqli_real_escape_string($conn, $_POST['titulacao']);
$locacao = mysqli_real_escape_string($conn, $_POST['lotacao']);
$empregador = mysqli_real_escape_string($conn, $_POST['empregador']);
$cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
$logradouro = mysqli_real_escape_string($conn, $_POST['logradouro']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
$uf = mysqli_real_escape_string($conn, $_POST['uf']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$email = mysqli_real_escape_string($conn, $_POST['user_email']);
$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);

//home.php (Ensino)
$chs_graduacao1 = mysqli_real_escape_string($conn, $_POST['chs_graduacao1']);
$chs_posgraduacao1 = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao1']);
$chs_total1 = mysqli_real_escape_string($conn, $_POST['chs_total1']);
$chs_graduacao2 = mysqli_real_escape_string($conn, $_POST['chs_graduacao2']);
$chs_posgraduacao2 = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao2']);
$chs_total2 = mysqli_real_escape_string($conn, $_POST['chs_total2']);
$apc_graduacao1 = mysqli_real_escape_string($conn, $_POST['apc_graduacao1']);
$apc_posgraduacao1 = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao1']);
$apc_total1 = mysqli_real_escape_string($conn, $_POST['apc_total1']);
$apc_graduacao2 = mysqli_real_escape_string($conn, $_POST['apc_graduacao2']);
$apc_posgraduacao2 = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao2']);
$apc_total2 = mysqli_real_escape_string($conn, $_POST['apc_total2']);
$aosrt_orientacao1 = mysqli_real_escape_string($conn, $_POST['aosrt_orientacao1']);
$aosrt_coorientacao1 = mysqli_real_escape_string($conn, $_POST['aosrt_co_orientacao1']);
$aosrt_supervisao1 = mysqli_real_escape_string($conn, $_POST['aosrt_supervisao1']);
$aosrt_perceptuto1 = mysqli_real_escape_string($conn, $_POST['aosrt_perceptuto1']);
$aosrt_total1 = mysqli_real_escape_string($conn, $_POST['aosrt_total1']);
$aosrt_orientacao2 = mysqli_real_escape_string($conn, $_POST['aosrt_orientacao2']);
$aosrt_co_orientacao2 = mysqli_real_escape_string($conn, $_POST['aosrt_co_orientacao2']);
$aosrt_supervisao2 = mysqli_real_escape_string($conn, $_POST['aosrt_supervisao2']);
$aosrt_perceptuto2 = mysqli_real_escape_string($conn, $_POST['aosrt_perceptuto2']);
$aosrt_total2 = mysqli_real_escape_string($conn, $_POST['aosrt_total2']);
$sa_doc = mysqli_real_escape_string($conn, $_POST['sa_doc']);
$sa_matricula = mysqli_real_escape_string($conn, $_POST['sa_matricula']);
$sa_curso = mysqli_real_escape_string($conn, $_POST['sa_curso']);
$sa_tipo = mysqli_real_escape_string($conn, $_POST['sa_tipo']);
$sa_nivel = mysqli_real_escape_string($conn, $_POST['sa_nivel']);
$sa_chs1 = mysqli_real_escape_string($conn, $_POST['sa_chs1']);
$sa_chs2 = mysqli_real_escape_string($conn, $_POST['sa_chs2']);
$rtr_doc = mysqli_real_escape_string($conn, $_POST['rtr_doc']);
$rtr_matricula = mysqli_real_escape_string($conn, $_POST['rtr_matricula']);
$rtr_tipo = mysqli_real_escape_string($conn, $_POST['rtr_tipo']);
$rtr_chs1 = mysqli_real_escape_string($conn, $_POST['rtr_chs1']);
$rtr_chs2 = mysqli_real_escape_string($conn, $_POST['rtr_chs2']);
$be_doc = mysqli_real_escape_string($conn, $_POST['be_doc']);
$be_descricao = mysqli_real_escape_string($conn, $_POST['be_descricao']);
$be_tipo = mysqli_real_escape_string($conn, $_POST['be_tipo']);
$be_chs1 = mysqli_real_escape_string($conn, $_POST['be_chs1']);
$be_chs2 = mysqli_real_escape_string($conn, $_POST['be_chs2']);
$ad_doc1 = mysqli_real_escape_string($conn, $_POST['ad_doc1']);
$ad_semestre1 = mysqli_real_escape_string($conn, $_POST['ad_semestre1']);
$ad_doc2 = mysqli_real_escape_string($conn, $_POST['ad_doc2']);
$ad_semestre = mysqli_real_escape_string($conn, $_POST['ad_semestre']);

//academica.php
//$aca_tabela = mysqli_real_escape_string($conn, $_POST['aca_table']);
$aca_titulo = mysqli_real_escape_string($conn, $_POST['aca_title']);
$aca_ini = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['aca_ini'])));
$aca_ter = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['aca_ter'])));
$aca_clientela = mysqli_real_escape_string($conn, $_POST['aca_clientela']);
$aca_description = mysqli_real_escape_string($conn, $_POST['aca_description']);

//administrativa.php
//$adm_table = mysqli_real_escape_string($conn, $_POST['adm_table']);
$adm_portaria = mysqli_real_escape_string($conn, $_POST['adm_portaria']);
$adm_emissor = mysqli_real_escape_string($conn, $_POST['adm_emissor']);
$adm_servido = mysqli_real_escape_string($conn, $_POST['adm_servido']);
$adm_descricao = mysqli_real_escape_string($conn, $_POST['adm_description']);

//extensao.php
$ext_doc1 = mysqli_real_escape_string($conn, $_POST['ext_doc1']);
$ext_titulo1 = mysqli_real_escape_string($conn, $_POST['ext_titulo1']);
$ext_leader_project1 = mysqli_real_escape_string($conn, $_POST['ext_leader_project1']);
$ext_doc2 = mysqli_real_escape_string($conn, $_POST['ext_doc2']);
$ext_titulo2 = mysqli_real_escape_string($conn, $_POST['ext_titulo2']);
$ext_leader_project2 = mysqli_real_escape_string($conn, $_POST['ext_leader_project2']);
$ext_estagio_doc = mysqli_real_escape_string($conn, $_POST['ext_estagio_doc']);
$ext_conhecimento = mysqli_real_escape_string($conn, $_POST['ext_conhecimento']);
$ext_instituicao = mysqli_real_escape_string($conn, $_POST['ext_instituicao']);
$ext_periodo = mysqli_real_escape_string($conn, $_POST['ext_periodo']);
$ext_chs = mysqli_real_escape_string($conn, $_POST['ext_chs']);
$ext_enf_doc = mysqli_real_escape_string($conn, $_POST['ext_enf_doc']);
$ext_atividade = mysqli_real_escape_string($conn, $_POST['ext_atividade']);
$ext_chs_total = mysqli_real_escape_string($conn, $_POST['ext_chs_total']);

//orientacao.php
//$tabela = mysqli_real_escape_string($conn, $_POST['ori_table']);
$ori_matricula = mysqli_real_escape_string($conn, $_POST['ori_matricula']);
$ori_curso = mysqli_real_escape_string($conn, $_POST['ori_curso']);
$ori_nivel = mysqli_real_escape_string($conn, $_POST['ori_nivel']);
$ori_ies = mysqli_real_escape_string($conn, $_POST['ori_ies']);
$ori_titulo_trabalho = mysqli_real_escape_string($conn, $_POST['ori_titulo_trabalho']);
$ori_data_inicio = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['ori_data_inicio'])));
$ori_data_termino = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['ori_data_termino'])));
$ori_tipo_orientacao = mysqli_real_escape_string($conn, $_POST['ori_tipo_orientacao']);

//projeto.php
$pro_codigo = mysqli_real_escape_string($conn, $_POST['pro_codigo']);
$pro_nome = mysqli_real_escape_string($conn, $_POST['pro_nome']);
$pro_data_inicio_efetiva = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['pro_data_inicio_efetiva'])));
$pro_data_termino_efetiva = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['pro_data_termino_efetiva'])));
$pro_tipo = mysqli_real_escape_string($conn, $_POST['pro_tipo']);
$pro_projeto = mysqli_real_escape_string($conn, $_POST['pro_projeto']);
$pro_docente = mysqli_real_escape_string($conn, $_POST['pro_docente']);

//qualificação.php
$qua_data_inicio = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['qua_data_inicio'])));
$qua_data_termino = mysqli_real_escape_string($conn, date('d/m/Y', strtotime($_POST['qua_data_termino'])));
$qua_descricao = mysqli_real_escape_string($conn, $_POST['qua_descricao']);

//gestão.php
$ges_num_doc = mysqli_real_escape_string($conn, $_POST['ges_num_doc']);
$ges_funcao = mysqli_real_escape_string($conn, $_POST['ges_funcao']);
$ges_semana = mysqli_real_escape_string($conn, $_POST['ges_semana']);
$ges_chs = mysqli_real_escape_string($conn, $_POST['ges_chs']);
$ges_designacao = mysqli_real_escape_string($conn, $_POST['ges_designacao']);
$ges_periodo = mysqli_real_escape_string($conn, $_POST['ges_periodo']);

if(isset($id)){
	if(isset($_POST['formulario'])){
	$formulario = $_POST['formulario'];

	switch($formulario){
	case 1:
$stmt1 = $conn->prepare("INSERT INTO home (user_name, classe, regime_trabalho, nivel, titulacao, lotacao, empregador, cargo, logradouro, cidade, bairro, uf, cep, email, telefone, user_id)  VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt1->bind_param("sssssssssssssssssi", $nome, $classe, $regime_trabalho, $nivel, $titulacao, $lotacao, $empregador, $cargo, $logradouro, $cidade, $bairro, $uf, $cep, $email, $telefone, $id);

	if(!$erro){
    	if ($stmt1->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/home.php");
	
		if($_SERVER["REQUEST_METHOD"] == "POST"){

    	// Gerar o PDF
    	$pdf = new FPDF();
    	$pdf->AddPage();

    	//Título
    	$pdf->SetFont('Arial', 'B', 16);
    	$pdf->SetFillColor(230, 230, 230);
    	$pdf->Cell(0, 10, 'Informações Principais', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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

		}else{
    		header("Location: index.html");
		}
    	} else {
        echo "Erro: " . $stmt1->error;
    	}
	$stmt1->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}


	break;
	
	case 2:
$stmt2 = $conn->prepare("INSERT INTO ensino (chs_graduacao1, chs_pos_graduacao1, chs_total1, chs_graduacao2, chs_pos_graduacao2, chs_total2, apc_graduacao1, apc_pos_graduacao1, apc_total1, apc_graduacao2, apc_pos_graduacao2, apc_total2, aosrt_orientacao1, aosrt_co_orientacao1, aosrt_supervisao1, aosrt_perceptuto1, aosrt_total1, aosrt_orientacao2, aosrt_co_orientacao2, aosrt_supervisao2, aosrt_perceptuto2, aosrt_total2, sa_doc, sa_matricula, sa_curso, sa_tipo, sa_nivel, sa_chs1, sa_chs2, rtr_doc, rtr_matricula, rtr_tipo, rtr_chs1, rtr_chs2, be_doc, be_descricao, be_tipo, be_chs1, be_chs2, ad_doc1, ad_semestre1, ad_doc2, ad_semestre, user_id)  VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt2->bind_param("ssssssssssssssssssssssssssssssssssssssssssssi", $chs_graduacao1, $chs_posgraduacao1, $chs_total1, $chs_graduacao2, $chs_posgraduacao2, $chs_total2, $apc_graduacao1, $apc_posgraduacao1, $apc_total1, $apc_graduacao2, $apc_posgraduacao2, $apc_total2, $aosrt_orientacao1, $aosrt_coorientacao1, $aosrt_supervisao1, $aosrt_perceptuto1, $aosrt_total1, $aosrt_orientacao2, $aosrt_co_orientacao2, $aosrt_supervisao2, $aosrt_perceptuto2, $aosrt_total2, $sa_doc, $sa_matricula, $sa_curso, $sa_tipo, $sa_nivel, $sa_chs1, $sa_chs2, $rtr_doc, $rtr_matricula, $rtr_tipo, $rtr_chs1, $rtr_chs2, $be_doc, $be_descricao, $be_tipo, $be_chs1, $be_chs2, $ad_doc1, $ad_semestre1, $ad_doc2, $ad_semestre, $id);

	if(!$erro){
    	if ($stmt2->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/home.php");

		// Verifica se o formulário foi submetido
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'ENSINO', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Cálculo da CH semanal de aulas', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Pós-Graduação', 1, 0, 'C', true);
    $pdf->Cell(25, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(70, 10, $chs_graduacao1, 1, 0, 'C');
    $pdf->Cell(70, 10, $chs_posgraduacao1, 1, 0, 'C');
    $pdf->Cell(25, 10, $chs_total1, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(70, 10, $chs_graduacao2, 1, 0, 'C');
    $pdf->Cell(70, 10, $chs_posgraduacao2, 1, 0, 'C');
    $pdf->Cell(25, 10, $chs_total2, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Atividades pedagógicas complementares', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 10, 'Semestre', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Graduação', 1, 0, 'C', true);
    $pdf->Cell(70, 10, 'Pós-Graduação', 1, 0, 'C', true);
    $pdf->Cell(25, 10, 'Total', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '1ª', 1, 0, 'C', true);
    $pdf->Cell(70, 10, $apc_graduacao1, 1, 0, 'C');
    $pdf->Cell(70, 10, $apc_posgraduacao1, 1, 0, 'C');
    $pdf->Cell(25, 10, $apc_total1, 1, 0, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(25, 10, '2ª', 1, 0, 'C', true);
    $pdf->Cell(70, 10, $apc_graduacao2, 1, 0, 'C');
    $pdf->Cell(70, 10, $apc_posgraduacao2, 1, 0, 'C');
    $pdf->Cell(25, 10, $apc_total2, 1, 0, 'C');
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

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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
	}else {
    	// Se o formulário não foi submetido, redireciona de volta para a página anterior
    	header("Location: index.html");
	}    

    	} else {
        echo "Erro: " . $stmt2->error;
    	}
	$stmt2->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	

	break;

	case 3:
	$stmt3 = $conn->prepare("INSERT INTO orientacao (ori_matricula, ori_curso, ori_nivel, ori_ies, ori_titulo_trabalho, ori_data_inicio, ori_data_termino, 	ori_tipo_orientacao, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt3->bind_param("ssssssssi", $ori_matricula, $ori_curso, $ori_nivel, $ori_ies, $ori_titulo_trabalho, $ori_data_inicio, $ori_data_termino, 	$ori_tipo_orientacao, $id);

	if(!$erro){
    	if ($stmt3->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/orientacao.php");

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'ORIENTAÇÃO', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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
		} else {
    		// Se o formulário não foi submetido, redireciona de volta para a página anterior
    		header("Location: index.html");
		}

    	} else {
        echo "Erro: " . $stmt3->error;
    	}
	$stmt3->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	case 4:

	$stmt4 = $conn->prepare("INSERT INTO projeto (pro_codigo, pro_nome, pro_data_inicio_efetiva, pro_data_termino_efetiva, pro_tipo, pro_projeto, pro_docente, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt4->bind_param("sssssssi", $pro_codigo, $pro_nome, $pro_data_inicio_efetiva, $pro_data_termino_efetiva, $pro_tipo, $pro_projeto, $pro_docente, $id);

	if(!$erro){
    	if ($stmt4->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/projeto.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Projeto', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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
}else{
    header("Location: index.html");
}
    	} else {
        echo "Erro: " . $stmt4->error;
    	}
	$stmt4->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	case 5:
	$stmt5 = $conn->prepare("INSERT INTO extensao (ext_doc1, ext_titulo_1, ext_leader_project1, ext_doc2, ext_titulo_2, ext_leader_project2, ext_estagio_doc, ext_conhecimento, ext_instituicao, ext_periodo, ext_chs, ext_enf_doc, ext_atividade, ext_chs_total, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ?)");

	$stmt5->bind_param("ssssssssssssssi", $ext_doc, $ext_titulo_projeto, $ext_lideranca, $ext_area_conhecimento, $ext_instituicao, $ext_periodo, $ext_chs_semanal, $ext_enf_doc, $ext_atividade, $ext_chs_total, $id);

	if(!$erro){
    	if ($stmt5->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/extensao.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Extensão', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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
	}else{
    	header("Location: index.html");
		}
    } else {
    echo "Erro: " . $stmt5->error;
    }
$stmt5->close();
}else{
    echo "<script>Você está offline. Volte para a área de login.</script>";
    header("Location: ../index.html");
    exit();
}
break;

	case 6:
	$stmt6 = $conn->prepare("INSERT INTO gestao (ges_num_doc, ges_funcao, ges_semana, ges_chs, ges_designacao, ges_periodo, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?)");

	$stmt6->bind_param("ssssssssi", $ges_num_doc, $ges_funcao, $ges_semana, $ges_chs, $ges_designacao, $ges_periodo, $id);

	if(!$erro){
    	if ($stmt6->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/gestao.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades de Gestão e Representação', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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

		}else{
    		header("Location: index.html");
		}
    	} else {
        echo "Erro: " . $stmt6->error;
    	}
	$stmt6->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	case 7:
	$stmt7 = $conn->prepare("INSERT INTO qualificacao (qua_data_inicio, qua_data_termino, qua_descricao, user_id) 	VALUES 	(?, ?, ?, ?)");

	$stmt7->bind_param("sssi", $qua_data_inicio, $qua_data_termino, $qua_descricao, $id);

	if(!$erro){
    	if ($stmt7->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/qualificação.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Qualificação', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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
	}else{
    	header("Location: index.html");
	}
    	} else {
        echo "Erro: " . $stmt7->error;
    	}
	$stmt7->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	case 8:
	$stmt8 = $conn->prepare("INSERT INTO academica (aca_titulo, aca_ini, aca_ter, aca_clientela, aca_description, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?)");

	$stmt8->bind_param("sssssi", $aca_titulo, $aca_ini, $aca_ter, $aca_clientela, $aca_description, $id);

	if(!$erro){
    	if ($stmt8->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/academica.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades Academica', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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

	}else{
    	header("Location: index.html");
	}
    	} else {
        echo "Erro: " . $stmt8->error;
    	}
	$stmt8->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	case 9:
	$stmt9 = $conn->prepare("INSERT INTO administrativa (adm_table, adm_portaria, adm_emissor, adm_servido, adm_descricao, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?)");

	$stmt9->bind_param("sssssi", $adm_table, $adm_portaria, $adm_emissor, $adm_servido, $adm_descricao, $id);

	if(!$erro){
    	if ($stmt9->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/administrativa.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
    //administrativa.php
    //$adm_table = mysqli_real_escape_string($conn, $_POST['adm_table']);
    $adm_portaria = $_POST['adm_portaria'];
    $adm_emissor = $_POST['adm_emissor'];
    $adm_servido = $_POST['adm_servido'];
    $adm_descricao = $_POST['adm_description'];

    // Gerar o PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    //Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(0, 10, 'Atividades Administrativas', 0, 1, 'C');

    //Logo
    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem esquerda
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $pdf->Image('ufra.png', $margin, $pdf->GetY() - 10, $logoWidth, $logoHeight);
    $pdf->Ln(20);

    $logoWidth = 20; // Largura da logo
    $margin = 10; // Margem direita
    $logoHeight = $logoWidth; // Altura da logo proporcional à largura
    $logoX = $pdf->GetPageWidth() - $margin - $logoWidth;
    $pdf->Image('ufra.png', $logoX, $pdf->GetY() - 30, $logoWidth, $logoHeight);

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

		}else{
    		header("Location: index.html");
		}
    	} else {
        echo "Erro: " . $stmt9->error;
    	}
	$stmt9->close();
	}else{
    	echo "<script>Você está offline. Volte para a área de login.</script>";
    	header("Location: ../index.html");
    	exit();
	}
	break;

	}
}

$conn->close();
}

