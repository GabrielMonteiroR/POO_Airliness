
<?php

class Voo 
{
    private int $numeroVoo;
    private int $origem;
    private int $destino;
    private array $coordenadas;

    public function __construct($numeroVoo, $origem, $destino)
{
    $this->numeroVoo = $numeroVoo;
    $this->origem = $origem;
    $this->destino = $destino;
    $this->coordenadas = $this->coordenadas();
}

    private function coordenadas()
    {
        return [
            1 => ['cidade' => 'Porto Alegre', 'latitude' => -29.6822, 'longitude' => -53.8069],
            2 => ['cidade' => 'Caxias do Sul', 'latitude' => -30.0331, 'longitude' => -51.2300],
            3 => ['cidade' => 'Florianópolis', 'latitude' => -27.5945, 'longitude' => -48.5480],
            4 => ['cidade' => 'Joinville', 'latitude' => -26.3045, 'longitude' => -48.8461],
            5 => ['cidade' => 'Curitiba', 'latitude' => -25.4296, 'longitude' => -49.2719],
            6 => ['cidade' => 'Londrina', 'latitude' => -23.3045, 'longitude' => -51.1694],
            7 => ['cidade' => 'São Paulo', 'latitude' => -23.5505, 'longitude' => -46.6333],
            8 => ['cidade' => 'Guarulhos', 'latitude' => -23.5505, 'longitude' => -46.6333],
            9 => ['cidade' => 'Rio de Janeiro', 'latitude' => -22.9068, 'longitude' => -43.1729],
            10 => ['cidade' => 'São Gonçalo', 'latitude' => -22.9083, 'longitude' => -43.1970],
            11 => ['cidade' => 'Vitória', 'latitude' => -20.2976, 'longitude' => -40.2956],
            12 => ['cidade' => 'Vila Velha', 'latitude' => -20.3155, 'longitude' => -40.3128],
            13 => ['cidade' => 'Belo Horizonte', 'latitude' => -19.9198, 'longitude' => -43.9386],
            14 => ['cidade' => 'Uberlândia', 'latitude' => -19.9102, 'longitude' => -43.9266],
            15 => ['cidade' => 'Brasília', 'latitude' => -15.7833, 'longitude' => -47.8667],
            16 => ['cidade' => 'Goiânia', 'latitude' => -16.6799, 'longitude' => -49.255],
            17 => ['cidade' => 'Campo Grande', 'latitude' => -20.4503, 'longitude' => -54.6167],
            18 => ['cidade' => 'Cuiabá', 'latitude' => -16.4625, 'longitude' => -54.6344],
            19 => ['cidade' => 'Recife', 'latitude' => -8.0476, 'longitude' => -34.8770],
            20 => ['cidade' => 'Salvador', 'latitude' => -12.9714, 'longitude' => -38.5014],
            21 => ['cidade' => 'Manaus', 'latitude' => -3.1019, 'longitude' => -60.0250],
            22 => ['cidade' => 'Belém', 'latitude' => -1.4558, 'longitude' => -48.4902],
            23 => ['cidade' => 'Porto Velho', 'latitude' => -8.7608, 'longitude' => -63.9000],
            24 => ['cidade' => 'São Luís', 'latitude' => -2.5290, 'longitude' => -44.3020],
            25 => ['cidade' => 'Boa Vista', 'latitude' => -3.4168, 'longitude' => -65.8561],
            26 => ['cidade' => 'Rio Branco', 'latitude' => -7.1195, 'longitude' => -34.8450],
        ];
    }

  
    public function getNomeCidade($numero)
    {
        return $this->coordenadas[$numero]['cidade'] ?? 'Cidade não encontrada';
    }


    public function getOrigemNomeCidade()
    {
        return $this->getNomeCidade($this->origem);
    }

   
    public function getDestinoNomeCidade()
    {
        return $this->getNomeCidade($this->destino);
    }


    public function calcularDistanciaDeVoo()
    {
        $coordenadasOrigem = $this->coordenadas[$this->origem];
        $coordenadasDestino = $this->coordenadas[$this->destino];

        $latitudeOrigem = deg2rad($coordenadasOrigem['latitude']);
        $longitudeOrigem = deg2rad($coordenadasOrigem['longitude']);
        $latitudeDestino = deg2rad($coordenadasDestino['latitude']);
        $longitudeDestino = deg2rad($coordenadasDestino['longitude']);
        
        $latitudeJuntada = $latitudeDestino - $latitudeOrigem;
        $longitudeJuntada = $longitudeDestino - $longitudeOrigem;
        
        $a = sin($latitudeJuntada / 2) * sin($latitudeJuntada / 2) +
             cos($latitudeOrigem) * cos($latitudeDestino) *
             sin($longitudeJuntada / 2) * sin($longitudeJuntada / 2);
           
        $c = 2 * asin(sqrt($a));
               
        return $c * 6371;         
    }
    public function setorigem($origem)
    {
        $this -> origem = $origem;
    }
    public function setdestino($destino)
    {
        $this -> destino = $destino;
    }
    public function setnumeroVoo($numeroVoo)
    {
        $this -> numeroVoo = $numeroVoo;
    }
}

