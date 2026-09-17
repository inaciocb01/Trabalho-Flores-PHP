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

Descritivo: 44: Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual.
Verifique se o ano de nascimento é um ano válido (maior que 1900 e menor ou igual ao ano
atual) e exiba a idade calculada.
 *******************************************************************************/

$nascimento = (int) readline("Digite o ano de nascimento: ");
$anoatual = (int) readline("Digite o ano atual: ");

if ($nascimento > 1900 && $nascimento <= $anoatual) {
    $idade = $anoatual - $nascimento;
    echo "Você tem $idade anos de idade.";
} else {
    echo "Ano inválido solicite um ano a partir de 1901.";
}

/* 
verifica o ano de nascimento fornecido pelo usuario, 
caso seja maior que 1900 e menor ou igual ao ano atual ele calcula a idade,
caso não seja ele retorna uma mensagem de erro. 
*/

?>