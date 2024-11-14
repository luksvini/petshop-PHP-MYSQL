<?php
require 'verifica.php';

if (isset($_GET['success']) && $_GET['success'] == 1) {
  // Exibir pop-up de sucesso
  echo "<script>alert('Contato cadastrado com sucesso.');</script>";
}



$paginas = [
    "Home" => "index.php",
    "Sobre" => "./php/sobre.php",
    "Cadastro" => "./php/cadastro.php",
    "Login" => "./php/login.php",
    "Produtos" => "./php/produtos.php",
    "Carrinho" => "./php/carrinho.php"
  ];
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    
</head>
<body>



<header>


  <div class="logo">
    <img src="./assets/LogPrinc.jpeg">
</div>
    <span>Chérie Petco.</span>

</header>

<nav> 


        <?php
        if($sessaoAtiva){ 
        echo $nomeUser;
        } else{
          echo "Visitante";
        }
                foreach ($paginas as $pagina => $valor) {
                    echo "<a href='$valor' target='_blank'>$pagina</a>";
                }

                if($sessaoAtiva){
                  echo'<br><br>';
                  
                 }



                ?>
       
       
        
</nav>

<main>

<div class="container2">
<div class="usuarioNome">
<h1>Bem vindo</h1>
<?php if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
?>

    <h2><?php echo $nomeUser; ?>!</h2>
    <?php
    echo '<button type="submit" value="Sair"> <a href="./php/logout.php">Sair?</a </button>';
} else{
  // Não Logados
  echo "<h2>Visitante!</h2>";
  echo'<button type="submit" value="Entrar"> <a href="./php/login.php">Entrar?</a </button>';
  echo'<button type="submit" value="Cadastrar"> <a href="./php/cadastro.php">Cadastrar?</a </button>';
}
    ?>  
    
    
      </div>
              </div>


</main>


</body>
</html>

