<?php 

require '../OOP/Carrinho.php';
require '../OOP/Produto.php';
require_once '../verifica.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se os dados necessários foram enviados
  if (isset($_POST['nomeImagem'], $_POST['id'], $_POST['descricao'], $_POST['categoria'], $_POST['valor'], $_POST['quantidade'])) {
    // Cria um objeto Produto com os dados enviados
    $produto = new Produto($_POST['nomeImagem'], $_POST['id'], $_POST['descricao'], $_POST['categoria'], $_POST['valor']);
    $quantidade = $_POST['quantidade'];

    // Cria ou recupera o carrinho da sessão
    if (isset($_SESSION['carrinho'])) {
      $carrinho = $_SESSION['carrinho'];
    } else {
      $carrinho = new Carrinho();
    }

    // Adiciona o item ao carrinho
    $carrinho->adicionarItem($produto, $quantidade);

    // Atualiza o carrinho na sessão
    $_SESSION['carrinho'] = $carrinho;

    // Redireciona para a página do carrinho
    header('Location: carrinho.php');
    exit;
  }
}