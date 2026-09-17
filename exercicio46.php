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

Descritivo: 46: Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se
ela é carioca, paulista, mineira ou de outro estado (outros).
 *******************************************************************************/

//usei o readline para ler valores do teclado no terminal.

$estado = (readline("Digite a sigla do estado onde você nasceu: "));

if ($estado == "RJ" || $estado == "rj") {
    echo "Você é carioca.";
} elseif ($estado == "SP" || $estado == "sp") {
    echo "Você é paulista.";
} elseif ($estado == "MG" || $estado == "mg") {
    echo "Você é mineira.";
} else {
    echo "Você é de outro estado.";
}

/*
verifica a sigla do estado fornecido pelo usuario
caso seja RJ, SP ou MG ele retorna a mensagem correspondente, 
caso não seja ele retorna uma mensagem de outro estado.
*/

?>