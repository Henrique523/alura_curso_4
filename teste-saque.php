<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once ('autoload.php');


$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Henrique',
        new Endereco('Goiânia', 'Bueno', 'tres', '45'))
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();