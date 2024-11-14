<?php

require 'php/conexaoPDO.php';

$sessaoAtiva = isset($_SESSION['idUser']) && !empty($_SESSION['idUser']);


if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

require_once 'OOP/Usuario.php';
$user = new Usuario();

$listLogged = $user->logged($_SESSION['idUser']);

$nomeUser = $listLogged['nome'];


}
 
