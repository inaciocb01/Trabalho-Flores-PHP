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
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo
saldo reajustado com um acréscimo de 2%.

***************************/

$Saldo = (float) readline("Informe o valor da aplicação bancária: ");
$SaldoNovo = $Saldo + ($Saldo * 0.02);
echo "O saldo reajustado é de: " .$SaldoNovo;
/* Peguei o saldo bancário atual e realizei o acréscimo de 2% no valor
*/

?>