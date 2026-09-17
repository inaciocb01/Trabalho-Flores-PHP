<?php
/******************************************************************************
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

Descritivo: 49: Escreva um programa que leia três números e os exiba na tela em ordem crescente e,
posteriormente, em ordem decrescente.
 *******************************************************************************/

$numero1 =  readline("Digite o primeiro número: ");
$numero2 =  readline("Digite o segundo número: ");
$numero3 =  readline("Digite o terceiro número: ");

$maior = $numero1;
$menor = $numero1;
$meio = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}
if ($numero3 > $maior) {
    $maior = $numero3;
}
if ($numero2 < $menor) {
    $menor = $numero2;
}
if ($numero3 < $menor) {
    $menor = $numero3;
}

if ($numero2 != $maior && $numero2 != $menor) {
    $meio = $numero2;
}
if ($numero3 != $maior && $numero3 != $menor) {
    $meio = $numero3;
}

echo "Ordem crescente: $menor, $meio, $maior\n";
echo "Ordem decrescente: $maior, $meio, $menor\n";

/*
lê três números e os exibe na tela em ordem crescente e em ordem decrescente.
*/

?>