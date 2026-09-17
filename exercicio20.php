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
Descritivo: Escreva um programa que leia uma data no formato ddmmaa (ex: 250826) e exiba a mesma data reorganizada no formato mmddaa.
*******************************************************************************/

// O programa lê uma data no formato ddmmaa, separa dia/mês/ano com
// substr() e depois concatena as partes na nova ordem (mmddaa).

fwrite(STDOUT, "Digite uma data no formato ddmmaa (6 dígitos): ");
$data = trim(fgets(STDIN));

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

$novaData = $mes . $dia . $ano;

echo "Data reorganizada (mmddaa): $novaData" . PHP_EOL;
