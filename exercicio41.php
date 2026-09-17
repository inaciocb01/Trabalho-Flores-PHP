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

Descritivo: 41: Escreva um programa para calcular o imposto de renda anual de um contribuinte. O
programa deve ler: CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição
Previdenciária, Despesas Médicas e Número de Dependentes.
Considere as seguintes regras:
- Deduzir R$ 1.080,00 por dependente;
- Total das Deduções = Contribuição Previdenciária + Despesas Médicas + Dedução por
dependentes;
- Base de Cálculo = Rendimento Anual - Total das Deduções;
- Imposto Devido = (Base de Cálculo * Alíquota) - Parcela a Deduzir (conforme tabela abaixo):
 * Base até R$ 10.800,00: Isento (Alíquota 0%)
 * Base de R$ 10.800,01 até R$ 21.600,00: Alíquota 15%, Parcela a deduzir R$ 1.620,00
 * Base acima de R$ 21.600,00: Alíquota 25%, Parcela a deduzir R$ 3.780,00
- Se a diferença (Imposto Devido - Imposto Retido na Fonte) for positiva, há imposto a
PAGAR; se for negativa, há imposto a RESTITUIR. 
 ***************************/

$cpf = (readline("Digite o CPF: "));
$nome = (readline("Digite o Nome: "));
$rendimentoAnual = (float) readline("Digite o Rendimento Anual: ");
$impostoRetido = (float) readline("Digite o Imposto Retido na Fonte: ");
$contribuicaoPrevidenciaria = (float) readline("Digite a Contribuição Previdenciária: ");
$despesasMedicas = (float) readline("Digite as Despesas Médicas: ");
$numeroDependentes = (int) readline("Digite o Número de Dependentes: ");


if ($numeroDependentes < 0) {
    $numeroDependentes = 0;
}
if ($rendimentoAnual < 0) {
    $rendimentoAnual = 0;
}

$deducaoDependentes = $numeroDependentes * 1080.00;
$totalDeducoes = $contribuicaoPrevidenciaria + $despesasMedicas + $deducaoDependentes;

$baseCalculo = $rendimentoAnual - $totalDeducoes;
if ($baseCalculo < 0) {
    $baseCalculo = 0;
}

if ($baseCalculo <= 10800.00) {
    $aliquota = 0;
    $parcelaDeduzir = 0;
} elseif ($baseCalculo <= 21600.00) {
    $aliquota = 0.15;
    $parcelaDeduzir = 1620.00;
} else {
    $aliquota = 0.25;
    $parcelaDeduzir = 3780.00;
}

if ($aliquota > 0) {
    $impostoDevido = round(($baseCalculo * $aliquota) - $parcelaDeduzir, 2);
} else {
    $impostoDevido = 0;
}

$diferenca = round($impostoDevido - $impostoRetido, 2);
$resultado = ($diferenca > 0) ? "PAGAR" : "RESTITUIR";
$resultado .= " R$ " . number_format(abs($diferenca), 2, ',', '.');

echo "CPF: $cpf\n";
echo "Nome: $nome\n";
echo "Base de Cálculo: R$ " . number_format($baseCalculo, 2, ',', '.') . "\n";
echo "Imposto Devido: R$ " . number_format($impostoDevido, 2, ',', '.') . "\n";
echo "Imposto Retido: R$ " . number_format($impostoRetido, 2, ',', '.') . "\n";
echo "Resultado: $resultado\n";

/* 
faz uma base de calculo do impsto de renda conforme os dados fornecidos pelo usuario
calculando o imposto e retornando a diferença que ele deve pagar e o retido 
*/ 

?>

