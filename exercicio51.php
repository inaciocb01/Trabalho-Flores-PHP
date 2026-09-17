

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
Descritivo:Programa que le as duas notas maiores e faz a média aritmética com elas.
***************************/


$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");


$notas = [$nota1, $nota2, $nota3];

sort($notas);

$maior1 = $notas[1]; // Segunda maior
$maior2 = $notas[2]; // Maior


$media = ($maior1 + $maior2) / 2;


echo "A média aritmética das duas maiores notas é: " . number_format($media, 2, ',', '.') . "\n";

/*Descritivo : O programa solicita três notas ao usuário, armazena os valores em um vetor e os organiza em ordem crescente. Em seguida, seleciona as duas maiores notas, calcula a média aritmética entre elas e exibe o resultado com duas casas decimais.*/
?>