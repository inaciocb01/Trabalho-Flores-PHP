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
Descritivo: Escreva um programa para calcular a conta final de um hospede de um
hotel. Devem ser lidos: nome, tipo do apartamento (A, B, C ou D), quantidade de
diarias e valor do consumo interno do hospede.
O valor unitario da diaria e determinado pela tabela:
- Apartamento A: R$ 150.00 | Apartamento B: R$ 100.00
- Apartamento C: R$ 75.00  | Apartamento D: R$ 50.00
O programa deve calcular:
- Valor total das diarias (dias * valor_diaria);
- Subtotal (diarias + consumo interno);
- Taxa de servico (10% sobre o subtotal);
- Total geral (subtotal + taxa de servico).
Exiba a fatura completa e detalhada.
***************************/

// Percentual da taxa de servico aplicada sobre o subtotal da hospedagem.
const TAXA_SERVICO = 0.10;

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

echo "=== EXERCICIO 40 - CONTA FINAL DO HOSPEDE ===\n\n";

$nome    = lerLinha("Nome do hospede................: ");
$tipo    = strtoupper(lerLinha("Tipo do apartamento (A/B/C/D)..: "));
$diarias = (int) lerLinha("Quantidade de diarias..........: ");
$consumo = lerReal("Consumo interno (R$)...........: ");

// Tabela de precos: cada tipo de apartamento tem um valor de diaria diferente.
if ($tipo == "A") {
    $valorDiaria = 150.00;
} elseif ($tipo == "B") {
    $valorDiaria = 100.00;
} elseif ($tipo == "C") {
    $valorDiaria = 75.00;
} elseif ($tipo == "D") {
    $valorDiaria = 50.00;
} else {
    echo "\nERRO: tipo de apartamento invalido. Informe A, B, C ou D.\n";
    exit(1);
}

// Validacao da quantidade de diarias antes de faturar.
if ($diarias <= 0) {
    echo "\nERRO: a quantidade de diarias deve ser maior que zero.\n";
    exit(1);
}

// Composicao da fatura, passo a passo.
$totalDiarias = $diarias * $valorDiaria;
$subtotal     = $totalDiarias + $consumo;
$taxa         = $subtotal * TAXA_SERVICO;
$totalGeral   = $subtotal + $taxa;

echo "\n=============================================\n";
echo "              FATURA DO HOSPEDE              \n";
echo "=============================================\n";
echo "Hospede..............: {$nome}\n";
echo "Apartamento tipo.....: {$tipo}\n";
echo "Valor da diaria......: R$ " . number_format($valorDiaria, 2, ',', '.') . "\n";
echo "Quantidade de diarias: {$diarias}\n";
echo "---------------------------------------------\n";
echo "Total das diarias....: R$ " . number_format($totalDiarias, 2, ',', '.') . "\n";
echo "Consumo interno......: R$ " . number_format($consumo, 2, ',', '.') . "\n";
echo "Subtotal.............: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
echo "Taxa de servico (10%): R$ " . number_format($taxa, 2, ',', '.') . "\n";
echo "=============================================\n";
echo "TOTAL GERAL..........: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";
echo "=============================================\n";

/**************************
Explicacao do codigo:
O programa monta a conta do hospede em etapas. Primeiro le os dados da estadia
e converte o tipo do apartamento para maiuscula, para aceitar tanto "a" quanto
"A". Um encadeamento de decisoes traduz esse tipo no valor da diaria e rejeita
qualquer letra fora da tabela, assim como rejeita quantidade de diarias
invalida. Em seguida a fatura e calculada na ordem definida pela regra:
diarias multiplicadas pelo valor unitario, soma com o consumo interno para
formar o subtotal, 10% de taxa sobre esse subtotal e, por fim, o total geral.
Cada etapa fica em sua propria variavel, o que permite exibir a fatura
detalhada e facilita conferir onde cada valor entrou.
***************************/
