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
Descritivo: Escreva um programa que leia quatro números inteiros e calcule a média ponderada
deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e 4.

***************************/

$n1 = (int) readline("Informe o primeiro número:");
$n2 = (int) readline("Informe o segundo número:");
$n3 = (int) readline("Informe o terceiro número:");
$n4 = (int) readline("Informe o quarto número:");
$MediaPonderada = ($n1 * 1 + $n2 * 2 + $n3 * 3 + $n4 * 4) / (1 + 2 + 3 + 4);
echo "O resultado da Média Ponderada é: ".$MediaPonderada ;
/* Eu peguei 4 números aleátorios, multipliquei cada número pelo seu peso respectivo, somei os resultados e fiz a divisão dessa soma.
*/
?>