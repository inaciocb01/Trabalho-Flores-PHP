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
Descritivo: Escreva um programa que leia um numero real e informe se ele e
positivo, negativo ou nulo.
***************************/

// Le uma linha digitada pelo usuario no terminal (CLI).
function lerLinha(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

echo "=== EXERCICIO 32 - POSITIVO, NEGATIVO OU NULO ===\n\n";

// A virgula e trocada por ponto para aceitar tambem o padrao brasileiro (ex.: 3,5).
$entrada = str_replace(',', '.', lerLinha("Digite um numero real: "));
$numero  = (float) $entrada;

// Encadeamento de decisoes: as tres faixas possiveis sao mutuamente exclusivas.
if ($numero > 0) {
    $situacao = "POSITIVO";
} elseif ($numero < 0) {
    $situacao = "NEGATIVO";
} else {
    $situacao = "NULO (igual a zero)";
}

echo "\nNumero digitado: " . number_format($numero, 2, ',', '.') . "\n";
echo "Resultado: o numero e {$situacao}.\n";

/**************************
Explicacao do codigo:
O programa le um numero real e o classifica em tres situacoes possiveis usando
um encadeamento if / elseif / else. Primeiro testa se e maior que zero
(positivo); se nao for, testa se e menor que zero (negativo); se nenhuma das
duas condicoes for verdadeira, so resta o valor zero, tratado no else como
nulo. Esse encadeamento garante que apenas uma mensagem seja exibida, sem
sobreposicao de casos. A entrada tambem aceita virgula como separador decimal.
***************************/
