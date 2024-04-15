<?php
include 'login_verification.php';
$nome = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="../assets/styles/style.css">
  <script src="../script.js" defer></script>
</head>

<body class="bodyhome">
  <header class="headerhome">
    <img class="headerhome__image" src="../assets/images/login/logoufra.svg" alt="Logo da UFRA">
    <p class="headerhome__title">UFRA - Universidade Federal Rural da Amazônia</p>
  </header>
  <main class="homemain">
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
        <div id="sair" class="sidemenu__logout"><a class="sidemenu__logout--button" href="../logoff-session.php">SAIR</a></div>
      </div>
    </div>
    <div class="homepage">
      <div class="homepage__info">
        <h2 class="homepage__title">Página Inicial</h2>
        <p>Sistema de Cadastro de Atividades Docentes.</p>
        <div class="homepage__welcome">Bem Vindo,
          <?php echo $nome; ?>!
        </div>
      </div>

      <hr>

      <a class="edit-profile__link" href="../profile/edit-profile.php">
        <button class="edit-profile__button">Editar Perfil</button>
      </a>

      <hr>

      <form class="homeform" action="../pages-back/pages.php" method="post">
        <input type="hidden" name="formulario" value="1">
        <div class="homeform-one">
          <div class="homeform-one__element">
            <label for="user_name">Nome completo: </label>
            <input type="text" name="user_name" id="user_name">
           </div>
          <div class="homeform-one__element">
            <label>Classe:</label>
            <input type="text" name="classe" id="classe">
          </div>
          <div class="homeform-one__element">
            <label>Regime Trabalho:</label>
            <input type="text" name="regime_trabalho" id="regime_trabalho">
          </div>
          <div class="homeform-one__element">
            <label>Nível:</label>
            <select name="nivel">
              <option value="Graduação">Graduação</option>
              <option value="Pós-Graduação">Pós-Graduação</option>
            </select>
          </div>
          <div class="homeform-one__element">
            <label>Titulação:</label>
            <input type="text" name="titulacao" id="titulacao">
          </div>
          <div class="homeform-one__element">
            <label>Lotação:</label>
            <input type="text" name="lotacao" id="lotacao">
          </div>
          <div class="homeform-one__element">
            <label>Empregador:</label>
            <input type="text" name="empregador" id="empregador">
          </div>
          <div class="homeform-one__element">
            <label>Cargo:</label>
            <input type="text" name="cargo" id="cargo">
          </div>
          <div class="homeform-one__element">
            <label>Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro">
          </div>
          <div class="homeform-one__element">
            <label>Cidade:</label>
            <input type="text" name="cidade" id="cidade">
          </div>
          <div class="homeform-one__element">
            <label>Bairro:</label>
            <input type="text" name="bairro" id="bairro">
          </div>
          <div class="homeform-one__element">
            <label>UF:</label>
            <select name="uf" id="uf">
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP">SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
            </select>
          </div>
          <div class="homeform-one__element">
            <label>CEP:</label>
            <input type="text" name="cep" id="cep" pattern="[0-9]{8}">
          </div>
          <div class="homeform-one__element">
            <label>E-Mail:</label>
            <input type="text" name="user_email" id="user_email">
          </div>
          <div class="homeform-one__element">
            <label>Telefone:</label>
            <input type="text" name="telefone" id="telefone" pattern="[0-9]{11}">
          </div>
            <nav class="navigation">
              <input class="navigation__button" placeholder="0" type="submit" value="Salvar">
              <input class="navigation__button" placeholder="0" type="reset" value="Resetar">
            </nav>
          </form>
        </div>

        <button onclick="changeName();" placeholder="0" type="button" class="expand__button" id="expand__button">&#9196;
          Expandir
          &#9196;</button>
        <div class="ensinopage" style="display:block;">
          <p class="ensinopage__title">ENSINO</p>
          <form action="../pages-back/pages.php" method="post">
          <input type="hidden" name="formulario" value="2">
          <table class="ensinotable ensinotable--chs">
            <caption class="ensinotable__title">Cálculo da CH semanal de aulas</caption>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">Semestre</th>
              <th class="ensinotable__header">Graduação</th>
              <th class="ensinotable__header">Total</th>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">1º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" placeholder="0"
                  type="number" name="chs_graduacao1" id="chs_graduacao1"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_graduacao1_total" id="chs_graduacao1_total"></td>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">2º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_graduacao2" id="chs_graduacao2"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_graduacao2_total" id="chs_graduacao2_total"></td>
            </tr>
            <tr class="ensinotable__row--margin">
              <th class="ensinotable__header">Semestre</th>
              <th class="ensinotable__header">Pós-Graduação</th>
              <th class="ensinotable__header">Total</th>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">1º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_pos_graduacao1" id="chs_pos_graduacao1"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_pos_graduacao1-total" id="chs_pos_graduacao1-total"></td>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">2º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_pos_graduacao2" id="chs_pos_graduacao2"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="chs_pos_graduacao2-total" id="chs_pos_graduacao2-total"></td>
            </tr>
          </table>

          <table class="ensinotable">
            <caption class="ensinotable__title">Atividades pedagógicas complementares</caption>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">Semestre</th>
              <th class="ensinotable__header">Graduação</th>
              <th class="ensinotable__header">Total</th>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">1º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_graduacao1" id="apc_graduacao1"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_graduacao1_total" id="apc_graduacao1_total"></td>
            </tr>
            <tr>
              <th class="ensinotable__header">2º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_graduacao2" id="apc_graduacao2"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_graduacao2_total" id="apc_graduacao2_total"></td>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">Semestre</th>
              <th class="ensinotable__header">Pós-Graduação</th>
              <th class="ensinotable__header">Total</th>
            </tr>
            <tr class="ensinotable__row">
              <th class="ensinotable__header">1º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_pos_graduacao1" id="apc_pos_graduacao1"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_pos_graduacao1_total" id="apc_pos_graduacao1_total"></td>
            </tr>
            <tr>
              <th class="ensinotable__header">2º</th>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_pos_graduacao2" id="apc_pos_graduacao2"></td>
              <td class="ensinotable__data"><input class="ensinotable__input" placeholder="0" type="number"
                  name="apc_pos_graduacao2_total" id="apc_pos_graduacao2_total"></td>
            </tr>
          </table>

          <table class="ensinotable">
            <caption class="ensinotable__title">Atividades de orientação/supervisão receptoria e tutoria</caption>
            <tr>
              <th>Semestre</th>
              <th>Orientação</th>
              <th>Co-orientação</th>
              <th>Supervisão</th>
              <th>Perceptoria <br> e/ou Tutoria</th>
              <th>Total</th>
            </tr>
            <tr>
              <th>1º</th>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_orientacao1"
                  id="aosrt_orientacao1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_co_orientacao1"
                  id="aosrt_co_orientacao1">
              </td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_supervisao1"
                  id="aosrt_supervisao1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_perceptuto1"
                  id="aosrt_perceptuto1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_total1" id="aosrt_total1">
              </td>
            </tr>
            <tr>
              <th>2º</th>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_orientacao2"
                  id="aosrt_orientacao2"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_co_orientacao2"
                  id="aosrt_co_orientacao2">
              </td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_supervisao2"
                  id="aosrt_supervisao2"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_perceptuto2"
                  id="aosrt_perceptuto2"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="aosrt_total2" id="aosrt_total2">
              </td>
            </tr>
          </table>

          <table class="ensinotable ensinotable--sa">
            <caption class="ensinotable__title">Supervisão Acadêmica</caption>
            <tr>
              <th>Nº do DOC</th>
              <th>Matrícula</th>
              <th>Curso</th>
              <th>Tipo</th>
              <th>Nível</th>
              <th>CH semanal <br> 1º semestre</th>
              <th>CH semanal <br> 2º semestre</th>
            </tr>
            <tr>
              <td><input class="ensinotable--sa__input" placeholder="0" type="text" name="sa_doc" id="sa_doc"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="text" name="sa_matricula"
                  id="sa_matricula"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="text" name="sa_curso" id="sa_curso"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="text" name="sa_tipo" id="sa_tipo"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="text" name="sa_nivel" id="sa_nivel"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="number" name="sa_chs1" id="sa_chs1"></td>
              <td><input class="ensinotable--sa__input" placeholder="0" type="number" name="sa_chs2" id="sa_chs2"></td>
            </tr>
          </table>

          <table class="ensinotable">
            <caption class="ensinotable__title">Receptoria e/ou tutoria de residência</caption>
            <tr>
              <th>Nº do DOC</th>
              <th>Matrícula</th>
              <th>Tipo</th>
              <th>CH semanal <br> 1º semestre</th>
              <th>CH semanal <br> 1º semestre</th>
            </tr>
            <tr>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="rtr_doc" id="rtr_doc"></td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="rtr_matricula" id="rtr_matricula">
              </td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="rtr_tipo" id="rtr_tipo"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="rtr_chs1" id="rtr_chs1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="rtr_chs2" id="rtr_chs2"></td>
            </tr>
          </table>

          <table class="ensinotable">
            <caption class="ensinotable__title">Banca Examinadora</caption>
            <tr>
              <th>Nº do DOC</th>
              <th>Descrição</th>
              <th>Tipo</th>
              <th>CH semanal <br> 1º semestre</th>
              <th>CH semanal <br> 1º semestre</th>
            </tr>
            <tr>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="be_doc" id="be_doc"></td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="be_descricao" id="be_descricao">
              </td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="be_tipo" id="be_tipo"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="be_chs1" id="be_chs1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="number" name="be_chs2" id="be_chs2"></td>
            </tr>
          </table>
          <table class="ensinotable">
            <caption class="ensinotable__title">Avaliação Discente</caption>
            <tr>
              <th>Nº Doc</th>
              <th>1º semestre</th>
            </tr>
            <tr>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="ad_doc1" id="ad_doc1"></td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="ad_semestre1" id="ad_semestre1">
              </td>
            </tr>
            <tr>
              <th>Nº Doc</th>
              <th>2º semestre</th>
            </tr>
            <tr>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="ad_doc2" id="ad_doc2"></td>
              <td><input class="ensinotable__input" placeholder="0" type="text" name="ad_semestre2" id="ad_semestre2">
              </td>
            </tr>
          </table>
            <nav class="navigation">
              <input class="navigation__button" placeholder="0" type="submit" value="Salvar">
              <input class="navigation__button" placeholder="0" type="reset" value="Resetar">
            </nav>
        </div>
      </form>
    </div>
    </div>
  </main>
</body>

</html>
