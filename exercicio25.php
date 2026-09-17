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
Descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o
equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32)).

***************************/
$Fah = (int) readline("Informe a Temperatura em Fahrenheit: ");
$Cel = ($Fah - 32) * 5/9;
echo "A temperatura atual em Celcius é de: " .$Cel,"°C";

/* Peguei a informação da temperatura em Fahrenheit e converti para Celcius utilizando a fórmula de conversão
*/
?>