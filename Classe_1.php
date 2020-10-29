<?php

class Pessoa{
    public $nome;

    public function falarNome(){
        echo $this->nome;
    }
}

$uma_pessoa = new Pessoa;
$uma_pessoa->nome="João";