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
Descritivo: Programa que le uma letra e determina se é uma vogal minúscula , maiúscula ou uma consoante.
***************************/



$letra = readline("Digite uma letra: ");

if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
    echo "Vogal maiúscula";
} elseif ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
    echo "Vogal minúscula";
} else {
    echo "Consoante";
}

?>