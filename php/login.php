<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css" media="screen" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <title> Login </title>
</head>
<div id="main-container">

    <h1>Realizar Login</h1>
    
    <form id="register-form" action="./logar.php" method="POST">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Entrar">
      </div>
      <div >
        <label >Não Possui uma <a href="cadastro.php">Conta?</a></label>
        <br>
        <label> Gostaria de visualizar o <a href="../index.php">Sistema</a>?</label>
      </div>
    </form>
  </div>
<p class="error-validation template"></p>
<script src="../../script/validadtion.js"></script>
<body>
    
</body>

</html>



