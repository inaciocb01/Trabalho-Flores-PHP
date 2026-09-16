<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
RA 26008762-2 - Caik dos Santos Cassiano       
RA 26007934-2 - Inácio Correa Barbosa           
RA 26008105-2 - Jonathan Manuel Rodríguez Barba 
RA 26008853-2 - Kaylane Rosa Domingos           
RA 26003569-2 - Lucas Eduardo Ferreira Branco   
RA 26014449-2 - Vitor Hugo Carvalho Stenger     
Data: 19 de Setembro de 2026
Descritivo: Programa que le um tipo de veículo e determina o total de combustível estimado para um trajeto 'X'
***************************/



$tipo = strtoupper(readline("Digite o tipo do veículo (A, B, C, D ou E): "));
$distancia = (float) readline("Digite a distância em Km: ");

$consumo = [
    "A" => 13.5,
    "B" => 12.0,
    "C" => 10.5,
    "D" => 9.0,
    "E" => 7.5
];

if (isset($consumo[$tipo])) {
    $litros = $distancia / $consumo[$tipo];

    echo "Total estimado de combustível: " . number_format($litros, 2, ',', '.') . " litros";
} else {
    echo "Tipo de veículo inválido.";
}

?>