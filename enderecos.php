<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'qualquer', 'minhaRua', '1b');
$outroEndereco = new Endereco('Goiania', 'outro', 'uma rua aí', '25');

echo $umEndereco->bairro;

exit();

