<?php

require '../db-connection.php';
include 'login_verification.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email_doc'];
		
	$result_of_email_check = mysqli_query ($conn, "SELECT user_name, user_registration, user_nivel 
												  FROM registro WHERE user_email='". $email ."'");
		
	if ($result_of_email_check->num_rows == 1) {
		
		$result_row = $result_of_email_check->fetch_object();
		
		$nome = $result_row->user_name;
		$matricula = $result_row->user_registration;
		
		if($result_row->user_nivel == 1){
			$nivel = 'CPPD';
		} else {
			$nivel = 'Docente';
		}
	} else {
		echo "<script type='text/javascript'>
			alert('Este e-mail não está registrado no sistema.');
			window.location.replace('pagina-adm.php');
			</script>";
	}
} else {
	$email = $_SESSION["user_email"];
		
	$result_of_email_check = mysqli_query ($conn, "SELECT user_name, user_registration, user_nivel 
												  FROM registro WHERE user_email='". $email ."'");
		
	if ($result_of_email_check->num_rows == 1) {
		
		$result_row = $result_of_email_check->fetch_object();
		
		$nome = $result_row->user_name;
		$matricula = $result_row->user_registration;
		
		if($result_row->user_nivel == 1){
			$nivel = 'Administrador';
		} else {
			$nivel = 'Docente';
		}
	}
}
		
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrativa</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodyinfo">
	<header class="headerinfo">
		<img class="headerinfo__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
		<p class="headerinfo__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
	<main class="maininfo">
    <div class="sidemenu">
      <div class="sidemenu__title">MENU PRINCIPAL</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
					<a href="./home.php" class="sidemenu__element">Página Inicial</a>
					<a href="./editar-dados.php" class="sidemenu__element">Editar
						dados</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="./extensao.php" class="sidemenu__element">Extensão</a>
          <a href="./gestao.php" class="sidemenu__element">Gestão</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
		  <a href="./pagina-adm.php" class="sidemenu__element">Página Administrativa</a>
        </ul>
				<div id="sair" class="sidemenu__logout"><a class="sidemenu__logout--button"
						href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
		<div class="infopage">
			<div class="infopage__info">
				<h2 class="infopage__title">Página Administrativa - Dados do docente</h2>
      </div>
	  
			<div class="infopage__docs">
	  <?php echo "Matrícula: " . $matricula . " <br> Nome: " . $nome . " <br> E-mail: " . $email . " <br> Nível de permissão: " . $nivel . ""; ?>
	  </div>
    </div>
  </main>
</body>

</html>
