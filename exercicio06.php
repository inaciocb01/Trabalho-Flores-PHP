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
Descritivo: Escreva um programa que calcule e exiba o produto entre os números 28 e 43.
***************************/
    
    echo "vamos calcular o produto de 28 e 43!\n";
    $numero = 28 * 43;
    $resposta = readline("O produto é " . $numero . ", Deseja calcular mais algum produto?: ");
    while ($resposta == "Sim" || $resposta == "sim") {
            $numero1 = readline ("Digite um número: ");
            $numero2 = readline ("Digite outro número: ");
            $numero = $numero1 * $numero2
            echo "O novo produto é " . $numero . "\n";
            $resposta = readline("deseja calcular mais um produto?: ");
    }
    /*Resumo:  O programa exibe de primeira o produto de 28 e 43 fazendo o calculo e atribuindo seu resultado
    a uma variável que é exibida logo depois, ele da a opção(caso o usuário queira) de obter mais produtos conforme a sua vontade.*/
    ?>
