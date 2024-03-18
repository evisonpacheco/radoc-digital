<?php
include 'login_verification.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ensino - UFRA</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>
<body class="bodyensino">
  <header class="headerensino">
    <img class="headerensino__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerensino__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainensino">
    <div class="sidemenu">
      <div class="sidemenu__title">ENSINO</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
          <a href="#" class="sidemenu__element">Cadastrar Novo RADOC</a>
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
    <div class="ensinopage">
      <div class="ensinopage__info">
        <h2 class="ensinopage__title">Ensino</h2>
        <p>Sistema de Cadastro de Atividades Docentes.</p>
        <hr>
      
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Nível</th>
              <th>Curso</th>
              <th>Disciplina</th>
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
       
        <hr>
     
        <div>
          <label>Nível:</label>
          <select name="nivel">
            <option value="Graduação">Graduação</option>
            <option value="Pós-Graduação">Pós-Graduação</option>
          </select>
          <label>Curso:</label>
          <select name="curso">
            <option value="Bacharelado em Sistemas de Informação">Bacharelado em Sistemas de Informação</option>
            <option value="Licenciatura em Ciências da Computação">Licenciatura em Ciências da Computação</option>
          </select>
        </div>
        <div>
          <label>Disciplina:</label>
          <input type="text" name="disciplina">
        </div>
        <div>
          <label>Data Início:</label>
          <input type="date" name="data_inicio">
          <label>Data término:</label>
          <input type="date" name="data_termino">
          <label>Nº de Alunos:</label>
          <input type="number" name="num_alunos">
        </div>
        <div>
          <label>Turma:</label>
          <input type="text" name="turma">
          <label>Ano Grade Matriz:</label>
          <input type="text" name="ano_grade_matriz">
          <label>Código Matriz:</label>
          <input type="text" name="codigo_matriz">
        </div>
        <div>
          <label>Carga Horária Teórica:</label>
          <input type="number" name="carga_horaria_teoria">
          <label>Carga Horária Prática:</label>
          <input type="number" name="carga_horaria_pratica">
        </div>
        <div>
          <label>Tipo Ensino:</label>
          <select name="tipo_ensino">
            <option value="PRESENCIAL">Presencial</option>
            <option value="EAD">EAD</option>
          </select>
        </div>
        <div>
          <input type="checkbox" name="disciplina_conjugada">
          <label>Disciplina Conjugada</label>
        </div>
      </div>
    </div>
  </main>
 
  <button class="save-button">Salvar</button>
</body>
</html>