<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
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
Descritivo: Escreva um programa que leia dois números inteiros e exiba a média aritmética simples entre eles.
*******************************************************************************/

// O programa lê dois números inteiros e calcula a média aritmética simples
// somando os dois valores e dividindo o resultado por 2.

fwrite(STDOUT, "Digite o primeiro número inteiro: ");
$num1 = (int) trim(fgets(STDIN));

fwrite(STDOUT, "Digite o segundo número inteiro: ");
$num2 = (int) trim(fgets(STDIN));

$media = ($num1 + $num2) / 2;

echo "Média: $media" . PHP_EOL;
