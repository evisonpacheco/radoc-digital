<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qualificação - UFRA</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodyqualificacao">
  <header class="headerqualificacao">
    <img class="headerqualificacao__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerqualificacao__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainqualificacao">
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
    <div class="qualificacaopage">
      <div class="qualificacaopage__info">
        <h2 class="qualificacaopage__title">Qualificação</h2>
      </div>
       
      <form class="qualificacaoform" action="../pages-back/pages.php" method="post">
        <p class="qualificacaoform__title">Sistema de Cadastro de Atividades Docentes.</p>
        <input type="hidden" name="formulario" value="7">
        <div class="qualificacaoform__element">
          <label>Data Início:</label>
          <input class="qualificacaoform__input" type="date" name="qua_data_inicio" id="qua_data_inicio">
          <label>Data Término:</label>
          <input class="qualificacaoform__input" type="date" name="qua_data_termino" id="qua_data_termino">
        </div>
        <div class="qualificacaoform__element qualificacaoform__element--textarea">
          <label>Descrição:</label>
          <textarea class="description-textarea" name="qua_descricao" id="qua_descricao"></textarea>
        </div>
        <nav class="navigation">
          <input class="navigation__button" type="submit" value="Salvar">
          <input class="navigation__button navigation__button--reset" type="reset" value="Resetar">
              </nav>
        </form>
      </div>
  </main>
</body>

</html>
