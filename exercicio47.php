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

Descritivo: 47: Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabética.
 *******************************************************************************/

$nome1 = (readline('Digite o primeiro nome: '));
$nome2 = (readline('Digite o segundo nome: '));

if ($nome1 < $nome2) {
    echo "Ordem alfabética: $nome1, $nome2";
} else {
    echo "Ordem alfabética: $nome2, $nome1";
}

/*
le dois nomes e retorna no terminal em ordem alfabética.
*/

?>