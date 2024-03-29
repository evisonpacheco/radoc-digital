<?php
include 'login_verification.php';
$nome =  $_SESSION['user_name'];
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
  <main class="mainhome">
    <div class="sidemenu">
      <div class="sidemenu__title">MENU PRINCIPAL</div>
      <div class="sidemenu__flex">
        <ul class="sidemenu__list">
          <a href="home.php" class="sidemenu__element">Página Inicial</a>
          <a href="./novoradoc.php" class="sidemenu__element">Cadastrar Novo RADOC</a>
	  <a href="./editar-dados.php" class="sidemenu__element" style="text-decoration:none;color:inherit;">Editar dados</a>
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
        <h2 class="homepage__title">Página Inicial</h2>
        <p>Sistema de Cadastro de Atividades Docentes.</p>
        <div class="homepage__welcome">Bem Vindo, <?php echo $nome;?>!</div>
      </div>
      
        <hr>
        
        <a href="../profile/edit-profile.php">
          <button>Editar Perfil</button>
        </a>

        <div>
          <label>Data de fechamento:</label>
          <input type="date" name="data_fechamento">
          <label>Fim Atualização:</label>
          <input type="date" name="fim_atualizacao">
        </div>
        
        <div>
          <label>Última Atualização:</label>
          <input type="date" name="ultima_atualizacao">
          <label>Ano Base:</label>
          <input type="number" name="ano_base" max="9999">
        </div>
        
        <hr>
        
        <div>
          <label>Docente:</label>
          <input type="text" name="docente">
          <label>Matrícula:</label>
          <input type="text" name="matricula">
        </div>
        
        <div>
          <label>Situação Funcional:</label>
          <input type="text" name="situacao_funcional">
          <label>Número Semanas:</label>
          <input type="number" name="numero_semanas">
        </div>
        
        <div>
          <label>Data Cadastro:</label>
          <input type="date" name="data_cadastro">
          <label>Data Ingresso UFRA:</label>
          <input type="date" name="data_ingresso_ufra">
        </div>
        
        <div>
          <label>Data Aposentadoria:</label>
          <input type="date" name="data_aposentadoria">
          <label>Data Exclusão:</label>
          <input type="date" name="data_exclusao">
        </div>
        
        <div>
          <label>Classe:</label>
          <input type="text" name="classe">
          <label>Regime Trabalho:</label>
          <input type="text" name="regime_trabalho">
        </div>
        
        <div>
          <label>Nível:</label>
          <select name="nivel">
            <option value="Graduação">Graduação</option>
            <option value="Pós-Graduação">Pós-Graduação</option>
          </select>
          <label>Titulação:</label>
          <input type="text" name="titulacao">
        </div>
        
        <div>
          <label>Lotação:</label>
          <input type="text" name="lotacao">
        </div>
        
        <div>
          <label>Empregador:</label>
          <input type="text" name="empregador">
          <label>Cargo:</label>
          <input type="text" name="cargo">
        </div>
        
        <div>
          <label>Logradouro:</label>
          <input type="text" name="logradouro">
          <label>Cidade:</label>
          <input type="text" name="cidade">
        </div>
        
        <div>
          <label>Bairro:</label>
          <input type="text" name="bairro">
          <label>UF:</label>
          <select name="uf">
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
        
        <div>
          <label>CEP:</label>
          <input type="number" name="cep" pattern="[0-9]{8}">
          <label>Volp:</label>
          <input type="text" name="volp">
        </div>
        
        <div>
          <label>E-Mail:</label>
          <input type="text" name="email">
          <label>Telefone:</label>
          <input type="number" name="telefone" pattern="[0-9]{11}">
        </div>
        
        <button class="save-button">Salvar</button>
        
      </div>
    </div>
  </main>
</body>
</html>

