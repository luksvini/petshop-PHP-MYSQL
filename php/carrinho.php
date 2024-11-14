<?php


require_once '../verifica.php';
require '../OOP/Carrinho.php';
require '../OOP/Produto.php';




$imgProdutos = [
 1 =>["nomeImagem" => "001.png", "id" => 1, "descricao" => "Ração", "categoria" => "Rações", "valor" => "R$50.00"],
    
 2 =>  ["nomeImagem" => "003.png", "id" => 2, "descricao" => "Brinquedo", "categoria" => "Brinquedos", "valor" => "R$20.00"],
    
 3 =>  ["nomeImagem" => "005.png", "id" => 3, "descricao" => "Remédio", "categoria" => "Remédios", "valor" => "R$30.00"]
];


$paginas = [
    "Home" => "../index.php",
    "Sobre" => "sobre.php",
    "Cadastro" => "cadastro.php",
    "Login" => "login.php",
    "Produtos" => "produtos.php",
    "Carrinho" => "carrinho.php"
  ];
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/produtos.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    
</head>
<body>

<header>

  <div class="logo">
    <img src="../assets/LogPrinc.jpeg">
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
                    echo "<a href='logout.php'>Sair</a>";
                   }
                ?>

</nav>


<main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
    <section>

   

        <table>
        <thead>
        <?php
                foreach ($imgProdutos as $produto) {
                ?>
            
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                
            </tr>
        </thead>
        <tbody>
             <tr>       
            <td>
            <form method="POST" action="addCarrinho.php">
                <div class="product">
                <img src="../images/<?= $produto['nomeImagem']?>">
                <div class="info">
                    <div class="name"><?=$produto['descricao']?></div>
                    <div class="category"><?=$produto['categoria']?></div>
                </div>
                <input type="hidden" value="<?$produto['nomeImagem']?>"name="nomeImagem">
                <input type="hidden" value="<?$produto['id']?>"name="id">
                <input type="hidden" value="<?$produto['descricao']?>"name="descricao">
                <input type="hidden" value="<?$produto['categoria']?>"name="categoria">
                <input type="hidden" value="<?$produto['valor']?>"name="valor">
            </td>
           
            <td><?=$produto['valor']?></td>
            <td><?=$produto['descricao']?></td>

            
            <td> <input type="number" name="quantidade" value="1"> </td>
           
            <td> <input type="submit" name="adicionar_mais" value="Adicionar item ao carrinho"> </td>
            </form>
            
            </tr>
            <?php
                }
                ?>
        </tbody>
        </table>
       
    </section>
    
    </div>
</main>




</body>
</html>