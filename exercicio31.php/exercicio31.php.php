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
Descritivo: Escreva um programa que leia um numero inteiro e exiba se ele e PAR ou IMPAR.
***************************/

// Le uma linha digitada pelo usuario no terminal (CLI).
function lerLinha(string $mensagem): string
{
    echo $mensagem;
    return trim((string) fgets(STDIN));
}

echo "=== EXERCICIO 31 - PAR OU IMPAR ===\n\n";

$numero = (int) lerLinha("Digite um numero inteiro: ");

// O operador de modulo (%) devolve o resto da divisao inteira.
// Resto zero na divisao por 2 significa que o numero e par.
$resto = $numero % 2;

if ($resto == 0) {
    $classificacao = "PAR";
} else {
    $classificacao = "IMPAR";
}

echo "\nNumero digitado: {$numero}\n";
echo "Resto da divisao por 2: {$resto}\n";
echo "Resultado: o numero {$numero} e {$classificacao}.\n";

/**************************
Explicacao do codigo:
O programa le um numero inteiro pelo teclado e usa o operador de modulo (%)
para obter o resto da divisao por 2. Se o resto for igual a zero, o numero e
par; qualquer outro resto indica numero impar. A decisao e feita com if/else
e o resultado e exibido junto com o resto, para deixar o criterio visivel.
Vale notar que o teste "% 2 == 0" funciona tambem para numeros negativos e
para o zero, que e considerado par.
***************************/
