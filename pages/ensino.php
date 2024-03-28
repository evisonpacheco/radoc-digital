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
          <a href="./novoradoc.php" class="sidemenu__element">Cadastrar Novo RADOC</a>
          <a href="./ensino.php" class="sidemenu__element">Ensino</a>
          <a href="./orientacao.php" class="sidemenu__element">Orientação</a>
          <a href="./projeto.php" class="sidemenu__element">Projeto</a>
          <a href="#" class="sidemenu__element">Extensão</a>
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
          <caption>Cálculo da CH semanal de aulas</caption>
          <tr>
            <th>Semestre</th>
            <th>Graduação</th>
            <th>Pós-Graduação</th>
            <th>Total</th>
          </tr>
          <tr>
            <th>1ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
          <tr>
            <th>2ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>

        <table>
        <caption>Atividades pedagógicas complementares</caption>
          <tr>
            <th>Semestre</th>
            <th>Graduação</th>
            <th>Pós-Graduação</th>
            <th>Total</th>
          </tr>
          <tr>
            <th>1ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
          <tr>
            <th>2ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>

        <table>
        <caption>Atividades de orientação/supervisão receptoria e tutoria</caption>
          <tr>
            <th>Semestre</th>
            <th>Orientação</th>
            <th>Co-orientação</th>
            <th>Supervisão</th>
            <th>Perceptoria e/ou tutorial</th>
            <th>Total</th>
          </tr>
          <tr>
            <th>1ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
          <tr>
            <th>2ª</th>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>

        <table>
          <caption>Supervisão Acadêmica</caption>
          <tr>
            <th>Nª do DOC</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Tipo</th>
            <th>Nível</th>
            <th>CH semanal do 1ª semestre</th>
            <th>CH semanal do 1ª semestre</th>
          </tr>
          <tr>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>

        <table>
          <caption>Receptoria e/ou tutoria de residência</caption>
          <tr>
            <th>Nª do DOC</th>
            <th>Matrícula</th>
            <th>Tipo</th>
            <th>CH semanal do 1ª semestre</th>
            <th>CH semanal do 1ª semestre</th>
          </tr>
          <tr>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>

        <table>
          <caption>Banca Examinadora</caption>
          <tr>
            <th>Nª do DOC</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>CH semanal do 1ª semestre</th>
            <th>CH semanal do 1ª semestre</th>
          </tr>
          <tr>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
            <td><input type="number" name="" id=""></td>
          </tr>
        </table>
        <table>
          <caption>Avaliação Discente</caption>
          <tr>
            <th>Nª Doc</th>
            <th>1ª semestre</th>
            <th>Nª Doc</th>
            <th>2ª semestre</th>
          </tr>
          <tr>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
            <td><input type="text" name="" id=""></td>
          </tr>
        </table>
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
