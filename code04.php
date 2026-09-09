<?php
$dia = 6;
$mensagem = "";

switch ($dia) {
    case 1:
        $mensagem = "Domingo";
        break;
    case 2:
        $mensagem = "Segunda-feira";
        break;
    case 3:
        $mensagem = "Terça-feira";
        break;
    case 4:
        $mensagem = "Quarta-feira";
        break;
    case 5:
        $mensagem = "Quinta-feira";
        break;
    case 6:
        $mensagem = "Sexta-feira";
        break;
    case 7:
        $mensagem = "Sábado";
        break;
    default:
        $mensagem = "Dia inválido";
        break;
}

echo $mensagem;
?>
