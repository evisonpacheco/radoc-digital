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
  </style>
</head>
<body class="bodyprojeto">
  <header class="headerprojeto">
    <img class="headerprojeto__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerprojeto__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainprojeto">
    <div class="sidemenu">
      <div class="sidemenu__title">PROJETO</div>
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
    <div class="projetopage">
      <div class="projetopage__info">
        <h2 class="projetopage__title">Projeto</h2>
        <p>Sistema de Cadastro de Atividades Docentes.</p>
        <hr>
      
        <!-- <table>
          <thead>
            <tr>
              <th></th>
              <th>Código</th>
              <th>Nome do Projeto</th>
              <th>Tipo</th>
              <th>Situação do Projeto</th>
            </tr>
          </thead>
          <tbody>
      
            <tr>
              <td><input type="checkbox"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
       
          </tbody>
        </table> 
      
        <hr> -->

        <form action="../pages-back/pages.php" method="POST">
        <input type="hidden" name="formulario" value="3">
          <div>
            <label>Código:</label>
            <input type="text" name="pro_codigo" id="">
          </div>
          <div>
            <label>Nome do discente:</label>
            <input type="text" name="pro_nome" id="pro_nome">
          </div>
          <div>
            <label>Data Início Efetiva:</label>
            <input type="date" name="pro_data_inicio_efetiva" id="pro_data_inicio_efetiva">
            <label>Data término Efetiva:</label>
            <input type="date" name="pro_data_termino_efetiva" id="pro_data_termino_efetiva">
          </div>
          <div>
            <label>Tipo:</label>
            <select name="pro_tipo" id="pro_tipo">
              <option value="Pesquisa">Pesquisa</option>
              <option value="Projeto">Projeto</option>
            </select>
          </div>
          <div>
            <label>Projeto:</label>
            <input type="text" name="pro_projeto" id="pro_projeto">
          </div>
          <div>
            <label>Docente:</label>
            <input type="text" name="pro_docente" id="pro_docente">
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
