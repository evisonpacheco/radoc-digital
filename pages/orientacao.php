<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orientação</title>
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
        <h2 class="homepage__title">Orientação</h2>
      </div>

      <div class="orientacao">
          <form class="orientacao__form" action="../pages-back/pages.php" method="post">
          <input type="hidden" name="formulario" value="3">
            
            <div class="form__field">
              <label for="ori_registration">Matrícula:</label>
              <input class="form__field--input" type="text" name="ori_matricula" id="ori_matricula">
            </div>
            
            <div class="form__field">
              <label for="ori_class">Curso: </label>
              <input class="form__field--input" type="text" name="ori_curso" id="ori_curso">
            </div>
            
            <div class="form__field">
              <label for="ori_level">Nível: </label>
              <select name="ori_nivel" id="ori_nivel">
                <option value="Graduação">Graduação</option>
                <option value="Pós-Graduação">Pós-Graduação</option>
              </select>
            </div>
            
            <div class="form__field">
              <label for="ori_uni">IES: </label>
              <input class="form__field--input" type="text" name="ori_ies" id="ori_ies" value="Universidade Federal Rural da Amazônia">
            </div>
            
            <div class="form__field">
              <label for="ori_title">Título trabalho: </label>
              <input class="form__field--input" type="text" name="ori_titulo_trabalho" id="ori_titulo_trabalho">
            </div>
            
            <div class="form__field">
              <label for="ori_ini"></label>
              <input class="form__field--date" type="date" name="ori_data_inicio" id="ori_data_inicio">
            </div>
            
            <div class="form__field">
              <label for="ori_ter"></label>
              <input class="form__field--date" type="date" name="ori_data_termino" id="ori_data_termino">
            </div>
            
            <div class="form__field">
              <label for="ori_type">Tipo de orientação: </label>
              <select name="ori_tipo_orientacao" id="ori_tipo_orientacao">
                <option value="Presencial">PRESENCIAL</option>
                <option value="EAD">EAD</option>
              </select>
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
  </main>
</body>
</html>
