<?php

session_start();


$host = "localhost";
$usuario = "root";
$senha ="root";
$db = "cherie";


global $pdo;

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
    exit;
}





?>