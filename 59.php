<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
RA 26003569-2 - Lucas Eduardo Ferreira Branco   = 01 ao 10 Exercício
RA 26008853-2 - Kaylane Rosa Domingos           = 11 ao 20 Exercício
RA 26007934-2 - Inácio Correa Barbosa           = 21 ao 30 Exercício
RA 26008762-2 - Caik dos Santos Cassiano        = 31 ao 40 Exercício
RA 26014449-2 - Vitor Hugo Carvalho Stenger     = 41 ao 50 Exercício
RA 26008105-2 - Jonathan Manuel Rodríguez Barba = 51 ao 60 Exercício
Data: 19 de Setembro de 2026
Descritivo: Programa que le o ano de nascimento e o ano atual e calcula a idade para determinar qual categoria a pessoa pertence
***************************/
$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

$idade = $anoAtual - $anoNascimento;

if ($idade >= 0 && $idade <= 4) {
    $categoria = "Não aceito";
} elseif ($idade >= 5 && $idade <= 7) {
    $categoria = "Infantil A";
} elseif ($idade >= 8 && $idade <= 10) {
    $categoria = "Infantil B";
} elseif ($idade >= 11 && $idade <= 13) {
    $categoria = "Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    $categoria = "Juvenil B";
} elseif ($idade > 17) {
    $categoria = "Sênior";
} else {
    $categoria = "Ano de nascimento inválido";
}

echo "Idade: $idade anos" . PHP_EOL;
echo "Categoria: $categoria";

?>