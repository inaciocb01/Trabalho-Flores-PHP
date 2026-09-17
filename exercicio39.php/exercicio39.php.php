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
Descritivo: Uma empresa deseja aplicar um reajuste salarial aos seus
funcionarios. Escreva um programa que leia o nome do funcionario e seu salario
atual e, de acordo com a tabela abaixo, calcule e exiba o novo salario:
- Salario atual de R$ 0.00 a R$ 1000.00: 20% de reajuste
- Salario atual de R$ 1000.01 a R$ 5000.00: 10% de reajuste
- Salario atual acima de R$ 5000.00: 0% (sem reajuste)
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

echo "=== EXERCICIO 39 - REAJUSTE SALARIAL ===\n\n";

$nome    = lerLinha("Nome do funcionario..: ");
$salario = lerReal("Salario atual (R$)...: ");

// Faixas da tabela: cada intervalo define um percentual diferente de reajuste.
if ($salario <= 1000.00) {
    $percentual = 20;
    $faixa      = "ate R$ 1.000,00";
} elseif ($salario <= 5000.00) {
    $percentual = 10;
    $faixa      = "de R$ 1.000,01 a R$ 5.000,00";
} else {
    $percentual = 0;
    $faixa      = "acima de R$ 5.000,00";
}

// O valor do aumento e o percentual aplicado sobre o salario atual.
$valorReajuste = $salario * ($percentual / 100);
$novoSalario   = $salario + $valorReajuste;

echo "\n--------------------------------------------\n";
echo "DEMONSTRATIVO DE REAJUSTE\n";
echo "--------------------------------------------\n";
echo "Funcionario......: {$nome}\n";
echo "Salario atual....: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Faixa............: {$faixa}\n";
echo "Percentual.......: {$percentual}%\n";
echo "Valor do aumento.: R$ " . number_format($valorReajuste, 2, ',', '.') . "\n";
echo "--------------------------------------------\n";
echo "NOVO SALARIO.....: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";

/**************************
Explicacao do codigo:
O programa le o nome e o salario atual do funcionario e identifica em qual das
tres faixas da tabela esse salario se encaixa, guardando o percentual
correspondente em uma variavel. Como os testes sao encadeados em ordem
crescente, o segundo so e avaliado quando o salario ja passou de R$ 1.000,00,
o que reproduz exatamente o limite de R$ 1.000,01 da tabela sem precisar de
condicao composta. Depois o percentual e aplicado uma unica vez sobre o
salario, e a saida mostra o valor do aumento separado do novo salario, no
formato de um demonstrativo que o RH poderia entregar ao funcionario.
***************************/
