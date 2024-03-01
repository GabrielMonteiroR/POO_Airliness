<?php

require_once "Voo.php";
require_once "Aeronave.php";

/*
 1. Porto Alegre 2. Caxias do Sul 3. Florianópolis 4. Joinville 5. Curitiba
 6. Londrina 7. São Paulo 8. Guarulhos 9. Rio de Janeiro 10. São Gonçalo
11. Vitória 12. Vila Velha 13. Belo Horizonte 14. Uberlândia
15. Brasília 16. Goiânia 17. Campo Grande 18. Cuiabá 19. Recife 20. Salvador
21. Manaus 22. Belém 23. Porto Velho 24. São Luís 25. Boa Vista
26. Rio Branco
*/

$voo = new Voo(1222,1,25);

echo "Origem: ".$voo->getOrigemNomeCidade()."\n"; 
echo "Destino: ".$voo->getDestinoNomeCidade()."\n";
echo round($voo->calcularDistanciaDeVoo(), 2)." KM APROXIMADOS.";


?>
