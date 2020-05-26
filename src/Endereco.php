<?php


class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    /**
     * Endereco constructor.
     * @param $cidade
     * @param $bairro
     * @param $rua
     * @param $numero
     */
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function recuperaCidade()
    {
        return $this->cidade;
    }

    /**
     * @return string
     */
    public function recuperaBairro()
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function recuperaRua()
    {
        return $this->rua;
    }

    /**
     * @return string
     */
    public function recuperaNumero()
    {
        return $this->numero;
    }
}