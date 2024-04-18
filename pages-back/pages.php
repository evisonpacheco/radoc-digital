<?php

require '../db-connection.php';

session_start();

$erro = false;

$id = $_SESSION['user_id'];

if(isset($id)){
	if(isset($_POST['formulario'])){
	$formulario = $_POST['formulario'];

	switch($formulario){
	case 1:
	
	//home.php
	$_SESSION['nome'] = mysqli_real_escape_string($conn, $_POST['user_name']);
	$_SESSION['classe'] = mysqli_real_escape_string($conn, $_POST['classe']);
	$_SESSION['regime_trabalho'] = mysqli_real_escape_string($conn, $_POST['regime_trabalho']);
	$_SESSION['nivel'] = mysqli_real_escape_string($conn, $_POST['nivel']);
	$_SESSION['titulacao'] = mysqli_real_escape_string($conn, $_POST['titulacao']);
	$_SESSION['lotacao'] = mysqli_real_escape_string($conn, $_POST['lotacao']);
	$_SESSION['empregador'] = mysqli_real_escape_string($conn, $_POST['empregador']);
	$_SESSION['cargo'] = mysqli_real_escape_string($conn, $_POST['cargo']);
	$_SESSION['logradouro'] = mysqli_real_escape_string($conn, $_POST['logradouro']);
	$_SESSION['cidade'] = mysqli_real_escape_string($conn, $_POST['cidade']);
	$_SESSION['bairro'] = mysqli_real_escape_string($conn, $_POST['bairro']);
	$_SESSION['uf'] = mysqli_real_escape_string($conn, $_POST['uf']);
	$_SESSION['cep'] = mysqli_real_escape_string($conn, $_POST['cep']);
	$_SESSION['email'] = mysqli_real_escape_string($conn, $_POST['user_email']);
	$_SESSION['telefone'] = mysqli_real_escape_string($conn, $_POST['telefone']);
	
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

	$stmt1 = $conn->prepare("INSERT INTO home (user_name, classe, regime_trabalho, nivel, titulacao, lotacao, empregador, cargo, logradouro, cidade, bairro, uf, cep, user_email, telefone, user_id)  VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt1->bind_param("sssssssssssssssi", $nome, $classe, $regime_trabalho, $nivel, $titulacao, $lotacao, $empregador, $cargo, $logradouro, $cidade, $bairro, $uf, $cep, $email, $telefone, $id);

	if(!$erro){
    if ($stmt1->execute()) {
       echo "<script>alert('Informações enviadas com sucesso!')</script>";
       header("Refresh: 0.2; url=../pages/home.php");
	
		if($_SERVER["REQUEST_METHOD"] == "POST"){

			header("Location: pdf_home.php");
			exit();

		}else{
    		header("Location: ../index.html");
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
	
	//home.php (Ensino)
	$_SESSION['chs_graduacao1'] = mysqli_real_escape_string($conn, $_POST['chs_graduacao1']);
	$_SESSION['chs_graduacao1_total'] = mysqli_real_escape_string($conn, $_POST['chs_graduacao1_total']);
	$_SESSION['chs_graduacao2'] = mysqli_real_escape_string($conn, $_POST['chs_graduacao2']);
	$_SESSION['chs_graduacao2_total'] = mysqli_real_escape_string($conn, $_POST['chs_graduacao2_total']);
	$_SESSION['chs_posgraduacao1'] = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao1']);
	$_SESSION['chs_posgraduacao1_total'] = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao1_total']);
	$_SESSION['chs_posgraduacao2'] = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao2']);
	$_SESSION['chs_posgraduacao2_total'] = mysqli_real_escape_string($conn, $_POST['chs_pos_graduacao2_total']);
	$_SESSION['apc_graduacao1'] = mysqli_real_escape_string($conn, $_POST['apc_graduacao1']);
	$_SESSION['apc_graduacao1_total'] = mysqli_real_escape_string($conn, $_POST['apc_graduacao1_total']);
	$_SESSION['apc_graduacao2'] = mysqli_real_escape_string($conn, $_POST['apc_graduacao2']);
	$_SESSION['apc_graduacao2_total'] = mysqli_real_escape_string($conn, $_POST['apc_graduacao2_total']);
	$_SESSION['apc_posgraduacao1'] = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao1']);
	$_SESSION['apc_posgraduacao1_total'] = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao1_total']);
	$_SESSION['apc_posgraduacao2'] = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao2']);
	$_SESSION['apc_posgraduacao2_total'] = mysqli_real_escape_string($conn, $_POST['apc_pos_graduacao2_total']);
	$_SESSION['aosrt_orientacao1'] = mysqli_real_escape_string($conn, $_POST['aosrt_orientacao1']);
	$_SESSION['aosrt_coorientacao1'] = mysqli_real_escape_string($conn, $_POST['aosrt_co_orientacao1']);
	$_SESSION['aosrt_supervisao1'] = mysqli_real_escape_string($conn, $_POST['aosrt_supervisao1']);
	$_SESSION['aosrt_perceptuto1'] = mysqli_real_escape_string($conn, $_POST['aosrt_perceptuto1']);
	$_SESSION['aosrt_total1'] = mysqli_real_escape_string($conn, $_POST['aosrt_total1']);
	$_SESSION['aosrt_orientacao2'] = mysqli_real_escape_string($conn, $_POST['aosrt_orientacao2']);
	$_SESSION['aosrt_coorientacao2'] = mysqli_real_escape_string($conn, $_POST['aosrt_co_orientacao2']);
	$_SESSION['aosrt_supervisao2'] = mysqli_real_escape_string($conn, $_POST['aosrt_supervisao2']);
	$_SESSION['aosrt_perceptuto2'] = mysqli_real_escape_string($conn, $_POST['aosrt_perceptuto2']);
	$_SESSION['aosrt_total2'] = mysqli_real_escape_string($conn, $_POST['aosrt_total2']);
	$_SESSION['sa_doc'] = mysqli_real_escape_string($conn, $_POST['sa_doc']);
	$_SESSION['sa_matricula'] = mysqli_real_escape_string($conn, $_POST['sa_matricula']);
	$_SESSION['sa_curso'] = mysqli_real_escape_string($conn, $_POST['sa_curso']);
	$_SESSION['sa_tipo'] = mysqli_real_escape_string($conn, $_POST['sa_tipo']);
	$_SESSION['sa_nivel'] = mysqli_real_escape_string($conn, $_POST['sa_nivel']);
	$_SESSION['sa_chs1'] = mysqli_real_escape_string($conn, $_POST['sa_chs1']);
	$_SESSION['sa_chs2'] = mysqli_real_escape_string($conn, $_POST['sa_chs2']);
	$_SESSION['rtr_doc'] = mysqli_real_escape_string($conn, $_POST['rtr_doc']);
	$_SESSION['rtr_matricula'] = mysqli_real_escape_string($conn, $_POST['rtr_matricula']);
	$_SESSION['rtr_tipo'] = mysqli_real_escape_string($conn, $_POST['rtr_tipo']);
	$_SESSION['rtr_chs1'] = mysqli_real_escape_string($conn, $_POST['rtr_chs1']);
	$_SESSION['rtr_chs2'] = mysqli_real_escape_string($conn, $_POST['rtr_chs2']);
	$_SESSION['be_doc'] = mysqli_real_escape_string($conn, $_POST['be_doc']);
	$_SESSION['be_descricao'] = mysqli_real_escape_string($conn, $_POST['be_descricao']);
	$_SESSION['be_tipo'] = mysqli_real_escape_string($conn, $_POST['be_tipo']);
	$_SESSION['be_chs1'] = mysqli_real_escape_string($conn, $_POST['be_chs1']);
	$_SESSION['be_chs2'] = mysqli_real_escape_string($conn, $_POST['be_chs2']);
	$_SESSION['ad_doc1'] = mysqli_real_escape_string($conn, $_POST['ad_doc1']);
	$_SESSION['ad_semestre1'] = mysqli_real_escape_string($conn, $_POST['ad_semestre1']);
	$_SESSION['ad_doc2'] = mysqli_real_escape_string($conn, $_POST['ad_doc2']);
	$_SESSION['ad_semestre2'] = mysqli_real_escape_string($conn, $_POST['ad_semestre2']);
	
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
	
	$stmt2 = $conn->prepare("INSERT INTO ensino (chs_graduacao1, chs_graduacao1_total, chs_graduacao2, chs_graduacao2_total, chs_pos_graduacao1, chs_pos_graduacao1_total, chs_pos_graduacao2, chs_pos_graduacao2_total, apc_graduacao1, apc_graduacao1_total, apc_graduacao2, apc_graduacao2_total, apc_pos_graduacao1, apc_pos_graduacao1_total, apc_pos_graduacao2, apc_pos_graduacao2_total, aosrt_orientacao1, aosrt_co_orientacao1, aosrt_supervisao1, aosrt_perceptuto1, aosrt_total1, aosrt_orientacao2, aosrt_co_orientacao2, aosrt_supervisao2, aosrt_perceptuto2, aosrt_total2, sa_doc, sa_matricula, sa_curso, sa_tipo, sa_nivel, sa_chs1, sa_chs2, rtr_doc, rtr_matricula, rtr_tipo, rtr_chs1, rtr_chs2, be_doc, be_descricao, be_tipo, be_chs1, be_chs2, ad_doc1, ad_semestre1, ad_doc2, ad_semestre2, user_id)  VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt2->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiisssssiisssiisssiissssi", $chs_graduacao1, $chs_graduacao1_total, $chs_graduacao2, $chs_graduacao2_total, $chs_posgraduacao1, $chs_posgraduacao1_total, $chs_posgraduacao2, $chs_posgraduacao2_total, $apc_graduacao1, $apc_graduacao1_total, $apc_graduacao2, $apc_graduacao2_total, $apc_posgraduacao1, $apc_posgraduacao1_total, $apc_posgraduacao2, $apc_posgraduacao2_total, $aosrt_orientacao1, $aosrt_coorientacao1, $aosrt_supervisao1, $aosrt_perceptuto1, $aosrt_total1, $aosrt_orientacao2, $aosrt_coorientacao2, $aosrt_supervisao2, $aosrt_perceptuto2, $aosrt_total2, $sa_doc, $sa_matricula, $sa_curso, $sa_tipo, $sa_nivel, $sa_chs1, $sa_chs2, $rtr_doc, $rtr_matricula, $rtr_tipo, $rtr_chs1, $rtr_chs2, $be_doc, $be_descricao, $be_tipo, $be_chs1, $be_chs2, $ad_doc1, $ad_semestre1, $ad_doc2, $ad_semestre2, $id);

	if(!$erro){
    	if ($stmt2->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/home.php");

		// Verifica se o formulário foi submetido
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			header("Location: pdf_ensino.php");
			exit();
	}else {
    	// Se o formulário não foi submetido, redireciona de volta para a página anterior
    	header("Location: ../index.html");
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
	
	//orientacao.php
	//$tabela = mysqli_real_escape_string($conn, $_POST['ori_table']);
	$_SESSION['ori_matricula'] = mysqli_real_escape_string($conn, $_POST['ori_matricula']);
	$_SESSION['ori_curso'] = mysqli_real_escape_string($conn, $_POST['ori_curso']);
	$_SESSION['ori_nivel'] = mysqli_real_escape_string($conn, $_POST['ori_nivel']);
	$_SESSION['ori_ies'] = mysqli_real_escape_string($conn, $_POST['ori_ies']);
	$_SESSION['ori_titulo_trabalho'] = mysqli_real_escape_string($conn, $_POST['ori_titulo_trabalho']);
	$_SESSION['ori_data_inicio'] = mysqli_real_escape_string($conn, date('Y-m-d', strtotime($_POST['ori_data_inicio'])));
	$_SESSION['ori_data_termino'] = mysqli_real_escape_string($conn, date('Y-m-d', strtotime($_POST['ori_data_termino'])));
	$_SESSION['ori_tipo_orientacao'] = mysqli_real_escape_string($conn, $_POST['ori_tipo_orientacao']);
	
	$ori_matricula = $_SESSION['ori_matricula'];
	$ori_curso = $_SESSION['ori_curso'];
	$ori_nivel = $_SESSION['ori_nivel'];
	$ori_ies = $_SESSION['ori_ies'];
	$ori_titulo_trabalho = $_SESSION['ori_titulo_trabalho'];
	$ori_tipo_orientacao = $_SESSION['ori_tipo_orientacao'];
	
	$stmt3 = $conn->prepare("INSERT INTO orientacao (ori_matricula, ori_curso, ori_nivel, ori_ies, ori_titulo_trabalho, ori_data_inicio, ori_data_termino, 	ori_tipo_orientacao, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt3->bind_param("ssssssssi", $ori_matricula, $ori_curso, $ori_nivel, $ori_ies, $ori_titulo_trabalho, $_SESSION['ori_data_inicio'], $_SESSION['ori_data_termino'], $ori_tipo_orientacao, $id);

	if(!$erro){
    	if ($stmt3->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/orientacao.php");

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			header("Location: pdf_orientacao.php");
			exit();
		} else {
    		// Se o formulário não foi submetido, redireciona de volta para a página anterior
    		header("Location: ../index.html");
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
	
	//projeto.php
	$_SESSION['pro_codigo'] = mysqli_real_escape_string($conn, $_POST['pro_codigo']);
	$_SESSION['pro_nome'] = mysqli_real_escape_string($conn, $_POST['pro_nome']);
	$_SESSION['pro_data_inicio_efetiva'] = mysqli_real_escape_string($conn, date('Y-m-d', strtotime($_POST['pro_data_inicio_efetiva'])));
	$_SESSION['pro_data_termino_efetiva'] = mysqli_real_escape_string($conn, date('Y-m-d', strtotime($_POST['pro_data_termino_efetiva'])));
	$_SESSION['pro_tipo'] = mysqli_real_escape_string($conn, $_POST['pro_tipo']);
	$_SESSION['pro_projeto'] = mysqli_real_escape_string($conn, $_POST['pro_projeto']);
	$_SESSION['pro_docente'] = mysqli_real_escape_string($conn, $_POST['pro_docente']);
	
	$pro_codigo = $_SESSION['pro_codigo'];
	$pro_nome = $_SESSION['pro_nome'];
	$pro_tipo = $_SESSION['pro_tipo'];
	$pro_projeto = $_SESSION['pro_projeto'];
	$pro_docente = $_SESSION['pro_docente'];

	$stmt4 = $conn->prepare("INSERT INTO projeto (pro_codigo, pro_nome, pro_data_inicio_efetiva, pro_data_termino_efetiva, pro_tipo, pro_projeto, pro_docente, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt4->bind_param("sssssssi", $pro_codigo, $pro_nome, $_SESSION['pro_data_inicio_efetiva'], $_SESSION['pro_data_termino_efetiva'], $pro_tipo, $pro_projeto, $pro_docente, $id);

	if(!$erro){
    	if ($stmt4->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/projeto.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		header("Location: pdf_projeto.php");
		exit();
    
	}else{
    header("Location: ../index.html");
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
	
	//extensao.php
	$_SESSION['ext_doc1'] = mysqli_real_escape_string($conn, $_POST['ext_doc1']);
	$_SESSION['ext_titulo1'] = mysqli_real_escape_string($conn, $_POST['ext_titulo1']);
	$_SESSION['ext_leader_project1'] = mysqli_real_escape_string($conn, $_POST['ext_leader_project1']);
	$_SESSION['ext_doc2'] = mysqli_real_escape_string($conn, $_POST['ext_doc2']);
	$_SESSION['ext_titulo2'] = mysqli_real_escape_string($conn, $_POST['ext_titulo2']);
	$_SESSION['ext_leader_project2'] = mysqli_real_escape_string($conn, $_POST['ext_leader_project2']);
	$_SESSION['ext_estagio_doc'] = mysqli_real_escape_string($conn, $_POST['ext_estagio_doc']);
	$_SESSION['ext_conhecimento'] = mysqli_real_escape_string($conn, $_POST['ext_conhecimento']);
	$_SESSION['ext_instituicao'] = mysqli_real_escape_string($conn, $_POST['ext_instituicao']);
	$_SESSION['ext_periodo'] = mysqli_real_escape_string($conn, $_POST['ext_periodo']);
	$_SESSION['ext_chs'] = mysqli_real_escape_string($conn, $_POST['ext_chs']);
	$_SESSION['ext_enf_doc'] = mysqli_real_escape_string($conn, $_POST['ext_enf_doc']);
	$_SESSION['ext_atividade'] = mysqli_real_escape_string($conn, $_POST['ext_atividade']);
	$_SESSION['ext_chs_total'] = mysqli_real_escape_string($conn, $_POST['ext_chs_total']);
	
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
	
	$stmt5 = $conn->prepare("INSERT INTO extensao (ext_doc1, ext_titulo1, ext_leader_project1, ext_doc2, ext_titulo2, ext_leader_project2, ext_estagio_doc, ext_conhecimento, ext_instituicao, ext_periodo, ext_enf_doc, ext_atividade, ext_chs, ext_chs_total, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt5->bind_param("ssssssssssssiii", $ext_doc1, $ext_titulo1, $ext_leader_project1, $ext_doc2, $ext_titulo2, $ext_leader_project2, $ext_estagio_doc, $ext_conhecimento, $ext_instituicao, $ext_periodo, $ext_enf_doc, $ext_atividade, $ext_chs, $ext_chs_total, $id);

	if(!$erro){
    	if ($stmt5->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/extensao.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			header("Location: pdf_extensao.php");
			exit();
			
	}else{
    	header("Location: ../index.html");
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
	
	//gestão.php
	$_SESSION['ges_num_doc'] = mysqli_real_escape_string($conn, $_POST['ges_num_doc']);
	$_SESSION['ges_funcao'] = mysqli_real_escape_string($conn, $_POST['ges_funcao']);
	$_SESSION['ges_semana'] = mysqli_real_escape_string($conn, $_POST['ges_semana']);
	$_SESSION['ges_chs'] = mysqli_real_escape_string($conn, $_POST['ges_chs']);
	$_SESSION['ges_designacao'] = mysqli_real_escape_string($conn, $_POST['ges_designacao']);
	$_SESSION['ges_periodo'] = mysqli_real_escape_string($conn, $_POST['ges_periodo']);
	
	$ges_num_doc = $_SESSION['ges_num_doc'];
	$ges_funcao = $_SESSION['ges_funcao'];
	$ges_semana = $_SESSION['ges_semana'];
	$ges_chs = $_SESSION['ges_chs'];
	$ges_designacao = $_SESSION['ges_designacao'];
	$ges_periodo = $_SESSION['ges_periodo'];

	$stmt6 = $conn->prepare("INSERT INTO gestao (ges_num_doc, ges_funcao, ges_semana, ges_chs, ges_designacao, ges_periodo, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?, ?)");

	$stmt6->bind_param("ssiissi", $ges_num_doc, $ges_funcao, $ges_semana, $ges_chs, $ges_designacao, $ges_periodo, $id);

	if(!$erro){
    	if ($stmt6->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/gestao.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			header("Location: pdf_gestao.php");
			exit();

		}else{
    		header("Location: ../index.html");
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

	//qualificação.php
	$_SESSION['qua_data_inicio'] = mysqli_real_escape_string($conn, date('Y/m/d', strtotime($_POST['qua_data_inicio'])));
	$_SESSION['qua_data_termino'] = mysqli_real_escape_string($conn, date('Y/m/d', strtotime($_POST['qua_data_termino'])));
	$_SESSION['qua_descricao'] = mysqli_real_escape_string($conn, $_POST['qua_descricao']);
	
	$qua_descricao = $_SESSION['qua_descricao'];
	
	$stmt7 = $conn->prepare("INSERT INTO qualificacao (qua_data_inicio, qua_data_termino, qua_descricao, user_id) 	VALUES 	(?, ?, ?, ?)");

	$stmt7->bind_param("sssi", $_SESSION['qua_data_inicio'], $_SESSION['qua_data_termino'], $qua_descricao, $id);

	if(!$erro){
    	if ($stmt7->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/qualificação.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			header("Location: pdf_qualificacao.php");
			exit();
    
	}else{
    	header("Location: ../index.html");
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
	
	//academica.php
	//$aca_tabela = mysqli_real_escape_string($conn, $_POST['aca_table']);
	$_SESSION['aca_titulo'] = mysqli_real_escape_string($conn, $_POST['aca_title']);
	$_SESSION['aca_ini'] = mysqli_real_escape_string($conn, date('Y/m/d', strtotime($_POST['aca_ini'])));
	$_SESSION['aca_ter'] = mysqli_real_escape_string($conn, date('Y/m/d', strtotime($_POST['aca_ter'])));
	$_SESSION['aca_clientela'] = mysqli_real_escape_string($conn, $_POST['aca_clientela']);
	$_SESSION['aca_description'] = mysqli_real_escape_string($conn, $_POST['aca_description']);
	
	$aca_titulo = $_SESSION['aca_titulo'];
	$aca_clientela = $_SESSION['aca_clientela'];
	$aca_description = $_SESSION['aca_description'];
	
	$stmt8 = $conn->prepare("INSERT INTO academica (aca_title, aca_ini, aca_ter, aca_clientela, aca_description, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?)");

	$stmt8->bind_param("sssssi", $aca_titulo, $_SESSION['aca_ini'], $_SESSION['aca_ter'], $aca_clientela, $aca_description, $id);

	if(!$erro){
    	if ($stmt8->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/academica.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			header("Location: pdf_academica.php");
			exit();

	}else{
    	header("Location: ../index.html");
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
	
	//administrativa.php
	//$adm_table = mysqli_real_escape_string($conn, $_POST['adm_table']);
	$_SESSION['adm_portaria'] = mysqli_real_escape_string($conn, $_POST['adm_portaria']);
	$_SESSION['adm_emissor'] = mysqli_real_escape_string($conn, $_POST['adm_emissor']);
	$_SESSION['adm_servido'] = mysqli_real_escape_string($conn, $_POST['adm_servido']);
	$_SESSION['adm_descricao'] = mysqli_real_escape_string($conn, $_POST['adm_description']);
	
	$adm_portaria = $_SESSION['adm_portaria'];
	$adm_emissor = $_SESSION['adm_emissor'];
	$adm_servido = $_SESSION['adm_servido'];
	$adm_descricao = $_SESSION['adm_descricao'];
	
	$stmt9 = $conn->prepare("INSERT INTO administrativa (adm_table, adm_portaria, adm_emissor, adm_servido, adm_description, user_id) 	VALUES 	(?, ?, ?, ?, ?, ?)");

	$stmt9->bind_param("sssssi", $adm_table, $adm_portaria, $adm_emissor, $adm_servido, $adm_descricao, $id);

	if(!$erro){
    	if ($stmt9->execute()) {
        echo "<script>alert('Informações enviadas com sucesso!')</script>";
        header("Refresh: 0.2; url=../pages/administrativa.php");
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			header("Location: pdf_administrativa.php");
			exit();

		}else{
    		header("Location: ../index.html");
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
