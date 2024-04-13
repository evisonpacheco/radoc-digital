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
          <a href="./pagina-adm.php" class="sidemenu__element">Página Administrativa</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Gestão</h2>
        </div>

        <form class="orientacao__form" action="../pages-back/pages.php" method="post">
        <input type="hidden" name="formulario" value="6">
        <table>
            <tr>
            <th colspan="6">Atividades de Gestão e Representação</th>
            </tr>

            <tr>
                <th>Número do Doc</th>
                <th>Carga e/ou Função</th>
                <th>Semana</th>
                <th>CH Semanal</th>
                <th>Ato de Designação</th>
                <th>Período</th>
            </tr>

            <tr>
                <td><input type="text" name="ges_num_doc" id="ges_num_doc"></td>
                <td><input type="text" name="ges_funcao" id="ges_funcao"></td>
                <td><input type="number" name="ges_semana" id="ges_semana"></td>
                <td><input type="number" name="ges_chs" id="ges_chs"></td>
                <td><input type="text" name="ges_designacao" id="ges_designacao"></td>
                <td><input type="text" name="ges_periodo" id="ges_periodo"></td>
            </tr>
        </table>

            <div>
              <nav>
                <input type="button" value="Novo">
                <input class="save-button" type="submit" value="Salvar">
                <input type="button" value="Excluir">
              </nav>
            </div>
        </form>
    </div>
  </main>
</body>
</html>
