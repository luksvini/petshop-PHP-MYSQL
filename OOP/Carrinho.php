<?php

class Carrinho {
    private $itens;
  
    public function __construct() {
      $this->itens = [];
    }
  
    public function adicionarItem($produto, $quantidade) {
      $itemId = $produto->getId();
  
      if (isset($this->itens[$itemId])) {
        // O item já está no carrinho, incrementa a quantidade
        $this->itens[$itemId] += $quantidade;
      } else {
        // Adiciona um novo item ao carrinho
        $this->itens[$itemId] = $quantidade;
      }
    }
  
    public function getItens() {
      return $this->itens;
    }
  }