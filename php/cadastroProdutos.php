<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>

    <link rel="stylesheet" href="./css/produto.css">
</head>
<body>

<header>
    <h1> Produtos </h1>
    <small> Cadastro de produtos </small>
    </header>
   
   
    <div class="container-cad">
    <form method="GET" action ="addProduto.php">
  
        <label for ="nome">Nome do Produto</label>
        <input type="text" name="nomeProd" required> 
      
        <label for ="preco">Preço do Produto</label>
        <input type="number" name="precoProd" required> 

        <label for ="descricao">Descrição do Produto</label>
        <input type="text" name="descricaoProd" required> 

        <label for ="descricao">Quantidade do Produto</label>
        <input type="number" name="quantidadeProd" required> 

        
        
        <input type="submit" value="Cadastrar">
       
        </form>
    </div>

    
    
</body>
</html>