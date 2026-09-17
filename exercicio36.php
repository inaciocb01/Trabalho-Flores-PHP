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
Descritivo: Deseja-se calcular a conta de consumo de energia eletrica de um
consumidor. Escreva um programa que leia o codigo do consumidor, o preco do kWh
e a quantidade de kWh consumida. Exiba o codigo do consumidor e o total a pagar,
sabendo que a taxa minima cobrada e de R$ 11,20.
***************************/

// Valor minimo cobrado na fatura, independente do consumo registrado.
const TAXA_MINIMA = 11.20;

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

echo "=== EXERCICIO 36 - CONTA DE ENERGIA ELETRICA ===\n\n";

$codigo   = lerLinha("Codigo do consumidor.......: ");
$precoKwh = lerReal("Preco do kWh (R$)..........: ");
$consumo  = lerReal("Quantidade de kWh consumida: ");

// Valor bruto do consumo: preco unitario multiplicado pela quantidade consumida.
$valorConsumo = $precoKwh * $consumo;

// Regra de negocio: a concessionaria nunca cobra menos que a taxa minima.
if ($valorConsumo < TAXA_MINIMA) {
    $totalPagar = TAXA_MINIMA;
    $observacao = "Consumo abaixo do minimo - aplicada a taxa minima de R$ "
        . number_format(TAXA_MINIMA, 2, ',', '.') . ".";
} else {
    $totalPagar = $valorConsumo;
    $observacao = "Cobranca pelo consumo registrado.";
}

echo "\n--------------------------------------------\n";
echo "FATURA DE ENERGIA ELETRICA\n";
echo "--------------------------------------------\n";
echo "Consumidor.......: {$codigo}\n";
echo "Preco do kWh.....: R$ " . number_format($precoKwh, 2, ',', '.') . "\n";
echo "Consumo..........: " . number_format($consumo, 2, ',', '.') . " kWh\n";
echo "Valor do consumo.: R$ " . number_format($valorConsumo, 2, ',', '.') . "\n";
echo "--------------------------------------------\n";
echo "TOTAL A PAGAR....: R$ " . number_format($totalPagar, 2, ',', '.') . "\n";
echo "{$observacao}\n";

/**************************
Explicacao do codigo:
O programa le o codigo do consumidor, o preco do kWh e o consumo do periodo, e
multiplica preco por quantidade para chegar ao valor bruto da conta. Em
seguida aplica a regra da taxa minima: se o valor calculado ficar abaixo de
R$ 11,20, a fatura passa a cobrar exatamente esse piso; caso contrario cobra o
consumo real. A taxa minima foi declarada como constante, entao se a
concessionaria reajustar esse valor basta alterar um unico ponto do codigo. A
saida mostra o valor calculado e o total cobrado, deixando claro quando o piso
foi aplicado.
***************************/
