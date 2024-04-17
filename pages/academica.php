<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acadêmica</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodyacademica">
  <header class="headeracademica">
    <img class="headeracademica__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headeracademica__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainacademica">
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
    <div class="academicapage">
      <div class="academicapage__info">
        <h2 class="academicapage__title">Acadêmica</h2>
      </div>
          <div>
        <form class="academicaform" action="../pages-back/pages.php" method="post">
            <input type="hidden" name="formulario" value="8">
          <div class="academicaform__element">
                <label for="aca_table">Tabela: </label>
            <input class="academicaform__input" type="text" name="aca_table" id="aca_table">
                <label for="aca_title">Título da Atividade: </label>
            <input class="academicaform__input" type="text" name="aca_title" id="aca_title">
                <label for="aca_ini">Data de Início: </label>
            <input class="academicaform__input" type="date" name="aca_ini" id="aca_ini">
                <label for="aca_ter">Data de Término: </label>
            <input class="academicaform__input" type="date" name="aca_ter" id="aca_ter">
                <label for="aca_clientela">Clientela: </label>
            <input class="academicaform__input" type="text" name="aca_clientela" id="aca_clientela">
                <label for="aca_description">Descrição Complementar: </label>
            <textarea class="academicaform__input academicaform__input--textarea" name="aca_description" id="aca_description" rows="4"></textarea>
          </div>
          <nav class="navigation">
            <input class="navigation__button" type="submit" value="Salvar">
            <input class="navigation__button navigation__button--reset" type="reset" value="Resetar">
          </nav>
        </form>
      </div>
      </div>
    </div>
  </main>
</body>

</html>
