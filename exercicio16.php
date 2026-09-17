<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
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
Descritivo: Escreva um programa que leia um número inteiro positivo e exiba o dobro dele. Se o número for negativo, informe o erro.
*******************************************************************************/

// O programa lê um número inteiro e verifica, com uma estrutura condicional,
// se ele é negativo. Se for, exibe uma mensagem de erro; caso contrário,
// calcula e exibe o dobro do valor.

fwrite(STDOUT, "Digite um número inteiro positivo: ");
$numero = (int) trim(fgets(STDIN));

if ($numero < 0) {
    echo "Erro: o número informado é negativo." . PHP_EOL;
} else {
    $dobro = $numero * 2;
    echo "Dobro: $dobro" . PHP_EOL;
}
