<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodygestao">
  <header class="headergestao">
    <img class="headergestao__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headergestao__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="maingestao">
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
        <div id="sair" class="sidemenu__logout"><a href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="gestaopage">
      <div class="gestaopage__info">
        <h2 class="gestaopage__title">Gestão</h2>
        </div>

      <form class="gestaoform" action="../pages-back/pages.php" method="post">
        <input type="hidden" name="formulario" value="6">
        <table class="gestaotable">
          <caption class="gestaotable__title" colspan="6">Atividades de Gestão e Representação</th>
            <tr>
                <th>Número do Doc</th>
                <th>Carga e/ou Função</th>
                <th>Semana</th>
            </tr>
            <tr>
                <td><input type="text" name="ges_num_doc" id="ges_num_doc"></td>
                <td><input type="text" name="ges_funcao" id="ges_funcao"></td>
                <td><input type="number" name="ges_semana" id="ges_semana"></td>
          </tr>
          <th>CH Semanal</th>
          <th>Ato de Designação</th>
          <th>Período</th>
          <tr>
                <td><input type="number" name="ges_chs" id="ges_chs"></td>
                <td><input type="text" name="ges_designacao" id="ges_designacao"></td>
                <td><input type="text" name="ges_periodo" id="ges_periodo"></td>
            </tr>
        </table>
        <nav class="navigation">
          <input class="navigation__button" type="submit" value="Salvar">
          <input class="navigation__button navigation__button--reset" type="reset" value="Resetar">
              </nav>
        </form>
    </div>
  </main>
</body>

</html>
