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
Descritivo:Escreva um programa que leia um número inteiro e exiba se ele é divisível por 3 (múltiplo de 3).

***************************/

$N = (int) readline("Informe um número inteiro: ");
if($N % 3 == 0) {
echo "Seu número " .$N, " é divisível por 3";}
/* Peguei a informação de um número e se o resto da divisão dele por 3 resulta em 0, 
então o número é divisível por 3.
*/
?>