<?php

class Atestado {
    private $nome;
    private $turma;
    private $prontuario;
    private $matriculado;

    // function __construct($nome, $turma = null) {
    //     $this->nome = $nome;
    //     $this->turma = $turma;
    // }

    function __construct($nome, $turma = null) {
        $this->nome = $nome;
        $this->turma = $turma;
    }

    private function geraConteudo() {
        $text = 'Declaro para os devidos fins que ';
        $text .= $this->nome . ' é, por incrível que pareça, ';
        $text .= 'aluno do IFSP - Guarulhos.';
        return $text;
    }

    private function turma() {
        if($this->turma) {
            $text = ' O referido aluno está matriculado na turma ';
            return $text . $this->turma;
        }
        return '';
    }

    public function imprime() {
        echo $this->geraConteudo();
        echo $this->turma();
    }
}