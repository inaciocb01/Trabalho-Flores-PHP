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
Descritivo: Escreva um programa que leia um nome, um endereço e um telefone via teclado e imprima-os na tela organizados em linhas separadas.
***************************/
    do {
    $nome = readline("\nInforme o seu nome: ");
    $endereco = readline("\nInforme seu endereço: ");
    $numerotelefone = readline("\nInforme um número de Telefone: ");
    echo ("\n");
    echo ("\n");
    echo ("As informações fornecidas foram: \nNome: " . $nome . "\nEndereço: " . $endereco . "\nNúmero de telefone: " . $numerotelefone  . "\nDeseja confirmar o cadastro?\n");
    $resposta = readline();
    }
    while ($resposta == "Não" || $resposta == "nao" || $resposta == "Nao" || $resposta == "não");
    /*Resumo: O usuário informa suas informações com readline e elas são exibidas em linhas separadas com \n, após a exibição dos usuários, 
    o mesmo pode conferir e se tiver colocado alguma informação errada pode refazer o cadastro de informações!*/
?>