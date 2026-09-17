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
Descritivo: Escreva um programa que leia uma string correspondente a uma data no formato ddmmaa (6 dígitos, ex: 250826) e exiba o dia, mês e ano de forma separada.
*******************************************************************************/

// O programa lê uma string de 6 dígitos e usa substr() para separar os
// dois primeiros caracteres (dia), os dois seguintes (mês) e os dois
// últimos (ano), exibindo cada parte individualmente.

fwrite(STDOUT, "Digite uma data no formato ddmmaa (6 dígitos): ");
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia: $dia" . PHP_EOL;
echo "Mês: $mes" . PHP_EOL;
echo "Ano: $ano" . PHP_EOL;
