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
Descritivo: Escreva um programa que leia um número inteiro de três algarismos (de 100 a 999) e exiba o algarismo correspondente à casa das dezenas.
*******************************************************************************/

// O programa lê um número de três algarismos e isola o algarismo das
// dezenas usando divisão inteira por 10 (remove a unidade) seguida do
// resto da divisão por 10 (isola a dezena).

fwrite(STDOUT, "Digite um número inteiro de três algarismos (100 a 999): ");
$numero = (int) trim(fgets(STDIN));

$dezena = intdiv($numero, 10) % 10;

echo "Algarismo das dezenas: $dezena" . PHP_EOL;
