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
Descritivo:Programa que le a quantidade de habitantes e a idade , com isso faz uma media .
***************************/


$habitantes = (int) readline("Digite a quantidade de habitantes: ");

$somaIdades = 0;

for ($i = 1; $i <= $habitantes; $i++) {
    $idade = (int) readline("Digite a idade do morador $i: ");
    
    $somaIdades += $idade;
}

if ($habitantes > 0) {
    $media = $somaIdades / $habitantes;
    
    echo "Média das idades: " . number_format($media, 2, ',', '.') . " anos";
} else {
    echo "A quantidade de habitantes deve ser maior que zero.";
}

?>