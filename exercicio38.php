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
Descritivo: Escreva um programa que determine o grau de obesidade de uma pessoa
a partir de seu peso (kg) e altura (m), calculando o IMC (Massa = Peso /
Altura^2) e classificando de acordo com a tabela:
- IMC < 26: Normal
- IMC >= 26 e < 30: Obeso
- IMC >= 30: Obeso Morbido
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

echo "=== EXERCICIO 38 - CALCULO DO IMC ===\n\n";

$peso   = lerReal("Digite o peso em kg (ex.: 72,5): ");
$altura = lerReal("Digite a altura em m (ex.: 1,75): ");

// Validacao: altura zero ou negativa tornaria a divisao invalida.
if ($altura <= 0 || $peso <= 0) {
    echo "\nERRO: peso e altura devem ser valores maiores que zero.\n";
    exit(1);
}

// IMC = peso dividido pelo quadrado da altura.
$imc = $peso / ($altura * $altura);

// Faixas da tabela, testadas da menor para a maior.
if ($imc < 26) {
    $classificacao = "NORMAL";
} elseif ($imc < 30) {
    $classificacao = "OBESO";
} else {
    $classificacao = "OBESO MORBIDO";
}

echo "\n--------------------------------------------\n";
echo "Peso...........: " . number_format($peso, 2, ',', '.') . " kg\n";
echo "Altura.........: " . number_format($altura, 2, ',', '.') . " m\n";
echo "IMC calculado..: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificacao..: {$classificacao}\n";

/**************************
Explicacao do codigo:
O programa le peso e altura, valida que ambos sao maiores que zero (o que
protege a divisao contra altura igual a zero) e calcula o IMC dividindo o peso
pelo quadrado da altura. A classificacao usa if / elseif / else com as faixas
em ordem crescente: abaixo de 26 e normal; como o segundo teste so e avaliado
quando o IMC ja e no minimo 26, basta comparar com 30 para separar obeso de
obeso morbido. O resultado mostra o IMC arredondado em duas casas junto da
faixa correspondente.
***************************/
