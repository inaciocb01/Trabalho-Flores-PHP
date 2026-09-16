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
Descritivo: Programa que le o dia , o mês e o ano e define se a data é valida .
***************************/

$dia = (int) readline("Digite o dia: ");
$mes = (int) readline("Digite o mês: ");
$ano = (int) readline("Digite o ano: ");

$dataValida = true;


if ($ano <= 0) {
    $dataValida = false;
}
elseif ($mes < 1 || $mes > 12) {
    $dataValida = false;
}
else{ $bissexto = ($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0);}


 if ($mes == 2) {
        $diasNoMes = $bissexto ? 29 : 28;
    } 
    elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
        $diasNoMes = 30;
    } 
    else {
        $diasNoMes = 31;
    }
if ($dia < 1 || $dia > $diasNoMes) {
        $dataValida = false;
    }
    if ($dataValida) {
    echo "A data é válida.\n";
} else {
    echo "A data não é válida.\n";
}
?>

    

