<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
    'Henrique',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Gerente(
    'Fernanda',
    new CPF('123.456.789-10'),
    'Gerente',
    5900
);

$umDiretor = new Diretor(
    'Vinicius',
    new CPF('454.235.342-12'),
    'Diretor',
    12000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();