<?php

class Produto {
  private $nomeImagem;
  private $id;
  private $descricao;
  private $categoria;
  private $valor;

  public function __construct($nomeImagem, $id, $descricao, $categoria, $valor) {
    $this->nomeImagem = $nomeImagem;
    $this->id = $id;
    $this->descricao = $descricao;
    $this->categoria = $categoria;
    $this->valor = $valor;
  }

  // Getters para acessar os atributos privados

  public function getNomeImagem() {
    return $this->nomeImagem;
  }

  public function getId() {
    return $this->id;
  }

  public function getDescricao() {
    return $this->descricao;
  }

  public function getCategoria() {
    return $this->categoria;
  }

  public function getValor() {
    return $this->valor;
  }
}