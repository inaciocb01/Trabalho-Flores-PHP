

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
Descritivo: Programa que le os reais que são colocados e faz a conta de convertir para dolar com a taxa de cotação.
***************************/


$valorReais = (float) readline("Digite valor em reais: ");
$taxaCotacao = (float) readline("Digite a taxa de cotação atual ");


$valorDolares = $valorReais / $taxaCotacao;


echo "Valor em Reais: R$ " . number_format($valorReais, 2, ',', '.') . "\n";
echo "Taxa de Cotação: R$ " . number_format($taxaCotacao, 2, ',', '.') . "\n";
echo "Valor convertido: $ " . number_format($valorDolares, 2, '.', ',');
?>