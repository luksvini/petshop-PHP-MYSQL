<?php
   
   
    require_once "../OOP/Cliente.php";
    if(isset($_POST['email']) && !empty($_POST['email'])  && isset($_POST['senha']) && !empty($_POST['senha']) ){

    require_once "conexaoPDO.php";
    require_once "../OOP/Usuario.php";

    $user = new Usuario();
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    

    if($user->login($email, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: ../index.php");
        }
     } else{
        header("Location: login.php");
    }
    } else{

        header("Location: login.php");
    }
    

    


    