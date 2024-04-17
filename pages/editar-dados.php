<?php
session_start();

if (!isset($_SESSION["user_name"])) {
  header("Location: ..\index.html");
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

<body class="bodyeditar">
  <header class="headereditar">
    <img class="headereditar__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headereditar__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="maineditar">
    <div class="sidemenu">
      <div class="sidemenu__title">MENU PRINCIPAL</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
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
        <div id="sair" class="sidemenu__logout"><a class="sidemenu__logout--button" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="editarpage">
      <h2 class="editarpage__title">Editar dados</h2>
      <?php if($_SESSION['user_valid']==0){
				echo "-   -   -   -   -   VALIDE SEU E-MAIL PARA DESBLOQUEAR 
					  AS FUNCIONALIDADES DO SISTEMA EM SUA CONTA   -   -   -   -   -";
			} ?>
      <form class="editarform" action="./process-profile.php" method="post">
        <p class="editarform__title">Mudar Senha</p>
        <div class="editarform__element">
          <label class="editarform__element--label" for="user_name"></label>
          <input class="editarform__element--input" type="text" maxlength="50" placeholder="Nome completo"
            name="user_name" id="user_name" required>
        </div>

        <div class="editarform__element">
          <label class="editarform__element-label" for="user_password"></label>
          <input class="editarform__element--input" type="password" maxlength="12" placeholder="Nova senha"
            name="user_password" id="user_password" required>
        </div>

        <div class="editarform__element">
          <label class="editarform__element--label" for="user_confirm"></label>
          <input class="editarform__element--input" type="password" maxlength="12" placeholder="Confirmar nova senha"
            name="user_confirm" id="user_confirm" required>
        </div>

        <button class="editarform__button" type="submit">Atualizar</button>
        <button class="editarform__button" type="reset">Resetar</button>
      </form>

      <form class="form" action="../pages-back/mudar-email.php" method="post">
        <p class="editarform__title">Mudar Email</p>
        <div class="editarform__element">
          <label class="editarform__element--label" for="email_enviado"></label>
          <input class="editarform__element--input" type="email" placeholder="E-mail" name="email_enviado"
            id="email_enviado" required>
        </div>

        <button class="editarform__button" type="submit">Mudar e-mail</button>
        <button class="editarform__button" id="validar_email" type="submit" formaction="../enviar-email.php">Validar
          e-mail</button>
      </form>
    </div>
  </main>
</body>

</html>
