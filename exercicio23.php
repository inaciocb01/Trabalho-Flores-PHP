<?php
/**************************
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
Descritivo: Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e
exiba a sua área (Fórmula: Area = (Base * Altura) / 2).


***************************/

$Base = (float) readline("Informe a Base do triângulo: ");
$Altura = (float) readline("Informe a Altura do triângulo: ");
$Area = ($Base * $Altura) / 2;
echo "A área total do triângulo é de: " .$Area;
/* Peguei as informações de Base e Altura de um triângulo qualquer e apliquei a fórmula para descobrir sua área.
*/
?>