<?php

class Produto {

    private $id;
    private $nome;
    private $descricao;
    private $valor;
    private $quantidade;
    private $caminho_foto_capa;
    
    public function __construct($id = null, $nome, $descricao = null, $valor, $quantidade, $caminho_foto_capa = null) 
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        if($id) {
            $this->id = $id;
        }
        if($descricao) {
            $this->descricao = $descricao;
        }
        if($caminho_foto_capa) {
            $this->caminho_foto_capa = $caminho_foto_capa;
        }
    }

    public function getId() { return $this->id; } 
    public function getNome() { return $this->nome; }
    public function getDescricao() { return $this->descricao; }
    public function getValor() { return $this->valor; }
    public function getQuantidade() { return $this->quantidade; }
    public function getCaminhoFotoCapa() {return $this->caminho_foto_capa; }    
}