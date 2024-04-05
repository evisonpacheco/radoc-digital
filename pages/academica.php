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
          <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;" >Editar dados</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="./extensao.php" class="sidemenu__element">Extensão</a>
          <a href="./gestao.php" class="sidemenu__element">Gestão</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Acadêmica</h2>
      </div>

          <div>
            <form action="../pages-back/pages.php" method="post">
            <input type="hidden" name="formulario" value="7">
              <div>
                <label for="aca_table">Tabela: </label>
                <input type="text" name="aca_table" id="aca_table">
                <br>
                <label for="aca_title">Título da Atividade: </label>
                <input type="text" name="aca_title" id="aca_title">
                <br>
                <label for="aca_ini">Data de Início: </label>
                <input type="date" name="aca_ini" id="aca_ini">
                <br>
                <label for="aca_ter">Data de Término: </label>
                <input type="date" name="aca_ter" id="aca_ter">
                <br>
                <label for="aca_clientela">Clientela: </label>
                <input type="text" name="aca_clientela" id="aca_clientela">
                <br>
                <label for="aca_description">Descrição Complementar: </label>
                <textarea name="aca_description" id="aca_description" rows="4"></textarea>
              </div>

            <div>
              <nav>
                <input type="button" value="Novo">
                <input class="save-button" type="submit" value="Salvar">
                <input type="button" value="Excluir">
              </nav>
            </div>

            </form>
          </div>

      </div>
    </div>
  </main>
</body>
</html>
