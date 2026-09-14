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
Descritivo: Programa que le a quantidade de habitantes e a idade , com isso faz uma media .
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