<?php

//Titular é uma pessoa
class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco()
    {
        return $this->endereco;
    }
}