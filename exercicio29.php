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
Descritivo: Escreva um programa que leia um número real e, se for positivo, exiba seu inverso (1/x);
caso contrário, exiba o seu valor absoluto (número multiplicado por -1).

***************************/

$N = (float) readline("Informe um número real: ");
if ($N > 0) {
$Positivo = 1/$N;
echo "Seu número inverso é: " .$Positivo;} else {
$Absoluto = $N * (-1); 
echo "Seu valor absoluto é: " .$Absoluto;}
/* Peguei as informações de um número e analisei se ele era positivo.
Se sim, calculava o inverso desse número. 
Se não, calculava o valor absoluto desse número.
*/

?>