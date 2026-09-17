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

Descritivo: 48: escreva um programa que leia três números reais e exiba o maior deles.
 *******************************************************************************/

$numero1 =  readline("Digite o primeiro número: ");
$numero2 =  readline("Digite o segundo número: ");
$numero3 =  readline("Digite o terceiro número: ");

$maior = $numero1;

if ($numero1 > $numero2 && $numero1 > $numero3) {
    $maior = $numero1;
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

echo "O maior número é: $maior";

/*
lê três numeros reais e determina qual deles é o maior.
*/

?>