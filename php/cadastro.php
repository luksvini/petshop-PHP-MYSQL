<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css" media="screen" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title> Cadastro Usuário </title>
</head>

<div id="main-container">
   


      <?php
      if (isset($_GET['alterado'])){
        if($_GET['alterado'] == true){
          echo "<script>alert('Contato alterado com sucesso.');</script>";
        } else{
          echo "<script>alert('Contato não alterado.');</script>";
        }
      }

      if(!isset($_POST['id'])){
        //tela de cadastro
      ?>

    <form id="register-form" method="POST" action="./addContato.php" >
      
    <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate required>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16" required>
      </div>
      
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required required>
      </div>
      
      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
      </div>
     
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar" name="submit" > 
      </div>
       <div class="cad">
        <label>Já tem uma <a href="login.php">Conta</a>?</label>
        <br>
        <label> Gostaria de visualizar o <a href="../index.php">Sistema</a>?</label>
      </div>
    </form>
  </div>


  <?php
  }
  else{
    //tela de alterar
    require_once '../verifica.php';
    require_once '../OOP/Cliente.php';
    $contato = new Cliente();
            $contato = $contato-> listarContatos($pdo);
           
    
  ?>

<h1>Alterar Contato</h1>


<form id="register-form" method="POST" action="alterarContato.php" >
<div class="full-box">
  
      <input type="hidden" value="<?= $contato[0]->id ?>" name="id">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= $contato[0]->email?>">
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="nome" id="nome" value="<?= $contato[0]->nome?>">
      </div>
      
      
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        
        <input type="password" name="senha" id="password" placeholder="Alterar senha?">
      </div>
      
  
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Alterar" name="submit" > 
      </div>
  </form>


  </div>

  <?php
    }


?>


<p class="error-validation template"></p>



 <!-- quebrei a cabeça pra fazer esse script funcionar junto do restante dos codigos php mas não consegui :/   
<script src="./script/validadtion.js"></script>
-->
<body>
    
</body>

</html>