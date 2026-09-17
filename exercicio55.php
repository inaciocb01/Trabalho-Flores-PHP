<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
RA 26003569-2 - Lucas Eduardo Ferreira Branco   = 01 ao 10 Exercício
RA 26008853-2 - Kaylane Rosa Domingos           = 11 ao 20 Exercício
RA 26007934-2 - Inácio Correa Barbosa           = 21 ao 30 Exercício
RA 26008762-2 - Caik dos Santos Cassiano        = 31 ao 40 Exercício
RA 26014449-2 - Vitor Hugo Carvalho Stenger     = 41 ao 50 Exercício
RA 26008105-2 - Jonathan Manuel Rodríguez Barba = 51 ao 60 Exercício
Data: 19 de Setembro de 2026
Descritivo: Programa que le um número do 1 até o 12 e fala o mês que é.
***************************/


$numero = (int) readline("Digite um número de 1 a 12: ");

$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

if ($numero >= 1 && $numero <= 12) {
    echo $meses[$numero];
} else {
    echo "Número inválido. Digite um número entre 1 e 12.";
}
/* Descritivo:O programa solicita um número de 1 a 12 e utiliza um array para relacionar cada número ao seu respectivo mês. Em seguida, verifica se o número está dentro do intervalo válido e exibe o mês correspondente. Caso contrário, informa que o número é inválido. */
?>