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
Descritivo: Escreva um programa que leia dois numeros reais e os exiba primeiro
em ordem crescente e depois em ordem decrescente.
***************************/

// Le uma linha digitada pelo usuario no terminal (CLI).
function lerLinha(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

// Converte o texto digitado em numero real, aceitando virgula como separador.
function lerReal(string $mensagem): float
{
    return (float) str_replace(',', '.', lerLinha($mensagem));
}

echo "=== EXERCICIO 35 - ORDEM CRESCENTE E DECRESCENTE ===\n\n";

$primeiro = lerReal("Digite o primeiro numero real: ");
$segundo  = lerReal("Digite o segundo numero real: ");

// Descobre qual e o menor e qual e o maior antes de montar as duas ordens.
if ($primeiro <= $segundo) {
    $menor = $primeiro;
    $maior = $segundo;
} else {
    $menor = $segundo;
    $maior = $primeiro;
}

$menorFormatado = number_format($menor, 2, ',', '.');
$maiorFormatado = number_format($maior, 2, ',', '.');

echo "\nOrdem crescente..: {$menorFormatado} - {$maiorFormatado}\n";
echo "Ordem decrescente: {$maiorFormatado} - {$menorFormatado}\n";

/**************************
Explicacao do codigo:
O programa le dois numeros reais e, com um unico if/else, identifica qual e o
menor e qual e o maior, guardando cada um em sua propria variavel. Com essa
separacao feita, a ordem crescente e apenas menor seguido de maior, e a
decrescente e a mesma dupla invertida, sem precisar de nova comparacao. Quando
os valores sao iguais a ordem exibida continua valida. Essa e a base logica da
troca de valores usada em algoritmos de ordenacao.
***************************/
