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
Descritivo: Escreva um programa que leia o nome de um aluno e suas duas notas em avaliações (AVs), calcule a média aritmética simples e exiba o nome do aluno seguido de sua média final.
*******************************************************************************/

// O programa lê o nome do aluno e as notas das duas avaliações (AV1 e AV2),
// calcula a média aritmética simples entre elas e exibe o nome junto do
// resultado.

fwrite(STDOUT, "Digite o nome do aluno: ");
$nome = trim(fgets(STDIN));

fwrite(STDOUT, "Digite a nota da AV1: ");
$av1 = (float) trim(fgets(STDIN));

fwrite(STDOUT, "Digite a nota da AV2: ");
$av2 = (float) trim(fgets(STDIN));

$media = ($av1 + $av2) / 2;

echo "$nome - Média final: $media" . PHP_EOL;
