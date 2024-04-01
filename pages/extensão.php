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
          <a href="./extensao.php" class="sidemenu__element">Extensão</a>
          <a href="./qualificação.php" class="sidemenu__element">Qualificação</a>
          <a href="./academica.php" class="sidemenu__element">Acadêmica</a>
          <a href="./administrativa.php" class="sidemenu__element">Administrativo</a>
        </ul>
        <div id="sair" class="sidemenu__logout"><a style="text-decoration:none;color:#F7F7F7;" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Atividades de Extensão</h2>
      </div>

      <div class="extensao">
        <form action="../pages-back/pages.php" method="post">
          <table>
            <caption>Extensão</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Projetos</th>
            </tr>
            <tr>
              <td><input type="text" name="ext_doc1" id="ext_doc1"></td>
              <td>
              <input type="text" placeholder="Título 1">
              </td>
            </tr>
            <td></td>
              <td>
              <input type="radio" name="leader_project1" id="ext_orientador1">
              <label for="orientador1">Orientador</label>
              <input type="radio" name="leader_project1" id="ext_coordenador1">
              <label for="coordenador1">Coordenador</label>
              </td>
            </tr>
            
            <tr>
              <th>Nª do Doc</th>
              <th>Projetos</th>
            </tr>
            <tr>
              <td><input type="text" name="ext_doc2" id="ext_doc2"></td>
              <td>
              <input type="text" placeholder="Título 2">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
              <input type="radio" name="leader_project2" id="ext_orientador2">
              <label for="orientador2">Orientador</label>
              <input type="radio" name="leader_project2" id="ext_coordenador2">
              <label for="coordenador2">Coordenador</label>
              </td>
            </tr>
          </table>

          <table>
            <caption>Estágios de Extensão</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Área de conhecimento</th>
              <th>Instituição/Local</th>
              <th>Período</th>
              <th>Carga horária semanal</th>
            </tr>
            <tr>
            	<td><input type="text" name="ext_estagio_doc" id="ext_estagio_doc"></td>
                <td><input type="text" name="ext_conhecimento" id="ext_conhecimento"></td>
                <td><input type="text" name="ext_instituicao" id="ext_instituicao"></td>
                <td><input type="text" name="ext_periodo" id="ext_periodo"></td>
                <td><input type="number" name="ext_chs" id="ext_chs"></td>
            </tr>
          </table>
          
           <table>
            <caption>Atividade de ensino não-formal</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Atividades</th>
              <th>Carga Horária Semanal</th>
            </tr>
            <tr>
            	<td><input type="text" name="ext_enf_doc" id="ext_enf_doc"></td>
          		<td><input type="text" name="ext_atividade" id="ext_atividade"></td>
                <td><input type="number" name="ext_chs" id="ext_chs" placeholder="CH total / 23 semanas"></td>
            </tr>

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
