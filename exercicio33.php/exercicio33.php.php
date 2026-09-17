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
Descritivo: Escreva um programa que leia dois numeros reais e exiba o maior deles.
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

echo "=== EXERCICIO 33 - MAIOR DE DOIS NUMEROS ===\n\n";

$primeiro = lerReal("Digite o primeiro numero real: ");
$segundo  = lerReal("Digite o segundo numero real: ");

// Decisao simples: se o primeiro for maior, ele e o maior; caso contrario, o segundo.
if ($primeiro > $segundo) {
    $maior = $primeiro;
} else {
    $maior = $segundo;
}

echo "\nPrimeiro numero: " . number_format($primeiro, 2, ',', '.') . "\n";
echo "Segundo numero.: " . number_format($segundo, 2, ',', '.') . "\n";
echo "Maior valor....: " . number_format($maior, 2, ',', '.') . "\n";

/**************************
Explicacao do codigo:
O programa le dois numeros reais e compara um com o outro usando um if/else
simples. Se o primeiro for maior que o segundo, ele e guardado na variavel
$maior; em qualquer outro caso o segundo assume essa posicao. Quando os dois
valores sao iguais o resultado exibido continua correto, porque o valor e o
mesmo nos dois lados da comparacao. O uso de uma variavel $maior separa a
decisao da exibicao, deixando o codigo mais simples de manter.
***************************/
