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

<body class="bodyextensao">
  <header class="headerextensao">
    <img class="headerextensao__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerextensao__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="mainextensao">
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
    <div class="extensaopage">
      <div class="extensaopage__info">
        <h2 class="extensaopage__title">Atividades de Extensão</h2>
      </div>

      <div class="extensao">
        <form class="extensaoform" action="../pages-back/pages.php" method="post">
        <input type="hidden" name="formulario" value="5">
          <table class="extensaotable">
            <caption class="extensaotable__title">Extensão</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Projetos</th>
            </tr>
            <tr>
              <td><input class="extensaotable__input" type="text" name="ext_doc1" id="ext_doc1"></td>
              <td>
                <input class="extensaotable__input" type="text" name="ext_titulo1" placeholder="Título 1">
              </td>
            </tr>

            <tr>
            <td></td>
              <td>
                <input class="extensaotable__input" type="radio" name="ext_leader_project1" id="ext_leader_project1" value="Coordenador">
              <label for="ext_leader_project1">Coordenador</label>
                <input class="extensaotable__input" type="radio" name="ext_leader_project1" id="ext_leader_project1" value="Colaborador">
              <label for="ext_leader_project1">Colaborador</label>
              </td>
            </tr>
            
            <tr>
              <th>Nª do Doc</th>
              <th>Projetos</th>
            </tr>
            <tr>
              <td><input class="extensaotable__input" type="text" name="ext_doc2" id="ext_doc2"></td>
              <td>
                <input class="extensaotable__input" type="text" name="ext_titulo2" placeholder="Título 2">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input class="extensaotable__input" type="radio" name="ext_leader_project2" id="ext_leader_project2" value="Coordenador">
              <label for="ext_leader_project2">Coordenador</label>
                <input class="extensaotable__input" type="radio" name="ext_leader_project2" id="ext_leader_project2"  value="Colaborador">
              <label for="ext_leader_project2">Colaborador</label>
              </td>
            </tr>
          </table>

          <table class="extensaotable">
            <caption class="extensaotable__title">Estágios de Extensão</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Área de conhecimento</th>
              <th>Instituição/Local</th>
            </tr>
            <tr>
              <td><input type="text" name="ext_estagio_doc" id="ext_estagio_doc"></td>
              <td><input class="extensaotable__input" type="text" name="ext_conhecimento" id="ext_conhecimento"></td>
              <td><input class="extensaotable__input" type="text" name="ext_instituicao" id="ext_instituicao"></td>
            </tr>
            <tr class="extensaotable__row">
              <th>Período</th>
              <th>Carga horária semanal</th>
            </tr>
            <tr class="extensaotable__row">
              <td><input class="extensaotable__input" type="text" name="ext_periodo" id="ext_periodo"></td>
              <td><input class="extensaotable__input" type="number" name="ext_chs" id="ext_chs"></td>
            </tr>
          </table>
          
          <table class="extensaotable">
            <caption class="extensaotable__title">Atividade de ensino não-formal</caption>
            <tr>
              <th>Nª do Doc</th>
              <th>Atividades</th>
              <th>Carga Horária Semanal</th>
            </tr>
            <tr>
              <td><input class="extensaotable__input" type="text" name="ext_enf_doc" id="ext_enf_doc"></td>
              <td><input class="extensaotable__input" type="text" name="ext_atividade" id="ext_atividade"></td>
              <td><input class="extensaotable__input" type="number" name="ext_chs_total" id="ext_chs_total"
                  placeholder="CH total / 23 semanas"></td>
            </tr>
            </table>
            
          <nav class="navigation">
            <input class="navigation__button" type="submit" value="Salvar">
            <input class="navigation__button navigation__button--reset" type="reset" value="Resetar">
              </nav>
        </form>
          
      </div>
    </div>
    </main>
</body>

</html>
