<?php

//Funcionário é uma pessoa
class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct($nome, CPF $cpf, $cargo)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}