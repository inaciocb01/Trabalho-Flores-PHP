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
Descritivo: Escreva um programa que declare uma variável inteira, atribua a ela o valor 10 e exiba o seu valor na tela com a mensagem formatada: 'Valor de x = [valor]'.
***************************/
    $inteiro = 10;
    echo "Valor de x=[" . $inteiro . "]\n";
    echo "deseja somar algum valor?\n";
    $Resposta = readline();

    if ($Resposta == "Sim" || $Resposta =="sim") {
        echo "Qual soma de X deseja calcular?\n";
            echo "Digite Valor 1:\n";
            $Valor1 = readline();
            Echo "Digite Valor 2:\n";
            $valor2 = readline();
            $Resposta = $Valor1 + $valor2;
            Echo "Valor de X=$Resposta";
        }
    elseif ($Resposta == "Não" || $Resposta == "não") {
        echo "Até logo!\n";
    }
    /*Resumo: O código proposto começa criando a variável inteira e definindo seu valor 10, sendo proposto a solução e 
    adicionando a funcionalidade de soma opcional a desejo do usuário.*/
?>