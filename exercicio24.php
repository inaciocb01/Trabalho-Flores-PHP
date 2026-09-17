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
Descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferência com
base em seu raio fornecido pelo usuário. Defina PI como uma constante com valor 3.1415 (Fórmula: C = 2 * PI * Raio).

***************************/
$Raio = (float) readline("Informe o raio do cículo: ");
$pi = 3.1415; 
$Circunferencia = 2 * $pi * $Raio;
echo "A circunferência do círculo é de: " .$Circunferencia;
/* Peguei o raio do círculo e calculei o raio vezes pi vezes 2 para obter o comprimento da circunferência do círculo
*/

?>