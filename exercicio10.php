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
Descritivo: Escreva um programa que leia dois números inteiros, calcule a soma deles e exiba o resultado precedido pela palavra 'Soma: '.
***************************/
 echo "Escreva um número! \n";
 $numero1 = readline();
 echo "Escreva outro número\n";
 $numero2 = readline();
$soma = $numero1 + $numero2;
 echo "Soma: " . $soma;
 /*Resumo: O programa pergunta ao usuário quais números inteiros ele quer que some com readline obtendo sua resposta. 
 Logo em seguida ele faz a soma desses dois valores informados e exibe na tela como o problema exige.*/
 ?>
