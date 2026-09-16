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
Descritivo:Programa que le a altura e o sexo da pessoa e calcula o peso ideal.
***************************/



$altura = (float) readline("Digite a altura em metros: ");
$sexo = strtoupper(readline("Digite o sexo (M/F): "));

if ($sexo == "M") {
    $pesoIdeal = (72.7 * $altura) - 58;
    echo "Peso ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg";
} elseif ($sexo == "F") {
    $pesoIdeal = (62.1 * $altura) - 44.7;
    echo "Peso ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg";
} else {
    echo "Sexo inválido.";
}

?>
    

