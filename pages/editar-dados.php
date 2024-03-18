<?php 
	session_start();

	if(!isset($_SESSION["user_name"])) {
		header("Location: index.html");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar dados</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>
<body class="bodyhome">
  <header class="headerhome">
    <img class="headerhome__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerhome__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainhome">
    <div class="sidemenu">
      <div class="sidemenu__title">MENU PRINCIPAL</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
          <a href="#" class="sidemenu__element">Cadastrar Novo RADOC</a>
		  <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;" >Editar dados</a>
          <a href="./ensino.php" class="sidemenu__element">Ensino</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="#" class="sidemenu__element">Extenção</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Editar dados</h2>
      </div>
	  
	  <?php if($_SESSION['user_valid']==0){
				echo "-   -   -   -   -   VALIDE SEU E-MAIL PARA DESBLOQUEAR 
					  AS FUNCIONALIDADES DO SISTEMA EM SUA CONTA   -   -   -   -   -";
			} ?>

      <div>
          <div>
            <form class ="form" action="../mudar-email.php" method="post">
              <div class="form__field">
              <label class="form__field-email" for="email_enviado"></label>
              <input class="form__field-input" type="email" placeholder="E-mail" name="email_enviado" id="email_enviado" required>
            </div>
			<button class="form__button" type="submit">Mudar e-mail</button>
			<br />
			<button class="form__button" id="validar_email" type="submit" formaction="../enviar-email.php">Validar e-mail</button>
            </form>
          </div>
      </div>
	  
    </div>
  </main>
</body>
</html>