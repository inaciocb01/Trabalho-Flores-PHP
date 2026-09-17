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

Descritivo: 50: Escreva um programa que leia cinco números e exiba na tela o maior e o menor valor
digitado.
 *******************************************************************************/

$numero1 =  readline("Digite o primeiro número: ");
$numero2 =  readline("Digite o segundo número: ");
$numero3 =  readline("Digite o terceiro número: ");
$numero4=  readline("Digite o quarto número: ");
$numero5=  readline("Digite o quinto número: ");

$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}
elseif ($numero3 > $maior) {
    $maior = $numero3;
}
elseif ($numero4 > $maior) {
    $maior = $numero4;
}
elseif ($numero5 > $maior) {
    $maior = $numero5;
}
echo "O maior número é: $maior";

/*
lê cinco números e exibe no terminal o maior e o menor valor digitado.
*/

?>