<?php

require_once "./conexaoPDO.php";
   
require_once "../OOP/Cliente.php";


    $cliente = new Cliente();
    

   
    $cliente->email = $_POST['email'];
    $cliente->nome = $_POST['nome'];
    $cliente->senha = $_POST['senha'];
    $cliente->id = $_POST['id'];
    

    if($cliente-> alterarContato($pdo, $cliente->id, $cliente->nome, $cliente->email, $cliente->senha)){
        header('Location: ../index.php?page=Cadastro&alterado=true');
    }
    