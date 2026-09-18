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
Descritivo: Escreva um programa que leia um número inteiro e exiba na tela o seu antecessor e o seu sucessor.
***************************/
    $numerodigitado = readline("Digite um número: ");
    $antecessor = $numerodigitado - 1
    $sucessor = $numerodigitado + 1
    echo "O antecessor do número " . $numerodigitado . " é " . $antecessor . "e seu sucessor é " . $sucessor;
    /*Resumo: O sistema cria uma variável e lhe é atribuido o número digitado pelo usuário
    esse número é feito o calculo de subtração e soma para calcular seu antecessor e sucessor
    exibindo-os a seguir com o echo.*/
?>