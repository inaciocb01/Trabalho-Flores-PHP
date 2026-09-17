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
Descritivo: Escreva um programa que leia dois numeros reais e exiba o maior de
forma clara (abordagem focada em logica estruturada de decisao composta).
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

echo "=== EXERCICIO 34 - MAIOR VALOR COM DECISAO COMPOSTA ===\n\n";

$a = lerReal("Digite o primeiro numero real (A): ");
$b = lerReal("Digite o segundo numero real (B): ");

// Decisao composta: os tres desfechos possiveis sao tratados explicitamente,
// inclusive o caso de igualdade, que o if/else simples deixaria escondido.
if ($a > $b) {
    $mensagem = "O numero A (" . number_format($a, 2, ',', '.') . ") e o MAIOR.";
} elseif ($b > $a) {
    $mensagem = "O numero B (" . number_format($b, 2, ',', '.') . ") e o MAIOR.";
} else {
    $mensagem = "Os numeros sao IGUAIS, portanto nao existe um maior entre eles.";
}

echo "\n--------------------------------------------\n";
echo "Valor de A: " . number_format($a, 2, ',', '.') . "\n";
echo "Valor de B: " . number_format($b, 2, ',', '.') . "\n";
echo "--------------------------------------------\n";
echo "{$mensagem}\n";

/**************************
Explicacao do codigo:
Diferente do exercicio anterior, aqui a comparacao e feita com decisao composta:
o programa testa A maior que B, depois B maior que A e, por eliminacao, trata o
caso em que os dois sao iguais. Assim nenhuma situacao fica implicita e o
usuario recebe uma resposta clara em cada uma das tres possibilidades. A
mensagem final e montada dentro das condicoes e exibida uma unica vez, o que
evita repetir comandos de saida em cada ramo da decisao.
***************************/
