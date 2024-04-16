<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto - UFRA</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodyprojeto">
  <header class="headerprojeto">
    <img class="headerprojeto__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerprojeto__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainprojeto">
    <div class="sidemenu">
      <div class="sidemenu__title">MENU PRINCIPAL</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
          <a href="./editar-dados.php" class="sidemenu__element">Editar Dados</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="./extensao.php" class="sidemenu__element">Extensão</a>
          <a href="./gestao.php" class="sidemenu__element">Gestão</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a class="sidemenu__logout--button"
            href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="projetopage">
        <h2 class="projetopage__title">Projeto</h2>
      <form class="projetoform" action="../pages-back/pages.php" method="POST">
        <p class="projetoform__title">Sistema de Cadastro de Atividades Docentes.</p>
        <input type="hidden" name="formulario" value="4">
        <div class="projetoform__element">
          <label class="projetoform__element--label">Código:</label>
          <input class="projetoform__element--input" type="text" name="pro_codigo" id="">
          </div>
        <div class="projetoform__element">
          <label class="projetoform__element--label">Nome do discente:</label>
          <input class="projetoform__element--input" type="text" name="pro_nome" id="pro_nome">
          </div>
        <div class="projetoform__element">
            <label>Data Início Efetiva:</label>
            <input type="date" name="pro_data_inicio_efetiva" id="pro_data_inicio_efetiva">
        </div>
        <div class="projetoform__element">
            <label>Data término Efetiva:</label>
            <input type="date" name="pro_data_termino_efetiva" id="pro_data_termino_efetiva">
          </div>
        <div class="projetoform__element">
            <label>Tipo:</label>
          <select class="projetoform__element--input" name="pro_tipo" id="pro_tipo">
              <option value="Pesquisa">Pesquisa</option>
              <option value="Projeto">Projeto</option>
            </select>
          </div>
        <div class="projetoform__element">
            <label>Projeto:</label>
          <input class="projetoform__element--input" type="text" name="pro_projeto" id="pro_projeto">
          </div>
        <div class="projetoform__element">
            <label>Docente:</label>
          <input class="projetoform__element--input" type="text" name="pro_docente" id="pro_docente">
          </div>
   
        <nav class="navigation">
          <input class="navigation__button" type="submit" value="Salvar">
          <input class="navigation__button" type="button" value="Resetar">
              </nav>
        </form>
    </div>
  </main>
</body>

</html>
