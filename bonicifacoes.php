<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Funcionario, Gerente, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
    'Henrique',
    new CPF('123.456.789-10'),
    1000
);

$umaFuncionaria = new Gerente(
    'Fernanda',
    new CPF('123.456.789-10'),
    5900
);

$umDiretor = new Diretor(
    'Vinicius',
    new CPF('454.235.342-12'),
    12000
);

$umEditor = new EditorVideo(
    'Danilo',
    new CPF('234.567.243-39'),
    4500
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();