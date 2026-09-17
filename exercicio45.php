<?php

/******************************************************************************
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

Descritivo: 45: Escreva um programa que implemente uma calculadora básica. O programa deve obter
dois números reais do teclado e um operador caractere representando a operação
matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
 *******************************************************************************/

/* declarei as variaveis e usei float para numeros quebrados
e o readline para ler valores do teclado tipo -+/* */

$numero1 = floatval(readline("Digite o primeiro número: "));
$numero2 = floatval(readline("Digite o segundo número: "));
$operador = trim(readline("Digite o operador (+, -, *, /): "));

//aqui usei o switch para verificar qual operador foi digitado e realizar o calculo.

switch ($operador) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 == 0) {
            echo "Erro: Divisão por zero não é permitida.";
            exit;
        }
        $resultado = $numero1 / $numero2;
        break;

    // o default é usado para caso o usuario digite um operador invalido.
        
    default:
        echo "Operador inválido. Use '+', '-', '*' ou '/'.";
        exit;
}

echo "O resultado da operação é: $resultado";

/*
implementa uma calculadora simples, lendo dois números reais e um operador,
realizando o cálculo correspondente e exibindo o resultado.
*/
?>