<?php

/******************************************************************************
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

Descritivo: 43: Escreva um programa que leia um número inteiro de 3 casas decimais (100 a 999) e
informe se o algarismo da casa das centenas é par ou ímpar
 *******************************************************************************/

$numero = (int) readline("Digite um número de 3 dígitos (100 a 999): ");

$centena = intval($numero / 100);

if ($centena % 2 === 0) {
    $resultado = "O algarismo da casa das centenas do número $numero é par.";
} else {
    $resultado = "O algarismo da casa das centenas do número $numero é ímpar.";
}
echo $resultado;

/*
faz uma verificação se o numero fornecido pelo usuario é par ou impar, 
retornando uma mensagem positiva caso seja par e uma mensagem negativa caso seja impar.
*/
?>