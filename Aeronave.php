<?php

class Aeronave
{
    private $identificacaoAeronave;
    private $modelo;
    private $capacidade;
    

    public function __construct()
    {
        $this -> modelo = $modelo;
        $this -> capacidade =  $capacidade;   
        $this -> identificacaoAeronave = $idAeronave;

    }
    public function getidentificacaoAeronave()
    {
        return $this -> identificacaoAeronave;
    }
    public function getmodelo()
    {
        return $this -> identificacaoAeronave;
        return $this -> modelo;
        return $this -> capacidade;
    }
    public function getcapacidade()
    {
        return $this -> capacidade;
    }
    /*public function setidentificacaoAeronave()
    {
        $this -> identificacaoAeronave = 
    }*/
}


