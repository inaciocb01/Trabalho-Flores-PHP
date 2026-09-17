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
Descritivo: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo
entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e depois da troca.

***************************/

$A = (int) readline("Informe o valor de A: ");
$B = (int) readline("Informe o valor de B: ");
echo "O valor de A antes da troca era de: " .$A ."\n";
echo "O valor de B antes da troca era de: " .$B ."\n";
$A_Original = $A;
$A = $B;
$B = $A_Original;
echo "O valor de A depois da troca é de: " .$A ."\n";
echo "O valor de B depois da troca é de: " .$B ."\n";
/* Peguei os valores originais de A e B, e troquei os resultados um de outro para que A valesse B e vice vers.
*/

?>