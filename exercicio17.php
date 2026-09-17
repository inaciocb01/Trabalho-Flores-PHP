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
Descritivo: Escreva um programa que leia dois números inteiros (dividendo e divisor) e exiba na tela uma saída detalhada contendo: Dividendo, Divisor, Quociente (inteiro) e Resto da divisão.
*******************************************************************************/

// O programa lê o dividendo e o divisor, calcula o quociente inteiro com
// intdiv() e o resto com o operador %, exibindo os quatro valores.
// Uma verificação evita a divisão por zero.

fwrite(STDOUT, "Digite o dividendo: ");
$dividendo = (int) trim(fgets(STDIN));

fwrite(STDOUT, "Digite o divisor: ");
$divisor = (int) trim(fgets(STDIN));

if ($divisor === 0) {
    echo "Erro: o divisor não pode ser zero." . PHP_EOL;
} else {
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    echo "Dividendo: $dividendo" . PHP_EOL;
    echo "Divisor: $divisor" . PHP_EOL;
    echo "Quociente: $quociente" . PHP_EOL;
    echo "Resto: $resto" . PHP_EOL;
}
