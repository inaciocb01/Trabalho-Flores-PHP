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
Descritivo: Escreva um programa que leia tres notas de um aluno, calcule a media
aritmetica simples e exiba a media e o conceito correspondente, conforme a
tabela:
- Media >= 8.0: Conceito A
- Media >= 5.0 e < 8.0: Conceito B
- Media < 5.0: Conceito C
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

echo "=== EXERCICIO 37 - MEDIA E CONCEITO DO ALUNO ===\n\n";

$nota1 = lerReal("Digite a 1a nota: ");
$nota2 = lerReal("Digite a 2a nota: ");
$nota3 = lerReal("Digite a 3a nota: ");

// Media aritmetica simples: soma das tres notas dividida pela quantidade delas.
$media = ($nota1 + $nota2 + $nota3) / 3;

// Faixas da tabela, testadas da maior para a menor para nao haver sobreposicao.
if ($media >= 8.0) {
    $conceito  = "A";
    $descricao = "media igual ou superior a 8,0";
} elseif ($media >= 5.0) {
    $conceito  = "B";
    $descricao = "media igual ou superior a 5,0 e inferior a 8,0";
} else {
    $conceito  = "C";
    $descricao = "media inferior a 5,0";
}

echo "\n--------------------------------------------\n";
echo "Notas digitadas: "
    . number_format($nota1, 2, ',', '.') . " | "
    . number_format($nota2, 2, ',', '.') . " | "
    . number_format($nota3, 2, ',', '.') . "\n";
echo "Media final....: " . number_format($media, 2, ',', '.') . "\n";
echo "Conceito.......: {$conceito} ({$descricao})\n";

/**************************
Explicacao do codigo:
O programa le as tres notas, soma os valores e divide por 3 para obter a media
aritmetica simples. A classificacao usa um encadeamento if / elseif / else com
as faixas testadas da maior para a menor: quando a media chega no teste do
conceito B, o interpretador ja sabe que ela e menor que 8,0, entao basta
verificar o limite inferior de 5,0. Essa ordem elimina a necessidade de
condicoes compostas e evita que uma mesma media se encaixe em duas faixas.
***************************/
