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
          <a href="./novoradoc.php" class="sidemenu__element">Cadastrar Novo RADOC</a>
          <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;" >Editar dados</a>
          <a href="./ensino.php" class="sidemenu__element">Ensino</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="#" class="sidemenu__element">Extenção</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Orientação</h2>
      </div>

      <div class="orientacao">
          <form class="orientacao__form" action="#" method="post">
            <div class="form__field">
              <label for="ori_table">Tabela:</label>
              <input class="form__field--input" type="text" name="ori_table" id="ori_table">
            </div>
            
            <div class="form__field">
              <label for="ori_registration">Matrícula:</label>
              <input class="form__field--input" type="text" name="ori_registration" id="ori_registration">
            </div>
            
            <div class="form__field">
              <label for="ori_class">Curso: </label>
              <input class="form__field--input" type="text" name="ori_class" id="ori_class">
            </div>
            
            <div class="form__field">
              <label for="ori_level">Nível: </label>
              <select name="ori_level" id="ori_level">
                <option value="graduação">Graduação</option>
                <option value="pós-graduação">Pós-Graduação</option>
              </select>
            </div>
            
            <div class="form__field">
              <label for="ori_uni">IES: </label>
              <input class="form__field--input" type="text" name="ori_uni" id="ori_uni" value="Universidade Federal Rural da Amazônia">
            </div>
            
            <div class="form__field">
              <label for="ori_title">Título trabalho: </label>
              <input class="form__field--input" type="text" name="ori_title" id="ori_title">
            </div>
            
            <div class="form__field">
              <label for="ori_ini"></label>
              <input class="form__field--date" type="date" name="ori_ini" id="ori_ini">
            </div>
            
            <div class="form__field">
              <label for="ori_ter"></label>
              <input class="form__field--date" type="date" name="ori_ter" id="ori_ter">
            </div>
            
            <div class="form__field">
              <label for="ori_type">Tipo de orientação: </label>
              <select name="ori_type" id="ori_type">
                <option value="presencial">PRESENCIAL</option>
                <option value="ead">EAD</option>
              </select>
            </div>
            <div>
              <nav>
                <input type="button" value="Novo">
                <input type="button" value="Salvar">
                <input type="button" value="Excluir">
              </nav>
            </div>
          </form>   
      </div>
    </div>
  </main>
</body>
</html>
