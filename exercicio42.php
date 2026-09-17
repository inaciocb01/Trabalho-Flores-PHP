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

Descritivo: 42: Escreva um programa que leia um número inteiro e informe se ele é divisível por 3 e por 7
simultaneamente.
 *******************************************************************************/

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 3 === 0 && $numero % 7 === 0) {
    $resultado = "O número $numero é divisível por 3 e por 7 simultaneamente.";
} else {
    $resultado = "O número $numero não é divisível por 3 e por 7 simultaneamente.";
}
echo $resultado;

/* 
calcula se o numero fornecido pelo usuario é divisivel por 3 e 7 ao mesmo tempo, 
caso seja ele retorna uma mensagem positiva, 
caso não seja ele retorna uma mensagem negativa. 
*/

?>