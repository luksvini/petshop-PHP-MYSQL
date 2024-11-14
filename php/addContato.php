<?php
    require_once "./conexaoPDO.php";
   
   require_once "../OOP/Cliente.php";

   

    $cliente = new Cliente();
    $cliente->email = $_POST['email'];
    $cliente->nome = $_POST['nome'];
    
   
    $cliente->senha = md5($_POST['senha']);
    
    $cliente-> adicionarPDO($pdo);

    header("Location: ../index.php?success=1");