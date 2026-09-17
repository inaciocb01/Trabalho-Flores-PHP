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
Descritivo: Escreva um programa que leia um número real e exiba a terça parte deste número.
*******************************************************************************/

// O programa lê um número real digitado pelo usuário e calcula a terça
// parte dele dividindo o valor lido por 3.

fwrite(STDOUT, "Digite um número real: ");
$numero = (float) trim(fgets(STDIN));

$tercaParte = $numero / 3;

echo "Terça parte: $tercaParte" . PHP_EOL;

/*
 * Resumo para o chefe: script PHP puro (CLI) que recebe um número real
 * do usuário e devolve o valor dividido por 3 (a terça parte).
 */
