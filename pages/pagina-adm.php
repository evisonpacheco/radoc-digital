<?php
require 'C:\wamp64\www\RADOC\db-connection.php';
include 'login_verification.php';

$nivel = $_SESSION['user_nivel'];

if ($nivel != 1) {
  header("Location:info-doc.php");
  exit();
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
<body class="bodyadmin">
  <header class="headeradmin">
    <img class="headeradmin__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headeradmin__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainadmin">
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
        <div id="sair" class="sidemenu__logout"><a class="sidemenu__logout--button" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="adminpage">
      <div class="adminpage__info">
        <h2 class="adminpage__title">Página Administrativa</h2>
      </div>

      <div>
        <form class="form" action="./info-doc.php" method="post">
          <div class="form__field">
            <label class="form__field-user" for="nome_doc">Digite o e-mail do docente:</label>
            <input class="form__field-input" type="email" name="email_doc" id="email_doc">
          </div>
          <button class="form__button" type="submit">Procurar</button>
        </form>
      </div>
	  
	  </div>

      </div>
    </div>
  </main>
</body>
</html>
