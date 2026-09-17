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
Descritivo: Escreva um programa que leia o nome e o sobrenome de uma pessoa e exiba-os na seguinte forma formatada: "sobrenome, nome" (exemplo: "Flores, José").
*******************************************************************************/

// O programa lê o nome e o sobrenome separadamente e monta a string de
// saída no formato "sobrenome, nome" através da concatenação dos valores.

fwrite(STDOUT, "Digite o nome: ");
$nome = trim(fgets(STDIN));

fwrite(STDOUT, "Digite o sobrenome: ");
$sobrenome = trim(fgets(STDIN));

echo "$sobrenome, $nome" . PHP_EOL;
