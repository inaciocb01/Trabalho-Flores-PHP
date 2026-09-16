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
Descritivo:Programa que le os reais que são colocados e faz a conta de convertir para dolar com a taxa de cotação.
***************************/


$valorReais = (float) readline("Digite valor em reais: ");
$taxaCotacao = (float) readline("Digite a taxa de cotação atual ");


$valorDolares = $valorReais / $taxaCotacao;


echo "Valor em Reais: R$ " . number_format($valorReais, 2, ',', '.') . "\n";
echo "Taxa de Cotação: R$ " . number_format($taxaCotacao, 2, ',', '.') . "\n";
echo "Valor convertido: $ " . number_format($valorDolares, 2, '.', ',');
?>
    

