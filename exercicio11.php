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
Descritivo: Escreva um programa que leia dois números inteiros e exiba o produto (multiplicação) entre eles.
*******************************************************************************/

// O programa lê dois números inteiros digitados pelo usuário via terminal
// e calcula o produto entre eles usando o operador de multiplicação (*).

fwrite(STDOUT, "Digite o primeiro número inteiro: ");
$num1 = (int) trim(fgets(STDIN));

fwrite(STDOUT, "Digite o segundo número inteiro: ");
$num2 = (int) trim(fgets(STDIN));

$produto = $num1 * $num2;

echo "Produto: $produto" . PHP_EOL;

/*
 * Resumo para o chefe: script simples em PHP puro (CLI) que pede dois
 * números inteiros ao usuário e exibe o resultado da multiplicação
 * entre eles. Sem dependências externas.
 */
