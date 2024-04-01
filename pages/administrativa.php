<?php
include 'login_verification.php';
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
          <a href="./novoradoc.php" class="sidemenu__element">Cadastrar Novo RADOC</a>
		      <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;" >Editar dados</a>
          <a href="./ensino.php" class="sidemenu__element">Ensino</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="./extensao.php" class="sidemenu__element">Extensão</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Administrativa</h2>
      </div>

            <form action="../pages-back/pages.php" method="post">
              <div>
                <label for="adm_table">Tabela: </label>
                <input type="text" name="adm_table" id="adm_table">
                <br>
                <label for="adm_portaria">Portaria: </label>
                <input type="text" name="adm_portaria" id="adm_portaria">
                <br>
                <label for="adm_emissor">Órgão emissor: </label>
                <input type="text" name="adm_emissor" id="adm_emissor">
                <br>
                <label for="adm_servido">Órgão Servido: </label>
                <input type="text" name="adm_servido" id="adm_servido">
                <br>
                <label for="adm_description">Descrição: </label>
                <textarea name="adm_description" id="adm_description" rows="4"></textarea>
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
