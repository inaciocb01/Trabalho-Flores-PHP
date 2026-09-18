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
Descritivo:Escreva um programa que exiba na tela do computador a mensagem: 'Aprendendo PHP!!!
***************************/
        echo "====Aprendendo PHP!!!====\n";
        echo "A quanto tempo está aprendendo sobre o PHP??\n";
        
        echo "[1] Comecei a aprender faz pouco tempo(Menos de 1 semana)\n";
        echo "[2] Sou meio intermediário, já tem algum tempo(1 mês a 3 meses)\n";
        echo "[3] Já domino a linguagem e consigo me dar bem com ela(4 a 6 meses)\n\n";

        $tempo = 3;

        if ($tempo == 1) {
        echo "Logo logo você chega lá! Aproveite para aprender";
        } 
        elseif ($tempo == 2) {
        echo "Ótimo, já já dominará por completo, continue prosseguindo";
        }
        elseif ($tempo == 3) {
        echo "Perfeito, continue praticando para ter ainda mais facilidade! Parabéns!";
        }
    
        /*Resumo: O programa exibe a mensagem "Aprendendo PHP!!!" E possui uma pesquisa com interação ao usuário sobre o desenvolvimento da
        linguagem de programação*/
?>