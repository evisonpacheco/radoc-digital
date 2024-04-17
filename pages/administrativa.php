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

<body class="bodyadministrativa">
  <header class="headeradministrativa">
    <img class="headeradministrativa__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headeradministrativa__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainadministrativa">
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
    <div class="administrativapage">
      <div class="administrativapage__info">
        <h2 class="administrativapage__title">Administrativa</h2>
      </div>
      <form class="administrativaform" action="../pages-back/pages.php" method="post">
            <input type="hidden" name="formulario" value="9">
        <div class="administrativaform__element">
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
        <nav class="navigation">
          <input class="navigation__button" type="submit" value="Salvar">
          <input class="navigation__button navigation__button--reset"type="reset" value="Resetar">
              </nav>
            </form>
          </div>
  </main>
</body>

</html>
