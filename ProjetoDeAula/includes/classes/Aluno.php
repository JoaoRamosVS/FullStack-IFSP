<?php

class Aluno {
    private $prontuario;
    private $nome;
    private $sobrenome;
    private $idade;

    function __construct($nome, $sobrenome, $idade) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    function get_prontuario() {
        return $this->prontuario;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_sobrenome() {
        return $this->sobrenome;
    }

    function get_idade() {
        return $this->idade;
    }
}

