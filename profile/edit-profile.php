<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - RADOC Digital</title>
    <link rel="stylesheet" href="../assets/styles/style.css">
    <script src="../script.js" defer></script>
</head>
<body>
    <h1>Editar perfil</h1>
    <form action="process-profile.php" method="post">
        
        <div class="form__field">
            <label class="form__field-user" for="user_name"></label>
            <input class="form__field-input" type="text" maxlength ="50" placeholder="Nome completo" name="user_name" id="user_name" required>
        </div>

        <div class="form__field">
            <label class="form__field-user" for="user_registration"></label>
            <input class="form__field-input" type="text" maxlength="10" placeholder="Nova matrícula" name="user_registration" id="user_registration"  required>
        </div>

        <div class="form__field">
            <label class="form__field-user" for="user_email"></label>
            <input class="form__field-input" type="email" maxlength="50" placeholder="Novo e-mail" name="user_email" id="user_email" required>
        </div>
          
        <div class="form__field">
            <label class="form__field-user" for="user_password"></label>
            <input class="form__field-input" type="password" maxlength="12" placeholder="Nova senha" name="user_password" id="user_password" required>
        </div>

        <div class="form__field">
            <label class="form__field-user" for="user_confirm"></label>
            <input class="form__field-input" type="password" maxlength="12" placeholder="Confirmar nova senha" name="user_confirm" id="user_confirm" required>
        </div>
            
          <button class="form__button" type="submit">Atualizar</button>
          <button class="form__button" type="reset">Resetar</button>
    </form>

    <footer class="footerlogin">
        <p class="footerlogin__text">RADOC Digital</p>
    </footer>
</body>
</html>
