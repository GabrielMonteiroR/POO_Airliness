<?php

class Piloto
{
    private $nomePiloto;
    private $cpl;
    private $cpf;

    public function __construct($nomePiloto,$cpl,$cpf)
    {
        $this -> nomePiloto = $nomePiloto;
        $this -> cpl = $cpl;
        $this -> cpf = $cpf;
    }

    public function setnomePiloto($nomePiloto) 
    {
        $this -> nomePiloto = $nomePiloto;
    }
    public function setcpl($cpl)
    {
        $this -> cpl = $cpl;
    }
    public function setcpf($cpf)
    {
        $this -> cpf = $cpf;
    }
}

