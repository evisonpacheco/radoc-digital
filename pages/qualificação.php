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
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
    .description-textarea {
      width: 100%;
      height: 100px; /* Defina a altura inicial aqui */
      resize: vertical; /* Permite expandir verticalmente */
    }
  </style>
</head>
<body class="bodyqualificacao">
  <header class="headerqualificacao">
    <img class="headerqualificacao__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerqualificacao__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainqualificacao">
    <div class="sidemenu">
      <div class="sidemenu__title">Qualificação</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
          <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;">Editar dados</a>
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
    <div class="qualificacaopage">
      <div class="qualificacaopage__info">
        <h2 class="qualificacaopage__title">Qualificação</h2>
        <p>Sistema de Cadastro de Atividades Docentes.</p>
        <hr>
       
        <form action="../pages-back/pages.php" method="post">
        <input type="hidden" name="formulario" value="6">
        <!-- <table>
          <thead>
            <tr>
              <th></th>
              <th>Data Início</th>
              <th>Data Término</th>
              <th>Tabela</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table> 
       
        <hr> -->
       
        <div>
          <label>Data Início:</label>
          <input type="date" name="qua_data_inicio" id="qua_data_inicio">
          <label>Data Término:</label>
          <input type="date" name="qua_data_termino" id="qua_data_termino">
        </div>
        <div>
          <label>Descrição:</label>
          <textarea class="description-textarea" name="qua_descricao" id="qua_descricao"></textarea>
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
